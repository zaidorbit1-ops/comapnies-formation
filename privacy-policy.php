<?php
declare(strict_types=1);

$siteRoot = '';
$activePage = '';
$pageTitle = 'Privacy Policy';
$pageDescription = 'How Companies Formation handles personal information when you visit our website or contact us about services in Ireland.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => 'index.php'],
  ['label' => 'Privacy Policy'],
];
$privacySections = [
  [
    'title' => 'Who We Are',
    'paragraphs' => [
      'Companies Formation is an independent company formations agency operating from Maynooth, Co. Kildare, Ireland. For the purposes of applicable data protection law, Companies Formation is the organisation responsible for personal information described in this notice.',
      'You can contact us at info@companiesformation.ie or by post at Unit F13, Maynooth Business Campus, Maynooth, Co. Kildare, W23 Y5N7, Ireland.',
    ],
  ],
  [
    'title' => 'Personal Information We May Handle',
    'paragraphs' => [
      'Depending on how you contact us and which service you request, personal information may include your name, email address, telephone number, postal address, enquiry details, and information about a company or proposed company.',
      'If you submit the Beneficial Ownership Register form, the information includes the submitting person’s contact details, company name, shareholder names, PPS numbers, residential addresses, ownership details, and any other-control information you provide. The form creates a PDF and sends it to our notification inboxes. The PDF is not password-protected, so use the contact details on this website if you do not accept email delivery of this information.',
      'If you instruct us to provide another service that requires it, information may also include director, shareholder or beneficial-owner details, identification and address-verification documents, company records, payment information, and correspondence relating to your instruction. Please do not send identity documents or other sensitive information by ordinary email unless we have explained a suitable secure method.',
      'When you use the website, our hosting provider may process technical information needed to deliver and protect the site, such as IP address, browser and device details, requested pages, and server event logs.',
    ],
  ],
  [
    'title' => 'How Information Is Collected',
    'paragraphs' => [
      'We may receive information directly from you when you call, email, write to us, or give instructions for a service. We may also receive information from an authorised professional adviser or another person acting on your behalf, where appropriate.',
      'Some information may be obtained from public company records or relevant authorities when this is necessary to carry out an instructed service or meet a legal obligation.',
      'When configured, the Contact and Annual Return forms send the submitted fields to our notification inboxes by email. The Beneficial Ownership Register form creates a PDF of the submitted details and emails it as an attachment. The website does not save form submissions to a database or retain the generated PDF. Mailbox and SMTP providers may process or retain message data according to their services and retention settings.',
    ],
  ],
  [
    'title' => 'Why We Use Information and Our Lawful Bases',
    'paragraphs' => [
      'We may use personal information to respond to enquiries, prepare or provide a requested service, communicate with clients and their authorised representatives, administer payments and records, protect the website, and meet applicable legal or regulatory obligations.',
      'Depending on the circumstances, the lawful basis may be taking steps at your request before entering a contract, performing a contract, complying with a legal obligation, pursuing legitimate interests such as managing and improving our services or preventing misuse, or your consent where consent is required. Where we rely on legitimate interests, we consider the impact on your rights and interests.',
      'If information is required to enter into or perform a contract, or to meet a legal requirement, we will explain when that information is necessary. If it is not provided, we may be unable to respond fully or provide the requested service.',
    ],
  ],
  [
    'title' => 'Who May Receive Information',
    'paragraphs' => [
      'Website form submissions are intended for info@companiesformation.ie and zaidorbit1@gmail.com. Hostinger SMTP is used to transmit the notifications once its account has been configured. Email providers may process and retain the messages and attachments in recipient mailboxes.',
      'We may also share relevant information with service providers who support our business, such as website hosting, communications, payment, IT, or secure document-handling providers, under appropriate confidentiality and data-protection arrangements.',
      'Where required for a service or by law, relevant information may be shared with the Companies Registration Office, Revenue Commissioners, the Register of Beneficial Ownership, financial institutions, professional advisers, or other competent authorities. We share only information that is relevant to the purpose, subject to applicable law.',
      'We do not sell personal information. We do not disclose it to unrelated parties for their own direct marketing.',
    ],
  ],
  [
    'title' => 'International Transfers',
    'paragraphs' => [
      'If a service provider or recipient processes personal information outside the European Economic Area, we will take steps required by applicable data protection law, which may include using an adequacy decision or appropriate safeguards. You can contact us to ask for more information about relevant safeguards.',
    ],
  ],
  [
    'title' => 'How Long Information Is Kept',
    'paragraphs' => [
      'We keep personal information only for as long as it is reasonably needed for the purposes described in this notice, including providing services, maintaining business and company records, resolving queries or disputes, and meeting legal, accounting, or regulatory requirements.',
      'The appropriate period depends on the type of information, the service involved, and applicable legal obligations. When information is no longer required, we will securely delete it or take steps to anonymise it, where appropriate.',
    ],
  ],
  [
    'title' => 'Security',
    'paragraphs' => [
      'We use reasonable technical and organisational measures intended to protect personal information against unauthorised access, loss, alteration, or disclosure. Configured form emails use SMTP transport encryption, but the RBO PDF attachment itself is not encrypted and may remain accessible in recipient email accounts. No method of transmitting or storing information can be guaranteed to be completely secure.',
      'If a personal data breach occurs, we will assess and respond to it in accordance with applicable legal requirements, including making any required notifications.',
    ],
  ],
  [
    'title' => 'Your Data Protection Rights',
    'paragraphs' => [
      'Subject to applicable law and any relevant conditions or exemptions, you may have the right to request access to your personal information, ask for inaccurate information to be corrected, request erasure or restriction of processing, object to processing based on legitimate interests, and request a portable copy of information you provided.',
      'Where processing is based on consent, you may withdraw consent at any time. Withdrawal does not affect processing carried out before consent was withdrawn or processing based on another lawful basis.',
      'To exercise a right, contact info@companiesformation.ie. We may need to verify your identity before responding. You also have the right to make a complaint to the Irish Data Protection Commission at dataprotection.ie.',
    ],
  ],
  [
    'title' => 'Cookies and Similar Technologies',
    'paragraphs' => [
      'The website may use technologies that are necessary for its operation, security, or accessibility. If optional analytics, advertising, or other non-essential cookies are introduced, we will provide information about them and obtain consent where required by law.',
      'You can manage cookies through your browser settings. Disabling some cookies may affect how parts of the website work.',
    ],
  ],
  [
    'title' => 'Children',
    'paragraphs' => [
      'Our services and website are intended for businesses and adults. We do not knowingly seek to collect personal information from children in connection with these services.',
    ],
  ],
  [
    'title' => 'Changes to This Notice',
    'paragraphs' => [
      'We may update this Privacy Policy from time to time to reflect changes to our services, website, or legal obligations. The latest version will be published on this page with its applicable effective date.',
    ],
  ],
];
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Read how Companies Formation handles personal information in connection with its website and company formation services in Ireland.">
  <meta name="theme-color" content="#ffffff">
  <?php require __DIR__ . '/includes/favicon.php'; ?>
  <title>Privacy Policy | Companies Formation</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Sora:wght@400;600;700;800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script src="assets/js/tailwind-config.js"></script>
  <link rel="stylesheet" href="assets/css/theme.css?v=<?= filemtime(__DIR__ . '/assets/css/theme.css') ?>">
</head>
<body class="bg-surface-canvas text-on-surface antialiased font-body-md">
  <a class="skip-link" href="#main">Skip to content</a>
  <?php require __DIR__ . '/includes/header.php'; ?>
  <main id="main">
    <?php require __DIR__ . '/includes/breadcrumb.php'; ?>

    <section class="terms-page" aria-label="Privacy policy">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="terms-page__intro">
          <span class="theme-eyebrow">Your information and privacy</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2>How We Handle Personal Information</h2>
          <p>This notice explains how Companies Formation may collect, use, share, and protect personal information in connection with our website and services.</p>
        </div>
        <div class="terms-page__sections">
          <?php foreach ($privacySections as $index => $section): ?>
            <section class="terms-page__section" aria-labelledby="privacy-section-<?= $index + 1 ?>">
              <div class="terms-page__section-heading">
                <span class="terms-page__section-number" aria-hidden="true"><?= $index + 1 ?></span>
                <h3 id="privacy-section-<?= $index + 1 ?>"><?= htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8') ?></h3>
              </div>
              <div class="terms-page__section-copy">
                <?php foreach ($section['paragraphs'] as $paragraph): ?>
                  <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endforeach; ?>
              </div>
            </section>
          <?php endforeach; ?>
        </div>
        <p class="terms-page__notice">This Privacy Policy is a general draft based on the website and information currently available. Please have it reviewed against your actual data practices and legal obligations before relying on or publishing it.</p>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/site.js?v=<?= filemtime(__DIR__ . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
