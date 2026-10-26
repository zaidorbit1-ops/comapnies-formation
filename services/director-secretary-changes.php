<?php
declare(strict_types=1);

require_once (dirname(__DIR__) . '/includes/site-root.php');
$siteRoot = siteRootUrl();
$activePage = 'services';
$pageTitle = 'Changes in Directors or Secretary Details';
$pageDescription = 'It is vital to ensure Director and Secretary changes are prepared and filed correctly. The Companies Acts impose responsibilities on company directors and the company secretary.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => $siteRoot],
  ['label' => 'Services', 'url' => $siteRoot . '#services'],
  ['label' => 'Changes in Directors or Secretary Details'],
];
$contactCtaTitle = 'Arrange your director or secretary change';
$contactCtaDescription = 'Please call us on +353 (045)254212 and we can arrange your Changes in Directors or Secretary Details for you.';
$contactCtaHref = 'tel:+35345254212';
$contactCtaLabel = 'Call us';
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Professional support preparing and filing Irish company director and secretary changes.">
  <meta name="theme-color" content="#ffffff">
  <?php require dirname(__DIR__) . '/includes/favicon.php'; ?>
  <title>Changes in Directors or Secretary Details | Companies Formation</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Sora:wght@400;600;700;800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/tailwind-config.js"></script>
  <link rel="stylesheet" href="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/css/theme.css?v=<?= filemtime(dirname(__DIR__) . '/assets/css/theme.css') ?>">
</head>
<body class="bg-surface-canvas text-on-surface antialiased font-body-md selection:bg-primary-container selection:text-white">
  <a class="skip-link" href="#main">Skip to content</a>
  <?php require dirname(__DIR__) . '/includes/header.php'; ?>
  <main id="main">
    <?php require dirname(__DIR__) . '/includes/breadcrumb.php'; ?>
    <?php require dirname(__DIR__) . '/includes/services-ticker.php'; ?>

    <section class="director-changes-intro abroad-intro py-16 lg:py-24 border-b border-border-subtle" aria-labelledby="director-changes-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-intro__grid">
          <div class="abroad-intro__content">
            <span class="theme-eyebrow">Company secretarial support</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="director-changes-intro-title">Keep director and secretary details up to date.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">It is vital to ensure director and secretary changes are prepared and filed correctly. The Companies Acts impose responsibilities on company directors and the company secretary, so it is vital these details are kept up to date at all times. Use our company secretarial experts to ensure the process is done quickly and correctly for the total cost of €85 plus VAT.</p>
            <div class="director-changes-intro__price abroad-intro__price">
              <span>€85.00 <small>+ VAT</small></span>
              <a class="theme-button theme-button-primary" href="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>#packages">
                View Packages <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
              </a>
            </div>
          </div>
          <div class="abroad-intro__visual">
            <?php
            $assetImageName = 'service4.png';
            $assetImageAlt = 'Director and company secretary changes';
            $assetImageWidth = 1200;
            $assetImageHeight = 800;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
            <div class="abroad-intro__visual-note">
              <span class="material-symbols-outlined" aria-hidden="true">manage_accounts</span>
              <span>Director and secretary details</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="director-changes-benefit abroad-support py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="director-changes-benefit-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-support__grid service-content-only">
          <div class="director-changes-benefit__content abroad-support__content">
            <span class="theme-eyebrow">Prepared and filed correctly</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="director-changes-benefit-title">Professional help with your company changes.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">Having this completed professionally by ourselves can save expensive time and money and can ensure the company is compliant with the Companies Acts.</p>
            <a class="director-changes-benefit__phone" href="tel:+35345254212">
              <span class="material-symbols-outlined" aria-hidden="true">call</span>
              Please call us +353 (045)254212
            </a>
          </div>
        </div>
      </div>
    </section>

    <?php require dirname(__DIR__) . '/includes/cta.php'; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/site.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
