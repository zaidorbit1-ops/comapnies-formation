<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/site-root.php';
$siteRoot = siteRootUrl();
$activePage = 'downloads';
$pageTitle = 'Downloads';
$pageDescription = 'Access useful company formation and registration forms for your business in Ireland.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => './'],
  ['label' => 'Downloads'],
];
$downloadForms = [
  [
    'icon' => 'badge',
    'category' => 'Personal Public Service Number',
    'title' => 'PPS Application Form',
    'description' => 'Download the application form for a Personal Public Service Number.',
    'file' => $siteRoot . 'assets/Pdfs/PPS%20Application%20Form.pdf',
    'filename' => 'PPS Application Form.pdf',
  ],
  [
    'icon' => 'link',
    'category' => 'Company formation',
    'title' => 'Agent Link Notification Form',
    'description' => 'Download the Agent Link Notification Form for company-related agent notifications.',
    'file' => $siteRoot . 'assets/Pdfs/Agent-link-notification-form.pdf',
    'filename' => 'Agent-link-notification-form.pdf',
  ],
  [
    'icon' => 'domain_add',
    'category' => 'CRO incorporation',
    'title' => 'Application to Incorporate a Company',
    'description' => 'Application to incorporate a company under Section 22(2)/24 of the Companies Act 2014.',
    'file' => $siteRoot . 'assets/Pdfs/A1-v2.5-black-fillable.pdf',
    'filename' => 'A1-v2.5-black-fillable.pdf',
  ],
];
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Download PPS number, Agent Link Notification and Irish company incorporation forms from Companies Formation.">
  <meta name="theme-color" content="#ffffff">
  <?php require __DIR__ . '/includes/favicon.php'; ?>
  <title>Downloads | Companies Formation</title>
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

    <section class="downloads-page py-20 lg:py-28 border-b border-border-subtle" aria-labelledby="downloads-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="downloads-page__intro">
          <span class="theme-eyebrow">Forms and resources</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="downloads-title">Useful forms, ready when you need them.</h2>
          <p class="text-on-surface-variant font-body-lg text-body-lg">Browse and download company formation and registration documents. Select a form to save the PDF to your device.</p>
        </div>

        <div class="downloads-page__grid">
          <?php foreach ($downloadForms as $form): ?>
            <article class="theme-card surface-card downloads-card">
              <div class="downloads-card__top">
                <span class="downloads-card__icon material-symbols-outlined" aria-hidden="true"><?= htmlspecialchars($form['icon'], ENT_QUOTES, 'UTF-8') ?></span>
                <span class="downloads-card__format">
                  <span class="material-symbols-outlined" aria-hidden="true">picture_as_pdf</span>
                  PDF document
                </span>
              </div>
              <div class="downloads-card__content">
                <span class="downloads-card__category"><?= htmlspecialchars($form['category'], ENT_QUOTES, 'UTF-8') ?></span>
                <h3><?= htmlspecialchars($form['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                <p><?= htmlspecialchars($form['description'], ENT_QUOTES, 'UTF-8') ?></p>
              </div>
              <a class="theme-button theme-button-primary downloads-card__action" href="<?= htmlspecialchars($form['file'], ENT_QUOTES, 'UTF-8') ?>" download="<?= htmlspecialchars($form['filename'], ENT_QUOTES, 'UTF-8') ?>">
                Download form
                <span class="material-symbols-outlined" aria-hidden="true">download</span>
              </a>
            </article>
          <?php endforeach; ?>
        </div>
        <p class="downloads-page__note">
          <span class="material-symbols-outlined" aria-hidden="true">info</span>
          <span>Forms and filing requirements can change. Check that you are using the current version and follow the relevant CRO or government guidance before submitting.</span>
        </p>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/includes/footer.php'; ?>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/site.js?v=<?= filemtime(__DIR__ . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
