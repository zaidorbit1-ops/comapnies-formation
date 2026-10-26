<?php
declare(strict_types=1);

require_once (dirname(__DIR__) . '/includes/site-root.php');
$siteRoot = siteRootUrl();
$activePage = 'services';
$pageTitle = 'Audit Exemption Court Application';
$pageDescription = 'The vast majority of companies do not need an audit. In rare cases if the returns for your company are late, an audit may be required.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => $siteRoot],
  ['label' => 'Services', 'url' => $siteRoot . '#services'],
  ['label' => 'Audit Exemption Court Application'],
];
$contactCtaTitle = 'Speak to us about an audit exemption application';
$contactCtaDescription = 'Call us on +353 (045)254212 or email info@companiesformation.ie and we can start the process for you.';
$contactCtaHref = 'tel:+35345254212';
$contactCtaLabel = 'Call us';
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Support with an Audit Exemption Court Application for Irish companies.">
  <meta name="theme-color" content="#ffffff">
  <?php require dirname(__DIR__) . '/includes/favicon.php'; ?>
  <title>Audit Exemption Court Application | Companies Formation</title>
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

    <section class="audit-exemption-intro abroad-intro py-16 lg:py-24 border-b border-border-subtle" aria-labelledby="audit-exemption-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-intro__grid">
          <div class="abroad-intro__content">
            <span class="theme-eyebrow">Audit exemption court application</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="audit-exemption-intro-title">Restore your company’s audit exemption.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">The vast majority of companies do not need an audit. In rare cases if the returns for your company are late, an audit may be required. We can now get your late filing fees removed and the audit exemption restored for your company – <strong>call us on <a href="tel:+35345254212">+353 (045)254212</a> and we can arrange it for you.</strong></p>
            <div class="audit-exemption-intro__price abroad-intro__price">
              <span>€1,050.00</span>
              <a class="theme-button theme-button-primary" href="tel:+35345254212">
                Contact us <span class="material-symbols-outlined" aria-hidden="true">call</span>
              </a>
            </div>
          </div>
          <div class="abroad-intro__visual">
            <?php
            $assetImageName = 'service9.png';
            $assetImageAlt = 'Audit Exemption Court Application service';
            $assetImageWidth = 1200;
            $assetImageHeight = 880;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
            <div class="abroad-intro__visual-note">
              <span class="material-symbols-outlined" aria-hidden="true">gavel</span>
              <span>Audit exemption application support</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="audit-exemption-overview abroad-support py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="audit-exemption-overview-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-support__grid service-content-only">
          <div class="audit-exemption-overview__content abroad-support__content">
            <span class="theme-eyebrow">Court application support</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="audit-exemption-overview-title">A cost-effective application, managed from start to finish.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">Applications can be made for more than one annual return at a time – the cost is often less than the late filing fees, and it removes the expense of two time-consuming and intrusive audits. This also removes the threat of prosecution of the company and/or its directors, and possible involuntary strike-off and dissolution of the company.</p>
            <p class="text-on-surface-variant font-body-md text-body-md">We can make a cost-effective application to the less expensive District Court. The Court can make an Order extending the time in which the annual return of the company, in relation to a particular year, may be delivered to the Registrar of Companies. This removes the audit requirement for two years and the late filing penalties – the returns can be filed with unaudited accounts as if they were received by the Companies Office on time.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="audit-exemption-process annual-return-how py-20 lg:py-24 border-b border-border-subtle" aria-labelledby="audit-exemption-process-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="audit-exemption-process__heading">
          <span class="theme-eyebrow">From start to finish</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="audit-exemption-process-title">We look after the process for you.</h2>
        </div>
        <ul class="audit-exemption-process__steps">
          <li>
            <span class="material-symbols-outlined" aria-hidden="true">event</span>
            <p>Arranging the timing of the hearing date (Section 343 of the Companies Act 2014).</p>
          </li>
          <li>
            <span class="material-symbols-outlined" aria-hidden="true">forward_to_inbox</span>
            <p>Serving of the notice (Form 93B.1) on the Registrar.</p>
          </li>
          <li>
            <span class="material-symbols-outlined" aria-hidden="true">draw</span>
            <p>Arranging the company’s Affidavit (Form 93B.2) – this puts the Registrar on Notice in accordance with section 343(5), CA 2014.</p>
          </li>
          <li>
            <span class="material-symbols-outlined" aria-hidden="true">assured_workload</span>
            <p>Serving the Rollback order with the Companies Registration Office.</p>
          </li>
        </ul>
        <div class="audit-exemption-process__note">
          <span class="material-symbols-outlined" aria-hidden="true">info</span>
          <p>Normally there is no need for the company Directors to be involved apart from the signing of some simple documents at the start of the process.</p>
        </div>
      </div>
    </section>

    <section class="audit-exemption-guidance py-20 lg:py-24 bg-white border-b border-border-subtle" aria-labelledby="audit-exemption-guidance-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="audit-exemption-guidance__header">
          <span class="theme-eyebrow">Important information</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="audit-exemption-guidance-title">Speak to us before filing late documents.</h2>
        </div>
        <div class="audit-exemption-guidance__grid">
          <article>
            <span class="material-symbols-outlined" aria-hidden="true">rule</span>
            <p>It is important to speak to us before any late documents are filed for the company as only one order may be made in respect of a particular year and the filing of a late return with late filing fees can prevent the process from removing the audit obligation for the company.</p>
          </article>
          <article>
            <span class="material-symbols-outlined" aria-hidden="true">event_available</span>
            <p>The time period which may be extended by the Court is the 28 days after the ARD provided for in sections 343(2) and (3), CA 2014. When the company delivers the annual return to the CRO within the extended time period, that annual return will be deemed by the CRO to have been received on time and the consequences of late filing (late filing penalties / loss of audit exemption) will not apply to that annual return.</p>
          </article>
          <article>
            <span class="material-symbols-outlined" aria-hidden="true">credit_score</span>
            <p>It is important to start the process as soon as possible as late returns can cause credit problems for the company.</p>
          </article>
        </div>
        <p class="audit-exemption-guidance__contact">Call us with any questions you may have on <a href="tel:+35345254212">+353 (45)254212</a> or email us on <a href="mailto:info@companiesformation.ie">info@companiesformation.ie</a> and we can start the process for you immediately.</p>
      </div>
    </section>

    <?php require dirname(__DIR__) . '/includes/cta.php'; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/site.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
