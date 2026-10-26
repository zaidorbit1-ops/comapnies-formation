<?php
declare(strict_types=1);

function startFormSession(): void
{
  if (session_status() === PHP_SESSION_ACTIVE) {
    return;
  }

  session_start([
    'cookie_httponly' => true,
    'cookie_secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
    'cookie_samesite' => 'Lax',
    'use_strict_mode' => true,
  ]);
}

function formCsrfToken(): string
{
  startFormSession();
  if (!isset($_SESSION['form_csrf_token']) || !is_string($_SESSION['form_csrf_token'])) {
    $_SESSION['form_csrf_token'] = bin2hex(random_bytes(32));
  }

  return $_SESSION['form_csrf_token'];
}

function formStatusMarkup(): string
{
  $status = $_GET['form_status'] ?? '';
  $messages = [
    'success' => ['Your enquiry has been sent. Our team will be in touch.', 'success'],
    'error' => ['We could not send your enquiry. Please call or email us instead.', 'error'],
    'invalid' => ['Please check the required fields and try again.', 'error'],
  ];
  if (!is_string($status) || !isset($messages[$status])) {
    return '';
  }

  [$message, $type] = $messages[$status];

  return '<div class="form-feedback form-feedback--' . $type . '" data-form-feedback role="status" aria-live="polite">'
    . htmlspecialchars($message, ENT_QUOTES, 'UTF-8')
    . '</div>';
}

function formValue(string $key, int $maxLength = 5000): string
{
  $value = $_POST[$key] ?? '';
  if (!is_string($value)) {
    return '';
  }

  $value = trim(str_replace(["\r\n", "\r"], "\n", $value));
  if (!mb_check_encoding($value, 'UTF-8') || mb_strlen($value, 'UTF-8') > $maxLength) {
    return '';
  }

  return $value;
}

function formValueHasError(string $key, int $maxLength = 5000): bool
{
  $value = $_POST[$key] ?? '';
  return !is_string($value)
    || !mb_check_encoding($value, 'UTF-8')
    || mb_strlen($value, 'UTF-8') > $maxLength
    || preg_match('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/', $value) === 1;
}

function formEmailValue(string $key): string
{
  $value = formValue($key, 254);
  return filter_var($value, FILTER_VALIDATE_EMAIL) !== false ? $value : '';
}
