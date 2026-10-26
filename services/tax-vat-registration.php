<?php
declare(strict_types=1);

require_once (dirname(__DIR__) . '/includes/site-root.php');
$siteRoot = siteRootUrl();
$activePage = 'services';
$pageTitle = 'Tax/VAT Registration';
$pageDescription = 'Registering for tax can have implications for your business, so before you register for tax, it is vital you call us.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => $siteRoot],
  ['label' => 'Services', 'url' => $siteRoot . '#services'],
  ['label' => 'Tax/VAT Registration'],
];
$contactCtaTitle = 'Speak to us before you register for tax';
$contactCtaDescription = 'Our experts can discuss your circumstances and help you understand the tax registration process.';
$contactCtaHref = 'tel:+35345254212';
$contactCtaLabel = 'Call us';
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Tax registration support for Irish companies, including Corporation Tax, VAT and PAYE registration.">
  <meta name="theme-color" content="#ffffff">
  <?php require dirname(__DIR__) . '/includes/favicon.php'; ?>
  <title>Tax/VAT Registration | Companies Formation</title>
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

    <section class="tax-registration-intro abroad-intro py-16 lg:py-24 border-b border-border-subtle" aria-labelledby="tax-registration-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-intro__grid">
          <div class="abroad-intro__content">
            <span class="theme-eyebrow">Tax/VAT Registration</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="tax-registration-intro-title">Before you register for tax, call us!</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">Registering for tax can have implications for your business, so before you register for tax, it is vital you call us. Our experts will let you know which types of tax you have to apply for (depending on your circumstances), and those you do not have to apply for.</p>
            <div class="tax-registration-intro__price abroad-intro__price">
              <span>€100.00 <small>+ VAT</small></span>
              <a class="theme-button theme-button-primary" href="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>contact">
                Enquire online <span class="material-symbols-outlined" aria-hidden="true">arrow_downward</span>
              </a>
            </div>
          </div>
          <div class="abroad-intro__visual">
            <?php
            $assetImageName = 'service10.png';
            $assetImageAlt = 'Tax registration consultation';
            $assetImageWidth = 1200;
            $assetImageHeight = 880;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
            <div class="abroad-intro__visual-note">
              <span class="material-symbols-outlined" aria-hidden="true">support_agent</span>
              <span>Advice tailored to your circumstances</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="tax-registration-overview abroad-support py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="tax-registration-overview-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-support__grid service-content-only">
          <div class="tax-registration-overview__content abroad-support__content">
            <span class="theme-eyebrow">Tax registration for your business</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="tax-registration-overview-title">Understand which registrations apply to you.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">Tax Registration for many businesses consists of registering for the taxes that apply to their particular circumstances.</p>
            <p class="text-on-surface-variant font-body-md text-body-md">Just complete our order form below, and our experts will call you back for a consultation, assess the company’s tax needs, and which taxes it should register for, and we complete the Tax Registration Documentation for Corporation Tax, Domestic Irish VAT, and PAYE for you at the cost of €100 plus VAT.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="tax-registration-types annual-return-how py-20 lg:py-24 border-b border-border-subtle" aria-labelledby="tax-registration-types-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="tax-registration-types__heading">
          <span class="theme-eyebrow">Registration types</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="tax-registration-types-title">Explore the tax registrations that may apply.</h2>
        </div>
        <div class="tax-registration-types__grid">
          <article class="tax-registration-type">
            <span class="material-symbols-outlined" aria-hidden="true">receipt_long</span>
            <h3>VAT (Value Added Tax)</h3>
            <p>VAT may (or may not) be a requirement for your business. If the business is registered for VAT then it can generally claim back the VAT on the costs it has incurred but it also needs to charge VAT on the products it is selling – in some instances it can be often better not to register but this is only in certain circumstances. Our experts will go through your requirements before your tax registration and ensure your registration details are specific to your particular circumstances.</p>
          </article>
          <article class="tax-registration-type">
            <span class="material-symbols-outlined" aria-hidden="true">public</span>
            <h3>Intra-EU</h3>
            <p>Customers intending to trade (Supply/Acquire Goods or Services from any EU member state) with businesses elsewhere in the EU should apply for ‘Intra-EU’ status, which will enable them to make zero-rated intra-Community acquisitions. Having an ‘Intra- EU’ status will also cause the customer to be registered automatically for VIES reporting obligations. (Customers are obliged to make a VIES return when they make a zero-rated supply to a trader in another EU member state.</p>
          </article>
          <article class="tax-registration-type">
            <span class="material-symbols-outlined" aria-hidden="true">payments</span>
            <h3>PAYE</h3>
            <p>If the business is going to pay staff a salary (including paying the Directors) then it needs to register as an employer (subject to certain restrictions).</p>
          </article>
        </div>
      </div>
    </section>

    <?php require dirname(__DIR__) . '/includes/cta.php'; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/site.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
