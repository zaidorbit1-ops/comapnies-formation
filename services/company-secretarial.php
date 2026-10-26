<?php
declare(strict_types=1);

require_once (dirname(__DIR__) . '/includes/site-root.php');
$siteRoot = siteRootUrl();
$activePage = 'services';
$pageTitle = 'Company Secretarial';
$pageDescription = 'We can update your company to be compliant with the new 2014 Companies Legislation. There is now no need for a second Director.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => $siteRoot],
  ['label' => 'Services', 'url' => $siteRoot . '#services'],
  ['label' => 'Company Secretarial'],
];
$contactCtaTitle = 'Talk to our Company Secretarial Experts';
$contactCtaDescription = 'Call us on +353 (045)254212 or email info@companiesformation.ie to discuss your company’s filings.';
$contactCtaHref = 'tel:+35345254212';
$contactCtaLabel = 'Call us';
$secretarialFilings = [
  ['description', 'Alteration of Memorandum & Articles of Association'],
  ['volunteer_activism', 'Applications for Charitable Status'],
  ['event_repeat', 'Annual Company Compliance Service'],
  ['gavel', 'Audit Exemption Applications'],
  ['search', 'Company Search'],
  ['trending_up', 'Business Expansion Scheme (BES)'],
  ['groups', 'Board Meeting Minutes'],
  ['edit_document', 'Change of a Company Name'],
  ['location_on', 'Change of Registered Office'],
  ['restore', 'Company Restorations'],
  ['account_balance', 'Enterprise Board Equity Capital Schemes'],
  ['add_card', 'Increase in Share Capital'],
  ['verified', 'Notarisation and Apostille of Documents service'],
  ['account_balance_wallet', 'Opening of Bank Accounts'],
  ['task_alt', 'Special Resolutions'],
];
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Company secretarial support and company filings from Companies Formation in Ireland.">
  <meta name="theme-color" content="#ffffff">
  <?php require dirname(__DIR__) . '/includes/favicon.php'; ?>
  <title>Company Secretarial | Companies Formation</title>
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

    <section class="company-secretarial-intro abroad-intro py-16 lg:py-24 border-b border-border-subtle" aria-labelledby="company-secretarial-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-intro__grid">
          <div class="abroad-intro__content">
            <span class="theme-eyebrow">Company Secretarial</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="company-secretarial-intro-title">Update your company for the 2014 legislation.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">We can update your company to be compliant with the new 2014 Companies Legislation. There is now no need for a second Director.</p>
            <div class="company-secretarial-intro__price abroad-intro__price">
              <span>€245.00</span>
              <a class="theme-button theme-button-primary" href="../contact">
                Contact us <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
              </a>
            </div>
          </div>
          <div class="abroad-intro__visual">
            <?php
            $assetImageName = 'service11.png';
            $assetImageAlt = 'Company Secretarial service';
            $assetImageWidth = 1200;
            $assetImageHeight = 880;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
            <div class="abroad-intro__visual-note">
              <span class="material-symbols-outlined" aria-hidden="true">folder_managed</span>
              <span>Company secretarial support</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="company-secretarial-transition abroad-support py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="company-secretarial-transition-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-support__grid service-content-only">
          <div class="company-secretarial-transition__content abroad-support__content">
            <span class="theme-eyebrow">One director company</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="company-secretarial-transition-title">Changing your company to be a one director company.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">We can update your company to be compliant with the new 2014 Companies Legislation. There is now no need for a second Director or Shareholder and every current company has to changeover to be a new DAC or LTD company. We can arrange this for you providing the new constitution, resolutions and documentation for you. Just call us today or complete our simple order form here.</p>
            <a class="company-secretarial-contact" href="../contact">
              <span class="material-symbols-outlined" aria-hidden="true">contact_support</span>
              Contact us about your company
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="company-secretarial-filings py-20 lg:py-28 bg-surface-subtle border-b border-border-subtle" aria-labelledby="company-secretarial-filings-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="company-secretarial-filings__heading">
          <span class="theme-eyebrow">Ongoing company support</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="company-secretarial-filings-title">All other company filings.</h2>
          <p class="text-on-surface-variant font-body-lg text-body-lg">Throughout the life of a company there are other events that may require the filing of documents with the Registrar of Companies or the Revenue Commissioners and our experts can ensure the procedures and documents are prepared and filed correctly.</p>
          <p class="text-on-surface-variant font-body-md text-body-md">We can help with any filings you have but specifically we are experts in:</p>
        </div>
        <ul class="company-secretarial-filings__grid">
          <?php foreach ($secretarialFilings as [$icon, $filing]): ?>
            <li>
              <span class="material-symbols-outlined" aria-hidden="true"><?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?></span>
              <p><?= htmlspecialchars($filing, ENT_QUOTES, 'UTF-8') ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
        <p class="company-secretarial-filings__contact">Please call us on <a href="tel:+35345254212">+353 (045)254212</a> or e-mail us at <a href="mailto:info@companiesformation.ie">info@companiesformation.ie</a> today to discuss any of the above with our Company Secretarial Experts.</p>
      </div>
    </section>

    <?php require dirname(__DIR__) . '/includes/cta.php'; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/site.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
