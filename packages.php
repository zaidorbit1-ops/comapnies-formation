<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/site-root.php';
$siteRoot = siteRootUrl();
$activePage = 'packages';
$pageTitle = 'Company Formation Packages';
$pageDescription = 'Compare our Irish company formation packages and choose the level of support that suits your business.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => './'],
  ['label' => 'Packages'],
];
$packageFeatures = [
  'Original Certificate of Incorporation',
  'Company Constitution',
  'Express Company Formation',
  'Share Certificates',
  'Free Company Name Check',
  'Digital Documents by email in PDF Format',
  'CRO fees included',
  'High Quality Plier Company Seal',
  'Tax & VAT Registration',
];
$packages = [
  [
    'category' => 'Incorporation',
    'name' => 'Basic Package',
    'price' => '€135.00',
    'summary' => 'Foundational Irish incorporation.',
  ],
  [
    'category' => 'Popular',
    'name' => 'Standard Package',
    'price' => '€199.00',
    'summary' => 'Enhanced corporate readiness.',
  ],
  [
    'category' => 'Comprehensive',
    'name' => 'Premium Package',
    'price' => '€299.00',
    'summary' => 'Full-service executive setup.',
    'featured' => true,
  ],
  [
    'category' => 'International',
    'name' => 'Non-Resident Package',
    'price' => '€1,950.00',
    'summary' => 'Cross-border director solution.',
  ],
];
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Compare Basic, Standard, Premium and Non-Resident Irish company formation packages from Companies Formation.">
  <meta name="theme-color" content="#ffffff">
  <?php require __DIR__ . '/includes/favicon.php'; ?>
  <title>Company Formation Packages | Companies Formation</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Sora:wght@400;600;700;800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/tailwind-config.js"></script>
  <link rel="stylesheet" href="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/css/theme.css?v=<?= filemtime(__DIR__ . '/assets/css/theme.css') ?>">
</head>
<body class="bg-surface-canvas text-on-surface antialiased font-body-md selection:bg-primary-container selection:text-white">
  <a class="skip-link" href="#main">Skip to content</a>
  <?php require __DIR__ . '/includes/header.php'; ?>
  <main id="main">
    <?php require __DIR__ . '/includes/breadcrumb.php'; ?>
    <?php require __DIR__ . '/includes/services-ticker.php'; ?>

    <section class="py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="packages-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16">
          <span class="theme-eyebrow text-primary-container font-label-md text-label-md uppercase tracking-wider font-semibold">Transparent Pricing</span>
          <span class="services-section__accent mx-auto" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight mt-1 mb-3" id="packages-title">Our Packages</h2>
          <p class="text-on-surface-variant font-body-lg text-body-lg">Fixed statutory rates with zero hidden fees. CRO direct submission fees included in all formation solutions.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
          <?php foreach ($packages as $package): ?>
            <?php $isFeatured = $package['featured'] ?? false; ?>
            <article class="pricing-card<?= $isFeatured ? ' pricing-card--featured' : '' ?> bg-white border<?= $isFeatured ? '-2 border-primary-container shadow-lg relative' : ' border-border-subtle shadow-sm' ?> rounded-xl p-7 flex flex-col justify-between">
              <?php if ($isFeatured): ?>
                <span class="pricing-card__badge absolute bg-primary-container text-white rounded-full font-label-sm text-label-sm uppercase tracking-wider font-bold">Recommended Choice</span>
              <?php endif; ?>
              <div>
                <div class="pb-6 border-b border-border-subtle">
                  <span class="<?= $isFeatured ? 'theme-eyebrow text-primary-container font-label-md text-label-md uppercase tracking-wider font-semibold' : 'text-on-surface-variant font-label-md text-label-md uppercase tracking-wider font-semibold' ?>"><?= htmlspecialchars($package['category'], ENT_QUOTES, 'UTF-8') ?></span>
                  <h3 class="text-surface-contrast font-headline-sm text-headline-sm font-bold mt-1"><?= htmlspecialchars($package['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                  <div class="mt-4 flex items-baseline gap-1">
                    <span class="text-surface-contrast font-headline-md text-[32px] leading-tight font-extrabold"><?= htmlspecialchars($package['price'], ENT_QUOTES, 'UTF-8') ?></span>
                    <span class="text-on-surface-variant font-body-sm text-body-sm">Only</span>
                  </div>
                  <p class="text-on-surface-variant font-body-sm text-body-sm mt-1"><?= htmlspecialchars($package['summary'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="py-6">
                  <p class="text-surface-contrast font-label-md text-label-md font-bold mb-4">What's Included:</p>
                  <ul class="space-y-3 font-body-sm text-body-sm text-on-surface">
                    <?php foreach ($packageFeatures as $feature): ?>
                      <li class="flex items-center gap-2.5">
                        <span class="material-symbols-outlined text-primary-container text-[18px]" aria-hidden="true">check</span>
                        <span<?= $isFeatured ? ' class="font-medium"' : '' ?>><?= htmlspecialchars($feature, ENT_QUOTES, 'UTF-8') ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
              <a class="theme-button w-full inline-flex items-center justify-center py-3 px-4 rounded-lg font-label-md text-label-md font-semibold transition-colors duration-150<?= $isFeatured ? ' bg-primary-container text-white hover:bg-[#064F9E] shadow' : ' bg-surface-subtle border border-border-strong text-surface-contrast hover:bg-surface-contrast hover:text-white' ?>" href="https://companiesformation.ie">
                Choose Package
              </a>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/includes/footer.php'; ?>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/site.js?v=<?= filemtime(__DIR__ . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
