<?php
declare(strict_types=1);

function siteRootUrl(): string
{
  $documentRoot = realpath($_SERVER['DOCUMENT_ROOT'] ?? '');
  $applicationRoot = realpath(dirname(__DIR__));

  if ($documentRoot === false || $applicationRoot === false) {
    throw new RuntimeException('Could not determine the website root URL.');
  }

  $documentRoot = rtrim(str_replace('\\', '/', $documentRoot), '/');
  $applicationRoot = str_replace('\\', '/', $applicationRoot);

  if (strncasecmp($applicationRoot, $documentRoot, strlen($documentRoot)) !== 0) {
    throw new RuntimeException('The website directory is outside the web server document root.');
  }

  $relativePath = trim(substr($applicationRoot, strlen($documentRoot)), '/');
  if ($relativePath === '') {
    return '/';
  }

  $segments = array_filter(explode('/', $relativePath), static fn (string $segment): bool => $segment !== '');

  return '/' . implode('/', array_map('rawurlencode', $segments)) . '/';
}
