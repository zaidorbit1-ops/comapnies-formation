<?php
declare(strict_types=1);

define('COMPANIES_FORMATION_APP', true);
require_once __DIR__ . '/includes/form-security.php';
require_once __DIR__ . '/includes/mail-service.php';
startFormSession();

function redirectWithStatus(string $path, string $anchor, string $status): never
{
  header('Location: ' . $path . '?form_status=' . rawurlencode($status) . '#' . rawurlencode($anchor), true, 303);
  exit;
}

function respondToForm(string $status, string $message, string $path, string $anchor, string $customerName = ''): never
{
  if (str_contains($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json')) {
    if ($status === 'success') {
      unset($_SESSION['form_csrf_token']);
    }
    $httpStatus = match ($status) {
      'success' => 200,
      'invalid' => 422,
      'error' => 500,
      default => 400,
    };
    http_response_code($httpStatus);
    header('Content-Type: application/json; charset=UTF-8');
    header('Cache-Control: no-store');
    echo json_encode([
      'ok' => $status === 'success',
      'status' => $status,
      'message' => $message,
      'customerName' => $customerName,
      'csrfToken' => $status === 'success' ? formCsrfToken() : null,
    ], JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE);
    exit;
  }

  redirectWithStatus($path, $anchor, $status);
}

function validCsrfToken(): bool
{
  $submittedToken = $_POST['csrf_token'] ?? '';
  return is_string($submittedToken)
    && isset($_SESSION['form_csrf_token'])
    && is_string($_SESSION['form_csrf_token'])
    && hash_equals($_SESSION['form_csrf_token'], $submittedToken);
}

function validHumanSubmission(): bool
{
  $honeypot = $_POST['website'] ?? '';
  return is_string($honeypot) && trim($honeypot) === '';
}

function validText(string $value, int $maximum, bool $required = false): bool
{
  return mb_check_encoding($value, 'UTF-8')
    && mb_strlen($value, 'UTF-8') <= $maximum
    && (!$required || $value !== '')
    && preg_match('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/', $value) !== 1;
}

function postCheckboxValues(string $key, array $allowed): array
{
  $values = $_POST[$key] ?? [];
  if (!is_array($values)) {
    return [];
  }

  $values = array_filter($values, static fn ($value): bool => is_string($value) && in_array($value, $allowed, true));
  return array_values(array_unique($values));
}

function validCheckboxValues(string $key, array $allowed): bool
{
  if (!array_key_exists($key, $_POST)) {
    return true;
  }

  $values = $_POST[$key];
  if (!is_array($values)) {
    return false;
  }

  foreach ($values as $value) {
    if (!is_string($value) || !in_array($value, $allowed, true)) {
      return false;
    }
  }

  return count($values) === count(array_unique($values));
}

function validateEmail(string $email, bool $required = true): bool
{
  return $email === '' ? !$required : filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Allow: POST');
  http_response_code(405);
  exit('Method Not Allowed');
}

$formType = $_POST['form_type'] ?? '';
$routes = [
  'contact' => ['contact', 'contact-form'],
  'annual_return' => ['services/annual-return', 'annual-return-enquiry'],
  'rbo' => ['services/beneficial-ownership-register', 'rbo-registration-form'],
];
if (!is_string($formType) || !isset($routes[$formType])) {
  http_response_code(400);
  exit('Invalid form submission.');
}
[$returnPath, $anchor] = $routes[$formType];

if (!validCsrfToken()) {
  respondToForm('invalid', 'Your session has expired. Refresh this page and try again.', $returnPath, $anchor);
}
if (!validHumanSubmission()) {
  respondToForm('success', 'Thanks. We have received your enquiry and will be in touch shortly.', $returnPath, $anchor);
}
$emailSections = [];
$replyTo = null;
$attachment = null;
$attachmentName = '';
$subject = '';
$isValid = true;

if ($formType === 'contact') {
  $name = formValue('name', 160);
  $package = formValue('package', 100);
  $email = formEmailValue('email');
  $phone = formValue('phone', 60);
  $message = formValue('message', 6000);
  $allowedPackages = [
    'Basic Package (€135.00 Only)',
    'Standard Package (€199.00 Only)',
    'Premium Package (€299.00 Only)',
    'Non-resident Package (€1,950.00 Only)',
  ];
  $isValid = validText($name, 160, true)
    && in_array($package, $allowedPackages, true)
    && validateEmail($email)
    && !formValueHasError('phone', 60)
    && validText($message, 6000, true)
    && !formValueHasError('message', 6000);
  $replyTo = $email;
  $subject = 'New Website Contact Enquiry';
  $emailSections = [
    'Contact details' => [
      'Name' => $name,
      'Selected package' => $package,
      'Email address' => $email,
      'Phone number' => $phone,
    ],
    'Message' => ['Enquiry message' => $message],
  ];
} elseif ($formType === 'annual_return') {
  $name = formValue('name', 160);
  $email = formEmailValue('email');
  $phone = formValue('phone', 60);
  $companyName = formValue('company_name', 200);
  $companyEmail = formEmailValue('company_email');
  $noChangesValue = $_POST['no_changes'] ?? null;
  $noChanges = isset($_POST['no_changes']) && $_POST['no_changes'] === '1';
  $companyChanges = formValue('company_changes', 6000);
  $isValid = validText($name, 160, true)
    && validateEmail($email)
    && !formValueHasError('phone', 60)
    && validText($companyName, 200, true)
    && validateEmail($companyEmail, true)
    && validText($companyChanges, 6000)
    && !formValueHasError('company_changes', 6000)
    && ($noChangesValue === null || $noChangesValue === '1');
  $replyTo = $email;
  $subject = 'New Annual Return Enquiry';
  $emailSections = [
    'Customer details' => [
      'Name' => $name,
      'Customer email' => $email,
      'Phone number' => $phone,
    ],
    'Company details' => [
      'Company name' => $companyName,
      'Company email' => $companyEmail,
      'No company-detail changes confirmed' => $noChanges ? 'Yes' : 'No',
      'Company changes' => $companyChanges,
    ],
  ];
} else {
  $name = formValue('name', 160);
  $email = formEmailValue('email');
  $phone = formValue('phone', 60);
  $companyName = formValue('company_name', 200);
  $termsConsent = isset($_POST['terms_consent']) && $_POST['terms_consent'] === '1';
  $isValid = validText($name, 160, true)
    && validateEmail($email)
    && validText($phone, 60, true)
    && validText($companyName, 200, true);
  $replyTo = $email;
  $subject = 'New RBO Registration Submission';
  $pdfSections = [
    'Person submitting this form' => [
      'Name' => $name,
      'Email address' => $email,
      'Phone number' => $phone,
      'Company name' => $companyName,
    ],
  ];
  $emailSections = [
    'Submission summary' => [
      'Name' => $name,
      'Email address' => $email,
      'PDF attachment' => 'Contains the submitted company and shareholder details, including PPS numbers and addresses.',
      'Company name' => $companyName,
    ],
  ];

  for ($index = 1; $index <= 2; $index++) {
    $shareholderName = formValue('shareholder_' . $index . '_name', 160);
    $ppsNumber = formValue('shareholder_' . $index . '_pps', 40);
    $address1 = formValue('shareholder_' . $index . '_address_1', 200);
    $address2 = formValue('shareholder_' . $index . '_address_2', 200);
    $percentage = formValue('shareholder_' . $index . '_percentage', 10);
    $appointed = formValue('shareholder_' . $index . '_appointed', 10);
    $interest = formValue('shareholder_' . $index . '_interest', 20);
    $allowedInterests = ['direct', 'indirect', 'both'];
    $ownershipKey = 'shareholder_' . $index . '_ownership';
    $allowedOwnership = [
      'shares',
      'voting-rights',
      'ownership-interest',
      'control-via-other-means',
      'senior-manager',
    ];
    $ownership = postCheckboxValues($ownershipKey, $allowedOwnership);

    $shareholderStarted = $shareholderName !== '' || $ppsNumber !== '' || $address1 !== '' || $address2 !== ''
      || $percentage !== '' || $appointed !== '' || $interest !== '' || $ownership !== [];
    $requiredShareholderDetailsPresent = $shareholderName !== '' && $ppsNumber !== '' && $address1 !== ''
      && $percentage !== '' && $appointed !== '' && $interest !== '' && $ownership !== [];
    $isValid = $isValid
      && validText($shareholderName, 160)
      && validText($ppsNumber, 40)
      && validText($address1, 200)
      && validText($address2, 200)
      && validText($percentage, 10)
      && validText($appointed, 10)
      && ($interest === '' || in_array($interest, $allowedInterests, true))
      && validCheckboxValues($ownershipKey, $allowedOwnership);
    foreach (['name' => 160, 'pps' => 40, 'address_1' => 200, 'address_2' => 200, 'percentage' => 10, 'appointed' => 10, 'interest' => 20] as $suffix => $maximum) {
      $isValid = $isValid && !formValueHasError('shareholder_' . $index . '_' . $suffix, $maximum);
    }
    if (($index === 1 || $shareholderStarted) && !$requiredShareholderDetailsPresent) {
      $isValid = false;
    }
    if ($index === 1 && count($ownership) === 0) {
      $isValid = false;
    }
    if ($percentage !== '' && (!is_numeric($percentage) || (float) $percentage < 0 || (float) $percentage > 100)) {
      $isValid = false;
    }
    if ($appointed !== '') {
      $date = DateTimeImmutable::createFromFormat('!Y-m-d', $appointed);
      $dateErrors = DateTimeImmutable::getLastErrors();
      if ($date === false || ($dateErrors !== false && ($dateErrors['warning_count'] > 0 || $dateErrors['error_count'] > 0))) {
        $isValid = false;
      }
    }

    $pdfSections['Shareholder ' . $index] = [
      'Name' => $shareholderName,
      'PPS number' => $ppsNumber,
      'Address line 1' => $address1,
      'Address line 2' => $address2,
      'Percentage of shares' => $percentage === '' ? '' : $percentage . '%',
      'Date appointed' => $appointed,
      'Nature of interest' => $interest,
      'Ownership type' => $ownership === [] ? '' : implode(', ', $ownership),
    ];
  }

  $otherControl = formValue('other_control', 6000);
  $isValid = $isValid && validText($otherControl, 6000) && !formValueHasError('other_control', 6000) && $termsConsent;
  $pdfSections['Other control'] = ['Other person or company with control' => $otherControl];
  $emailSections['Delivery details'] = [
    'Attachment filename' => 'RBO-Registration-' . date('Y-m-d') . '.pdf',
    'Email delivery' => 'Submitted PDF is unencrypted. Recipient mailboxes must be handled securely.',
  ];

  if ($isValid) {
    require_once __DIR__ . '/includes/rbo-pdf.php';
    $pdf = new RboPdfReport();
    $attachment = $pdf->render($pdfSections);
    $attachmentName = 'RBO-Registration-' . date('Y-m-d') . '.pdf';
  }
}

if (!$isValid) {
  respondToForm('invalid', 'Please check the form fields and try again.', $returnPath, $anchor);
}

[$htmlBody, $textBody] = formEmailTemplate(
  match ($formType) {
    'contact' => 'Contact Enquiry',
    'annual_return' => 'Annual Return Enquiry',
    'rbo' => 'Beneficial Ownership Registration',
  },
  $emailSections
);

try {
  sendFormNotification($subject, $htmlBody, $textBody, $replyTo, $attachment, $attachmentName);
} catch (Throwable $exception) {
  error_log('Website form delivery failed for ' . $formType . ': ' . $exception->getMessage());
  respondToForm('error', 'We could not send your enquiry right now. Please try again shortly or contact us directly.', $returnPath, $anchor);
}

$successMessage = match ($formType) {
  'annual_return' => 'We have received your Annual Return enquiry and will be in touch shortly.',
  'rbo' => 'We have received your registration and will be in touch shortly.',
  default => 'We have received your enquiry and will be in touch shortly.',
};
respondToForm('success', $successMessage, $returnPath, $anchor, $name);
