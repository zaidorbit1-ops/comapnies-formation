<?php
declare(strict_types=1);

$siteRoot = '';
$activePage = 'home';
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Professional, hassle-free company formation services to help you register your business in Ireland.">
  <meta name="theme-color" content="#ffffff">
  <?php require __DIR__ . '/includes/favicon.php'; ?>
  <title>Company Formation in Ireland | Companies Formation</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Sora:wght@400;600;700;800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script src="assets/js/tailwind-config.js"></script>
  <link rel="stylesheet" href="assets/css/theme.css?v=<?= filemtime(__DIR__ . '/assets/css/theme.css') ?>">
</head>
<body class="bg-surface-canvas text-on-surface antialiased font-body-md selection:bg-primary-container selection:text-white">
  <a class="skip-link" href="#main">Skip to content</a>
  <?php require __DIR__ . '/includes/header.php'; ?>
  <?php require __DIR__ . '/includes/home-content.php'; ?>
  <?php require __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/site.js?v=<?= filemtime(__DIR__ . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
