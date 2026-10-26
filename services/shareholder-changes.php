<?php
declare(strict_types=1);

$siteRoot = '../../';
$activePage = 'services';
$pageTitle = 'Changes in Shareholders';
$pageDescription = 'A company must register a transfer of shares to ensure the company’s books and records are correct and to protect shareholder rights.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => '../../index.php'],
  ['label' => 'Services', 'url' => '../../index.php#services'],
  ['label' => 'Changes in Shareholders'],
];
$contactCtaTitle = 'Let us guide you through your share transfer';
$contactCtaDescription = 'Call us on +353 (045)254212 or email info@companiesformation.ie and we will guide you through the process.';
$contactCtaHref = 'tel:+35345254212';
$contactCtaLabel = 'Call us';
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Professional support registering Irish company share transfers and updating company records.">
  <meta name="theme-color" content="#ffffff">
  <title>Changes in Shareholders | Companies Formation</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Sora:wght@400;600;700;800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script src="../../assets/js/tailwind-config.js"></script>
  <link rel="stylesheet" href="../../assets/css/theme.css?v=<?= filemtime(dirname(__DIR__) . '/assets/css/theme.css') ?>">
</head>
<body class="bg-surface-canvas text-on-surface antialiased font-body-md selection:bg-primary-container selection:text-white">
  <a class="skip-link" href="#main">Skip to content</a>
  <?php require dirname(__DIR__) . '/includes/header.php'; ?>
  <main id="main">
    <?php require dirname(__DIR__) . '/includes/breadcrumb.php'; ?>

    <section class="shareholder-changes-intro abroad-intro py-16 lg:py-24 border-b border-border-subtle" aria-labelledby="shareholder-changes-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-intro__grid">
          <div class="abroad-intro__content">
            <span class="theme-eyebrow">Share transfer support</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="shareholder-changes-intro-title">Keep your company’s share records accurate.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">A company must register a transfer of shares to ensure the company’s books and records are correct and to protect shareholder rights. We have a very efficient and quick Share Transfer process to ensure the change of ownership of the shares are completed legally and correctly.</p>
            <div class="shareholder-changes-intro__price abroad-intro__price">
              <span>€150.00 <small>+ VAT</small></span>
              <span class="shareholder-changes-intro__total">€184.50 total</span>
              <a class="theme-button theme-button-primary" href="../../index.php#packages">
                View Packages <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
              </a>
            </div>
          </div>
          <div class="abroad-intro__visual">
            <?php
            $assetImageName = 'service5.png';
            $assetImageAlt = 'Changes in company shareholders';
            $assetImageWidth = 1200;
            $assetImageHeight = 800;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
            <div class="abroad-intro__visual-note">
              <span class="material-symbols-outlined" aria-hidden="true">swap_horiz</span>
              <span>Share transfer support</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="shareholder-changes-details abroad-support py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="shareholder-changes-details-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-support__grid service-content-only">
          <div class="shareholder-changes-details__content abroad-support__content">
            <span class="theme-eyebrow">Share transfer service</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="shareholder-changes-details-title">A clear process for changing share ownership.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">To transfer shares in a Private Limited Company costs €150 plus VAT (Total €184.50) and includes the applicable filing fees with the relevant authorities and Notarisation fee.</p>
            <p class="text-on-surface-variant font-body-md text-body-md">To complete your share transfer is very simple, just call us on <a href="tel:+35345254212">+353 (045)254212</a> or email us at <a href="mailto:info@companiesformation.ie">info@companiesformation.ie</a> and we will guide you through the process.</p>
            <a class="shareholder-changes-details__phone" href="tel:+35345254212">
              <span class="material-symbols-outlined" aria-hidden="true">call</span>
              Call us on +353 (045)254212
            </a>
          </div>
        </div>
      </div>
    </section>

    <?php require dirname(__DIR__) . '/includes/cta.php'; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="../../assets/js/site.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
