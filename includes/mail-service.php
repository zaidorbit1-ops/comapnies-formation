<?php
declare(strict_types=1);

use PHPMailer\PHPMailer\Exception as MailException;
use PHPMailer\PHPMailer\PHPMailer;

require_once dirname(__DIR__) . '/PHPMailer-master/src/Exception.php';
require_once dirname(__DIR__) . '/PHPMailer-master/src/PHPMailer.php';
require_once dirname(__DIR__) . '/PHPMailer-master/src/SMTP.php';

function mailConfiguration(): array
{
  if (!defined('COMPANIES_FORMATION_APP')) {
    throw new RuntimeException('Application bootstrap is required.');
  }

  $config = require dirname(__DIR__) . '/config/mail.php';
  if (!is_array($config)) {
    throw new RuntimeException('Mail configuration is invalid.');
  }

  foreach (['smtp_host', 'smtp_username', 'smtp_password', 'from_email'] as $key) {
    if (!isset($config[$key]) || !is_string($config[$key]) || trim($config[$key]) === '') {
      throw new RuntimeException('SMTP configuration is incomplete. Set ' . $key . ' in config/mail.php.');
    }
  }

  if (filter_var($config['from_email'], FILTER_VALIDATE_EMAIL) === false) {
    throw new RuntimeException('The configured sender email address is invalid.');
  }

  if (empty($config['recipients']) || !is_array($config['recipients'])) {
    throw new RuntimeException('At least one notification recipient must be configured.');
  }

  foreach ($config['recipients'] as $recipient) {
    if (!is_string($recipient) || filter_var($recipient, FILTER_VALIDATE_EMAIL) === false) {
      throw new RuntimeException('A notification recipient email address is invalid.');
    }
  }

  return $config;
}

function sendFormNotification(
  string $subject,
  string $htmlBody,
  string $textBody,
  ?string $replyTo = null,
  ?string $attachmentContent = null,
  string $attachmentName = ''
): void {
  $config = mailConfiguration();
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = $config['smtp_host'];
  $mail->SMTPAuth = true;
  $mail->Username = $config['smtp_username'];
  $mail->Password = $config['smtp_password'];
  $mail->Port = (int) ($config['smtp_port'] ?? 465);
  $mail->SMTPSecure = ($config['smtp_encryption'] ?? 'ssl') === 'tls'
    ? PHPMailer::ENCRYPTION_STARTTLS
    : PHPMailer::ENCRYPTION_SMTPS;
  $mail->CharSet = PHPMailer::CHARSET_UTF8;
  $mail->isHTML(true);
  $mail->setFrom($config['from_email'], (string) ($config['from_name'] ?? 'Companies Formation'));
  foreach (array_values($config['recipients']) as $index => $recipient) {
    if (!is_string($recipient) || filter_var($recipient, FILTER_VALIDATE_EMAIL) === false) {
      throw new RuntimeException('A notification recipient email address is invalid.');
    }
    if ($index === 0) {
      $mail->addAddress($recipient);
      continue;
    }
    $mail->addBCC($recipient);
  }
  if ($replyTo !== null && filter_var($replyTo, FILTER_VALIDATE_EMAIL) !== false) {
    $mail->addReplyTo($replyTo);
  }
  if ($attachmentContent !== null) {
    $mail->addStringAttachment($attachmentContent, $attachmentName, PHPMailer::ENCODING_BASE64, 'application/pdf');
  }
  $mail->Subject = $subject;
  $mail->Body = $htmlBody;
  $mail->AltBody = $textBody;

  try {
    $mail->send();
  } catch (MailException $exception) {
    error_log('Form notification could not be sent: ' . $mail->ErrorInfo);
    throw new RuntimeException('The email could not be sent.', 0, $exception);
  }
}

function emailFieldRows(array $sections): array
{
  $rows = [];
  foreach ($sections as $sectionTitle => $fields) {
    $rows[] = '<tr><th colspan="2" style="padding:14px 16px 8px;text-align:left;color:#0758ad;font-size:14px;">'
      . htmlspecialchars((string) $sectionTitle, ENT_QUOTES, 'UTF-8') . '</th></tr>';
    foreach ($fields as $label => $value) {
      $safeValue = trim((string) $value) === ''
        ? '<span style="color:#7b8794;">Not provided</span>'
        : nl2br(htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8'));
      $rows[] = '<tr><td style="width:32%;padding:10px 16px;border-top:1px solid #e2e8f0;color:#425166;vertical-align:top;">'
        . htmlspecialchars((string) $label, ENT_QUOTES, 'UTF-8')
        . '</td><td style="padding:10px 16px;border-top:1px solid #e2e8f0;color:#102b4e;vertical-align:top;">'
        . $safeValue . '</td></tr>';
    }
  }

  return $rows;
}

function formEmailTemplate(string $formName, array $sections): array
{
  $submittedAt = date('j M Y, H:i T');
  $rows = implode('', emailFieldRows($sections));
  $html = '<!doctype html><html lang="en"><body style="margin:0;padding:24px;background:#f3f6fa;font-family:Arial,sans-serif;color:#102b4e;">'
    . '<div style="max-width:720px;margin:0 auto;background:#fff;border:1px solid #dce5ef;border-radius:14px;overflow:hidden;">'
    . '<div style="padding:24px 28px;background:#062448;color:#fff;"><div style="font-size:12px;letter-spacing:1px;text-transform:uppercase;color:#80e6df;">Companies Formation · New Submission</div>'
    . '<h1 style="margin:10px 0 4px;font-size:24px;color:#fff;">' . htmlspecialchars($formName, ENT_QUOTES, 'UTF-8') . '</h1>'
    . '<div style="font-size:13px;color:#d6e2ef;">Received ' . htmlspecialchars($submittedAt, ENT_QUOTES, 'UTF-8') . '</div></div>'
    . '<table role="presentation" style="width:100%;border-collapse:collapse;font-size:14px;">' . $rows . '</table>'
    . '<div style="padding:18px 28px;background:#f7faff;color:#5b6878;font-size:12px;">Submitted through the Companies Formation website. Please handle personal information securely.</div>'
    . '</div></body></html>';
  $textParts = [$formName . ' — New Submission', 'Received ' . $submittedAt];
  foreach ($sections as $sectionTitle => $fields) {
    $textParts[] = '';
    $textParts[] = $sectionTitle;
    foreach ($fields as $label => $value) {
      $textParts[] = $label . ': ' . ((string) $value !== '' ? (string) $value : 'Not provided');
    }
  }

  return [$html, implode("\n", $textParts)];
}
