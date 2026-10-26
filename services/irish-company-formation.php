<?php
declare(strict_types=1);

require_once (dirname(__DIR__) . '/includes/site-root.php');
$siteRoot = siteRootUrl();
$activePage = 'services';
$pageTitle = 'Irish Company Formation';
$pageDescription = 'Professional, hassle-free company formation services to help you register your business in Ireland.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => $siteRoot],
  ['label' => 'Services', 'url' => $siteRoot . '#services'],
  ['label' => 'Irish Company Formation'],
];
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Professional Irish company formation support from Companies Formation in Maynooth, Co. Kildare. Complete formation pack from €135 plus VAT.">
  <meta name="theme-color" content="#ffffff">
  <?php require dirname(__DIR__) . '/includes/favicon.php'; ?>
  <title>Irish Company Formation | Companies Formation</title>
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

    <section class="formation-intro py-16 lg:py-24 bg-surface-subtle border-b border-border-subtle" aria-labelledby="formation-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="formation-intro__grid">
          <div class="formation-intro__copy">
            <span class="theme-eyebrow">Start your Irish company</span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="formation-intro-title">A straightforward way to get your business started.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">We offer professional, hassle-free company formation support to help you register your business in Ireland.</p>
            <div class="formation-intro__price">
              <span class="formation-intro__price-label">Complete formation pack from</span>
              <span class="formation-intro__price-value">€135 <small>+ VAT</small></span>
              <span class="formation-intro__price-note">€166.05 including VAT</span>
            </div>
            <a class="theme-button theme-button-primary formation-intro__button" href="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>#packages">
              View formation packages <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
            </a>
          </div>
          <div class="formation-intro__visual">
            <?php
            $assetImageName = 'service1.png';
            $assetImageAlt = 'Company formation documents and registration materials';
            $assetImageWidth = 1200;
            $assetImageHeight = 800;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
            <div class="formation-intro__visual-note">
              <span class="material-symbols-outlined" aria-hidden="true">support_agent</span>
              <span>Support before, during and after formation</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="formation-welcome py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="formation-welcome-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="formation-welcome__grid service-content-only">
          <div class="formation-welcome__content">
            <span class="theme-eyebrow">Welcome to Companies Formation</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="formation-welcome-title">Experience that supports your next step.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">We are an independent Company Formations Agency operating from Maynooth Business Campus, Maynooth. We have over six years of experience in company formations, business name registration and company secretarial services.</p>
            <p class="text-on-surface-variant font-body-md text-body-md">We also work with accountants in Ireland, incorporating companies for their clients. Our aim is to make the incorporation process as cost-effective and efficient as possible.</p>
            <div class="formation-welcome__proof">
              <span class="material-symbols-outlined" aria-hidden="true">domain</span>
              <p><strong>Over 1,140 companies formed</strong><br>Our team is here to help before, during and after your company formation.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="formation-pack py-20 lg:py-24 bg-surface-subtle border-b border-border-subtle" aria-labelledby="formation-pack-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="formation-pack__panel">
          <div class="formation-pack__content">
            <span class="theme-eyebrow">Complete company formation pack</span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="formation-pack-title">Expert support, with a clear price.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">Our complete company formation pack is €135 plus VAT (€166.05 including VAT). It includes our price promise and support from our team, who you can call, email or meet at our Maynooth office.</p>
            <a class="theme-button theme-button-primary formation-intro__button" href="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>#packages">
              Compare formation packages <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
            </a>
          </div>
          <div class="formation-pack__price-card">
            <span class="material-symbols-outlined" aria-hidden="true">fact_check</span>
            <span class="formation-pack__price-label">Complete formation pack</span>
            <strong>€135</strong>
            <span>plus VAT · €166.05 total</span>
            <span class="formation-pack__divider"></span>
            <span class="formation-pack__promise"><span class="material-symbols-outlined" aria-hidden="true">verified</span> Includes our price promise</span>
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
