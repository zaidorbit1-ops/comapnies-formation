<?php
declare(strict_types=1);

if (!defined('COMPANIES_FORMATION_APP')) {
  http_response_code(404);
  exit;
}

return [
  // Hostinger commonly uses smtp.hostinger.com with SSL on port 465 or STARTTLS on 587.
  'smtp_host' => 'smtp.hostinger.com',
  'smtp_port' => 465,
  'smtp_encryption' => 'ssl',
  // Set these to the Hostinger mailbox address and its SMTP password.
  'smtp_username' => 'smtp@theglobaloutsource.com',
  'smtp_password' => 'Fordomain@110',
  // Use the same mailbox address as smtp_username.
  'from_email' => 'smtp@theglobaloutsource.com',
  'from_name' => 'Companies Formation',
  'recipients' => [
    'info@companiesformation.ie',
    'zaidorbit1@gmail.com',
  ],
];
