<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/site-root.php';
$siteRoot = siteRootUrl();
$activePage = 'about';
$pageTitle = 'About Us';
$pageDescription = 'Independent company formation and secretarial support from Maynooth, Co. Kildare, helping make the process of starting a company in Ireland clearer.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => './'],
  ['label' => 'About Us'],
];
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Learn about Companies Formation, an independent company formations agency based in Maynooth, Co. Kildare, Ireland.">
  <meta name="theme-color" content="#ffffff">
  <?php require __DIR__ . '/includes/favicon.php'; ?>
  <title>About Us | Companies Formation</title>
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

    <section class="about-intro py-20 lg:py-28 bg-surface-subtle border-b border-border-subtle" aria-labelledby="about-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="about-intro__layout">
          <div class="about-intro__statement">
            <span class="theme-eyebrow">Independent Irish company formation agency</span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="about-intro-title">A clearer start for business in Ireland.</h2>
            <span class="services-section__accent" aria-hidden="true"></span>
            <p>Based in Maynooth. Here to make company formation feel more straightforward.</p>
            <a class="theme-button theme-button-primary about-intro__link" href="contact">
              Talk to our team <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
            </a>
          </div>
          <div class="about-intro__narrative">
            <span class="about-intro__quote-mark" aria-hidden="true">“</span>
            <p class="about-intro__lead">Companies Formation is an independent Company Formations Agency operating from Maynooth, Co. Kildare. Since 2016, we have helped local and international directors incorporate companies in Ireland.</p>
            <div class="about-intro__details">
              <p>We support company formations, business name registration and company secretarial work. We also work with accountants in Ireland to incorporate companies for their clients through a white-label system.</p>
              <p>Our goal is to simplify incorporation by working with our clients to make the process as cost-effective and efficient as possible. If you are moving your company to Ireland or considering incorporating here, talk to us about the process and the opportunities Ireland offers for doing business.</p>
            </div>
          </div>
        </div>
        <div class="about-facts" aria-label="About Companies Formation">
          <div class="about-fact">
            <span class="material-symbols-outlined" aria-hidden="true">calendar_month</span>
            <div><strong>2016</strong><span>Established in Ireland</span></div>
          </div>
          <div class="about-fact">
            <span class="material-symbols-outlined" aria-hidden="true">domain</span>
            <div><strong>Thousands</strong><span>of companies incorporated</span></div>
          </div>
          <div class="about-fact">
            <span class="material-symbols-outlined" aria-hidden="true">location_on</span>
            <div><strong>Maynooth</strong><span>Co. Kildare, Ireland</span></div>
          </div>
        </div>
      </div>
    </section>

    <section class="about-purpose py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="about-purpose-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="about-section-heading">
          <span class="theme-eyebrow">What guides us</span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight mt-1" id="about-purpose-title">Our mission &amp; vision</h2>
          <p class="text-on-surface-variant font-body-lg text-body-lg">Two principles shape how we support people setting up and running a company in Ireland.</p>
        </div>
        <div class="about-purpose__grid">
          <article class="theme-card surface-card about-flip-card" tabindex="0" aria-label="Our mission. Hover or focus to read more.">
            <div class="about-flip-card__inner">
              <div class="about-flip-card__face about-flip-card__front">
                <span class="about-flip-card__icon material-symbols-outlined" aria-hidden="true">track_changes</span>
                <h3 class="about-flip-card__title">Our mission</h3>
                <span class="about-flip-card__hint">Hover to explore <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></span>
              </div>
              <div class="about-flip-card__face about-flip-card__back">
                <span class="about-flip-card__back-label">What we do</span>
                <span class="about-flip-card__back-copy">To simplify incorporation by offering clear, cost-effective and efficient support, shaped around each client’s needs.</span>
              </div>
            </div>
          </article>
          <article class="theme-card surface-card about-flip-card" tabindex="0" aria-label="Our vision. Hover or focus to read more.">
            <div class="about-flip-card__inner">
              <div class="about-flip-card__face about-flip-card__front">
                <span class="about-flip-card__icon material-symbols-outlined" aria-hidden="true">visibility</span>
                <h3 class="about-flip-card__title">Our vision</h3>
                <span class="about-flip-card__hint">Hover to explore <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></span>
              </div>
              <div class="about-flip-card__face about-flip-card__back">
                <span class="about-flip-card__back-label">Where we’re going</span>
                <span class="about-flip-card__back-copy">To make starting a business in Ireland easier to navigate, so clients can focus on the next stage of their business journey.</span>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="about-journey py-20 lg:py-28 border-b border-border-subtle" aria-labelledby="about-journey-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="about-journey__intro">
          <div>
            <span class="theme-eyebrow">Our journey</span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight mt-1" id="about-journey-title">Built around the needs of Irish businesses.</h2>
          </div>
          <p class="text-on-surface-variant font-body-lg text-body-lg">From incorporation to ongoing company support, we help clients find a clear next step.</p>
        </div>
        <div class="about-journey__track">
          <article class="about-journey__step">
            <span class="about-journey__marker"><span class="material-symbols-outlined" aria-hidden="true">flag</span></span>
            <div class="about-journey__card">
              <span class="about-journey__eyebrow">The beginning</span>
              <h3>Established in 2016</h3>
              <p>Companies Formation began with a focus on helping businesses incorporate and move their operations to Ireland.</p>
            </div>
          </article>
          <article class="about-journey__step">
            <span class="about-journey__marker"><span class="material-symbols-outlined" aria-hidden="true">public</span></span>
            <div class="about-journey__card">
              <span class="about-journey__eyebrow">Our clients</span>
              <h3>Local &amp; international directors</h3>
              <p>We work with directors based in Ireland and overseas as they take steps to establish an Irish company.</p>
            </div>
          </article>
          <article class="about-journey__step">
            <span class="about-journey__marker"><span class="material-symbols-outlined" aria-hidden="true">handshake</span></span>
            <div class="about-journey__card">
              <span class="about-journey__eyebrow">Today</span>
              <h3>Support beyond incorporation</h3>
              <p>Our work also includes business name registration, company secretarial support and white-label services for accountants.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <?php require __DIR__ . '/includes/cta.php'; ?>
  </main>
  <?php require __DIR__ . '/includes/footer.php'; ?>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/site.js?v=<?= filemtime(__DIR__ . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
