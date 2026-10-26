<?php
declare(strict_types=1);

$siteRoot = '../../';
$activePage = 'services';
$pageTitle = 'Closing Up A Company';
$pageDescription = 'If a company has ceased trading (or has never traded and is not going to do so) it should be taken off the Register of Companies.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => '../../index.php'],
  ['label' => 'Services', 'url' => '../../index.php#services'],
  ['label' => 'Closing Up A Company'],
];
$contactCtaTitle = 'Ready to close up your company?';
$contactCtaDescription = 'Call us today on +353 (45)254212 or email info@companiesformation.ie to check the status of your company and winding it up.';
$contactCtaHref = 'tel:+35345254212';
$contactCtaLabel = 'Call us today';
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Support with taking a company that has ceased trading off the Register of Companies.">
  <meta name="theme-color" content="#ffffff">
  <title>Closing Up A Company | Companies Formation</title>
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

    <section class="closing-company-intro abroad-intro py-16 lg:py-24 border-b border-border-subtle" aria-labelledby="closing-company-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-intro__grid">
          <div class="abroad-intro__content">
            <span class="theme-eyebrow">Company strike-off support</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="closing-company-intro-title">Close a company that is no longer trading.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">If a company has ceased trading (or has never traded and is not going to do so) it should be taken off the Register of Companies.</p>
            <div class="closing-company-intro__price abroad-intro__price">
              <span>€295.00 <small>+ VAT</small></span>
              <a class="theme-button theme-button-primary" href="../../index.php#packages">
                View Packages <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
              </a>
            </div>
          </div>
          <div class="abroad-intro__visual">
            <?php
            $assetImageName = 'closing-up-company-hero.jpg';
            $assetImageAlt = 'Closing up a company';
            $assetImageWidth = 1200;
            $assetImageHeight = 880;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
            <div class="abroad-intro__visual-note">
              <span class="material-symbols-outlined" aria-hidden="true">domain_disabled</span>
              <span>Company strike-off support</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="closing-company-reasons py-20 lg:py-24 bg-white border-b border-border-subtle" aria-labelledby="closing-company-reasons-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="closing-company-reasons__heading">
          <span class="theme-eyebrow">Why act promptly?</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="closing-company-reasons-title">Why closing a company matters.</h2>
        </div>
        <ul class="closing-company-reasons__grid">
          <li>
            <span class="material-symbols-outlined closing-company-reasons__icon" aria-hidden="true">account_balance</span>
            <p>You may be due a tax refund when closing the company – we can check this for you and let you know what refund is due.</p>
          </li>
          <li>
            <span class="material-symbols-outlined closing-company-reasons__icon" aria-hidden="true">event_note</span>
            <p>A company, whether trading or not, has to file a return annually with the Registrar of Companies with a set of accounts. If the company is not trading, fees in the preparation of the accounts and filing fees will still have to be incurred.</p>
          </li>
          <li>
            <span class="material-symbols-outlined closing-company-reasons__icon" aria-hidden="true">gavel</span>
            <p>Directors of a company that do not file the required Returns in the Companies Office on time, leave themselves open to a potential fine by the Companies Office €1,905 plus late filing fees which are enforced and are costly and unnecessary.</p>
          </li>
        </ul>
      </div>
    </section>

    <section class="closing-company-process py-20 lg:py-28 bg-surface-subtle border-b border-border-subtle" aria-labelledby="closing-company-process-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="closing-company-process__content">
            <span class="theme-eyebrow">Closing up a company</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="closing-company-process-title">We can arrange to have your company taken off the Register.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">The cost of doing so is €295 plus VAT. The process includes the following:</p>
            <ol class="closing-company-process__list">
              <li><span class="material-symbols-outlined" aria-hidden="true">description</span><p>Preparation of a statement to the effect that the company has ceased trading or has never traded, and that it will not re-commence or commence trading, as applicable, in the period prior to its being struck off the register.</p></li>
              <li><span class="material-symbols-outlined" aria-hidden="true">inventory_2</span><p>A statement to the effect that the company has no assets or currently outstanding liabilities.</p></li>
              <li><span class="material-symbols-outlined" aria-hidden="true">fact_check</span><p>Filing of all outstanding annual returns and payment of relevant fees and penalties.</p></li>
              <li><span class="material-symbols-outlined" aria-hidden="true">request_quote</span><p>A letter of no objection from the Revenue Commissioners.</p></li>
              <li><span class="material-symbols-outlined" aria-hidden="true">newspaper</span><p>An advertisement published in one daily newspaper circulating in the locality of the registered office of the company.</p></li>
            </ol>
        </div>
      </div>
    </section>

    <section class="closing-company-timing py-14 lg:py-16 border-b border-border-subtle" aria-label="Company closure timeframe">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="closing-company-timing__panel">
          <span class="material-symbols-outlined" aria-hidden="true">schedule</span>
          <p>If you have decided to wind up your company it is important to start the process as soon as possible as winding up a company can take 4 to 6 weeks on average.</p>
        </div>
      </div>
    </section>

    <?php require dirname(__DIR__) . '/includes/cta.php'; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="../../assets/js/site.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
