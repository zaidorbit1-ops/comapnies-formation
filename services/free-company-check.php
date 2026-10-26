<?php
declare(strict_types=1);

$siteRoot = '../../';
$activePage = 'services';
$pageTitle = 'Free Company Check';
$pageDescription = 'We offer professional & hassle free company formation services to help you register your business in Ireland';
$breadcrumbs = [
  ['label' => 'Home', 'url' => '../../index.php'],
  ['label' => 'Services', 'url' => '../../index.php#services'],
  ['label' => 'Free Company Check'],
];
$contactCtaTitle = 'WE WILL CHECK THE NAME FOR YOU FREE OF CHARGE !';
$contactCtaDescription = 'Just call us, email us, or complete your details in the link below.';
$contactCtaHref = 'mailto:info@companiesformation.ie';
$contactCtaLabel = 'Email us';
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free company name check service for your proposed Irish company name.">
  <meta name="theme-color" content="#ffffff">
  <title>Free Company Check | Companies Formation</title>
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

    <section class="free-check-intro py-16 lg:py-24 bg-surface-subtle border-b border-border-subtle" aria-labelledby="free-check-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="free-check-intro__grid">
          <div class="free-check-intro__visual">
            <?php
            $assetImageName = 'service2.png';
            $assetImageAlt = 'Free company name check';
            $assetImageWidth = 1200;
            $assetImageHeight = 800;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
          </div>
          <div class="free-check-intro__content">
            <span class="theme-eyebrow">Free company name check</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="free-check-intro-title">It is important to get your new company name right.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">It is important to get your new company name right, and we will perform your company name check for you free of charge to ensure your new company name conforms with the statutory requirements – just call us, email us, or complete your details in the link below.</p>
            <div class="free-check-intro__contact">
              <a href="tel:+35345254212"><span class="material-symbols-outlined" aria-hidden="true">call</span>Call us</a>
              <a href="mailto:info@companiesformation.ie"><span class="material-symbols-outlined" aria-hidden="true">mail</span>Email us</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="free-check-form-prompt py-16 lg:py-20 bg-surface-subtle border-b border-border-subtle" id="company-name-check" aria-labelledby="free-check-form-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="free-check-form">
          <div class="free-check-form__heading">
            <span class="theme-eyebrow">Free company name check</span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="free-check-form-title">Check a company name</h2>
            <p class="text-on-surface-variant font-body-md text-body-md">Enter your proposed company name to search the CRO register.</p>
          </div>
          <form class="free-check-form__fields" id="company-name-check-form" action="company-name-check.php" method="post">
            <label for="company-name-input">Enter company name</label>
            <div class="free-check-form__control">
              <span class="material-symbols-outlined" aria-hidden="true">domain</span>
              <input id="company-name-input" name="company_name" type="text" maxlength="160" autocomplete="organization" required>
              <button class="theme-button theme-button-primary" type="submit">
                <span class="free-check-form__button-label">Check name</span>
                <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
              </button>
            </div>
          </form>
          <div class="free-check-form__result" id="company-name-check-result" aria-live="polite" aria-atomic="true" hidden></div>
        </div>
      </div>
    </section>

    <section class="free-check-guide py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="free-check-guide-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="free-check-guide__layout free-check-guide__layout--content-only">
          <div class="free-check-guide__content">
            <span class="theme-eyebrow">Company name restrictions</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="free-check-guide-title">There are restrictions on your choice of company name.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">There are restrictions on your choice of company name. The most important one being that it must not be taken by any other company. We recommend you call us and let us do an immediate name check for you using our Company Name Check System – this will speed up the process and our experienced company formation experts can verify the name immediately for you.</p>
            <p class="free-check-guide__recommendation">Please feel free to read our guide to Company Name Restrictions below but we recommend to call us and WE WILL CHECK THE NAME FOR YOU FREE OF CHARGE !</p>
          </div>

          <div class="free-check-rules" aria-label="Company name restrictions">
            <h3>A name can be refused if:</h3>
            <ul class="free-check-rules__reasons">
              <li><span class="material-symbols-outlined" aria-hidden="true">event_busy</span><p>It is identical to or too similar to a name already appearing on the register of companies;</p></li>
              <li><span class="material-symbols-outlined" aria-hidden="true">warning</span><p>It is offensive;</p></li>
              <li><span class="material-symbols-outlined" aria-hidden="true">account_balance</span><p>It would suggest state sponsorship.</p></li>
            </ul>
            <ul class="free-check-rules__details">
              <li>It is generally recommended that company names include extra words so as to create a sufficient distinction between names.</li>
              <li>Certain words and their abbreviations together with accents and punctuation marks are not sufficient to distinguish between company names.Examples of such words include the definite article and the words “company “,”co “,”corporation “,”and “,”&amp;”,”service “,”services “,”limited “, etc.</li>
              <li>Place names are not considered to be a sufficient distinction between company names e.g Ireland, Dublin,West,etc.</li>
              <li>Similar descriptive elements e.g. staff/employment agency,or the inclusion of only a general or weak qualification such as “holding “,”group “,”system “,”services “,”international “,etc.may not be regarded as a sufficient distinction between company names.</li>
              <li>Particular care should be taken with names considered to have a distinctive element i.e.names consisting primarily of made-up words or non-dictionary words.The inclusion of qualifying words may not be sufficient to create a distinction between company names.</li>
              <li>Names which are phonetically and/or visually similar will be refused.This includes names where there is a slight variation in the spelling and the variation does not make a significant difference between the names.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <?php require dirname(__DIR__) . '/includes/cta.php'; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="../../assets/js/site.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/site.js') ?>" defer></script>
  <script src="../../assets/js/company-name-check.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/company-name-check.js') ?>" defer></script>
</body>
</html>
