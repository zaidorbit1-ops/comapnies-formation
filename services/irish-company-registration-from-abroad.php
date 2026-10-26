<?php
declare(strict_types=1);

$siteRoot = '../../';
$activePage = 'services';
$pageTitle = 'Irish Company Registration From Abroad';
$pageDescription = 'Registering your Irish company from abroad is easy and fast using our experts. You do not have to visit Ireland and your new company can be incorporated in 1 hour.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => '../../index.php'],
  ['label' => 'Services', 'url' => '../../index.php#services'],
  ['label' => 'Irish Company Registration From Abroad'],
];
$contactCtaTitle = 'Get in touch with us today!';
$contactCtaDescription = 'LET US SEND YOU MORE INFORMATION: Email';
$contactCtaHref = 'mailto:info@companiesformation.ie';
$contactCtaLabel = 'Email us';
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Register your Irish company from abroad with support from Companies Formation.">
  <meta name="theme-color" content="#ffffff">
  <title>Irish Company Registration From Abroad | Companies Formation</title>
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

    <section class="abroad-intro py-16 lg:py-24 border-b border-border-subtle" aria-labelledby="abroad-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-intro__grid">
          <div class="abroad-intro__content">
            <span class="theme-eyebrow">Irish company registration from abroad</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="abroad-intro-title">Your Irish Company in 1 Hour!</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">Registering your Irish company from abroad is easy and fast using our experts. You do not have to visit Ireland and your new company can be incorporated in 1 hour. Irish companies can avail of the favourable low Irish Corporation Tax rate of 12.5% and may be eligible for a 0% company tax rate. Directors and Shareholders can be anywhere in the world and only €1 share capital is required.</p>
            <div class="abroad-intro__price">
              <span>€1,950.00</span>
              <a class="theme-button theme-button-primary" href="../../index.php#packages">
                View Packages <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
              </a>
            </div>
          </div>
          <div class="abroad-intro__visual">
            <?php
            $assetImageName = 'service3.png';
            $assetImageAlt = 'Irish company registration from abroad';
            $assetImageWidth = 1200;
            $assetImageHeight = 800;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
            <div class="abroad-intro__visual-note">
              <span class="material-symbols-outlined" aria-hidden="true">public</span>
              <span>You do not have to visit Ireland</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="abroad-support py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="abroad-support-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-support__grid service-content-only">
          <div class="abroad-support__content">
            <span class="theme-eyebrow">Company registration support</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="abroad-support-title">We can also provide everything to guarantee your Irish Company Registration from abroad runs smoothly:</h2>
            <ul class="abroad-support__list">
              <li><span class="material-symbols-outlined" aria-hidden="true">domain</span>Registered Office Facility</li>
              <li><span class="material-symbols-outlined" aria-hidden="true">payments</span>Tax registration</li>
              <li><span class="material-symbols-outlined" aria-hidden="true">phone</span>Irish Phone and Fax Number</li>
              <li><span class="material-symbols-outlined" aria-hidden="true">forward_to_inbox</span>Post forwarding service</li>
              <li><span class="material-symbols-outlined" aria-hidden="true">description</span>Annual filings service</li>
              <li><span class="material-symbols-outlined" aria-hidden="true">support_agent</span>Dedicated accounts manager</li>
              <li><span class="material-symbols-outlined" aria-hidden="true">account_balance</span>Assistance with Bank Account documentation</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="abroad-contact py-14 lg:py-16 border-b border-border-subtle" aria-label="Contact Companies Formation">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-contact__panel">
          <p>Call us now on <a href="tel:+35345254212">+353 (045)254212</a> to have your company incorporated immediately or email us on <a href="mailto:info@companiesformation.ie">info@companiesformation.ie</a></p>
          <a class="theme-button theme-button-primary" href="tel:+35345254212">
            Call us now <span class="material-symbols-outlined" aria-hidden="true">call</span>
          </a>
        </div>
      </div>
    </section>

    <section class="abroad-credentials py-20 lg:py-24 bg-white border-b border-border-subtle" aria-labelledby="abroad-credentials-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-credentials__grid service-content-only">
          <div class="abroad-credentials__content">
            <span class="theme-eyebrow">Irish company registration</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="abroad-credentials-title">Registered and authorised in Ireland</h2>
            <ul class="abroad-credentials__list">
              <li><span class="material-symbols-outlined" aria-hidden="true">verified</span>Registered in Ireland with the Department of Justice as an authorised Company Fomation providor.</li>
              <li><span class="material-symbols-outlined" aria-hidden="true">verified</span>Registered as an authorised Tax Agent with the Irish Revenue Commissioners</li>
              <li><span class="material-symbols-outlined" aria-hidden="true">verified</span>Registered with the Companies Registry as Fast Track Incorporations providor.</li>
              <li><span class="material-symbols-outlined" aria-hidden="true">verified</span>Registered with the Companies Registry as a Fast Track Incorporations provider.</li>
            </ul>
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
