<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, private');

function respond(int $statusCode, array $payload): never
{
  http_response_code($statusCode);
  echo json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_SUBSTITUTE);
  exit;
}

function requestCro(string $url, array $headers = [], int $timeoutSeconds = 12): array
{
  $curl = curl_init($url);
  if ($curl === false) {
    throw new RuntimeException('Could not initialize the CRO request.');
  }

  curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT => $timeoutSeconds,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_HTTPHEADER => $headers,
  ]);

  $responseBody = curl_exec($curl);
  $curlError = curl_error($curl);
  $statusCode = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);
  curl_close($curl);

  if ($responseBody === false) {
    error_log('CRO request failed: ' . $curlError);
    throw new RuntimeException('The CRO service could not be reached.');
  }

  if ($statusCode < 200 || $statusCode >= 300) {
    error_log('CRO request returned HTTP ' . $statusCode . '.');
    throw new RuntimeException('The CRO service returned an unsuccessful response.');
  }

  $decoded = json_decode($responseBody, true);
  if (json_last_error() !== JSON_ERROR_NONE) {
    error_log('CRO response was not valid JSON.');
    throw new RuntimeException('The CRO service returned an invalid response.');
  }

  return is_array($decoded) ? $decoded : [];
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Allow: POST');
  respond(405, ['ok' => false, 'message' => 'Use the company-name form to submit a search.']);
}

$companyName = trim((string) ($_POST['company_name'] ?? ''));
if ($companyName === '' || preg_match('/[\x00-\x1F\x7F]/u', $companyName) === 1
  || preg_match('/^.{1,160}$/usD', $companyName) !== 1) {
  respond(422, ['ok' => false, 'message' => 'Enter a company name between 1 and 160 characters.']);
}

$apiEmail = getenv('CRO_API_EMAIL');
$apiKey = getenv('CRO_API_KEY');
if ($apiEmail === false || $apiEmail === '' || $apiKey === false || $apiKey === '') {
  error_log('CRO company search is not configured; CRO_API_EMAIL and CRO_API_KEY must be set.');
  respond(503, ['ok' => false, 'message' => 'The company name check is not configured yet. Please contact us by phone or email.']);
}

$authorization = 'Authorization: Basic ' . base64_encode($apiEmail . ':' . $apiKey);
try {
  $status = requestCro('https://services.cro.ie/cws/status', [
    'Accept: application/json',
  ], 6);

  if (($status['ServicesRunning'] ?? $status['servicesRunning'] ?? false) !== true) {
    error_log('CRO status check reports that services are unavailable.');
    respond(503, ['ok' => false, 'message' => 'The CRO name-check service is temporarily unavailable. Please try again later.']);
  }

  $query = http_build_query([
    'company_name' => $companyName,
    'company_bus_ind' => 'e',
    'skip' => 0,
    'max' => 10,
    'searchType' => 2,
    'htmlEnc' => 1,
  ], '', '&', PHP_QUERY_RFC3986);

  $results = requestCro('https://services.cro.ie/cws/companies?' . $query, [
    $authorization,
    'Accept: application/json',
    'Content-Type: application/json; charset=utf-8',
  ]);

  if (isset($results['results']) && is_array($results['results'])) {
    $results = $results['results'];
  } elseif (isset($results['value']) && is_array($results['value'])) {
    $results = $results['value'];
  } elseif (isset($results['data']) && is_array($results['data'])) {
    $results = $results['data'];
  }

  $matches = [];
  foreach ($results as $result) {
    if (!is_array($result)) {
      continue;
    }

    $readField = static function (string $key) use ($result): string {
      $value = $result[$key] ?? '';
      return is_scalar($value) ? html_entity_decode((string) $value, ENT_QUOTES | ENT_HTML5, 'UTF-8') : '';
    };

    $address = implode(', ', array_filter([
      $readField('company_addr_1'),
      $readField('company_addr_2'),
    ], static fn(string $part): bool => $part !== ''));

    $matches[] = [
      'company_name' => $readField('company_name'),
      'company_num' => $readField('company_num'),
      'company_bus_ind' => $readField('company_bus_ind'),
      'address' => $address,
    ];
  }

  respond(200, [
    'ok' => true,
    'company_name' => $companyName,
    'matches' => $matches,
  ]);
} catch (RuntimeException $exception) {
  error_log('CRO company search error: ' . $exception->getMessage());
  respond(502, ['ok' => false, 'message' => 'We could not complete the company name check right now. Please try again later.']);
}
