<?php
declare(strict_types=1);

$siteRoot = '../../';
$activePage = 'services';
$pageTitle = 'Irish Registered Office';
$pageDescription = 'Keep your home address private by using our Maynooth office address as your company’s registered office.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => '../../index.php'],
  ['label' => 'Services', 'url' => '../../index.php#services'],
  ['label' => 'Irish Registered Office'],
];
$contactCtaTitle = 'Arrange your Irish Registered Office';
$contactCtaDescription = 'Call or email us to discuss using our Maynooth office address for your company.';
$contactCtaHref = 'tel:+35345254212';
$contactCtaLabel = 'Call us';
$registeredOfficeBenefits = [
  ['visibility_off', 'Keep your residential address private', 'Your residential address is not shown on the public register.'],
  ['mark_email_read', 'Reduce unsolicited mail', 'Using our office address helps stop unsolicited junk mail reaching your home.'],
  ['home_work', 'Check rental contract restrictions', 'Many rental contracts do not allow a landlord’s address to be used as a registered office.'],
  ['public', 'An Irish address for overseas customers', 'Overseas companies need an Irish registered office address to form an Irish company.'],
];
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Use Companies Formation’s Maynooth office address as your Irish company’s registered office, including statutory mail forwarding.">
  <meta name="theme-color" content="#ffffff">
  <?php require dirname(__DIR__) . '/includes/favicon.php'; ?>
  <title>Irish Registered Office | Companies Formation</title>
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
    <?php require dirname(__DIR__) . '/includes/services-ticker.php'; ?>

    <section class="registered-office-intro abroad-intro py-16 lg:py-24 border-b border-border-subtle" aria-labelledby="registered-office-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-intro__grid">
          <div class="abroad-intro__content">
            <span class="theme-eyebrow">Irish Registered Office</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="registered-office-intro-title">Keep your home address private.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">Use our Maynooth office address as your company’s registered office for €25 plus VAT per month, including forwarding of statutory mail.</p>
            <div class="registered-office-intro__price abroad-intro__price">
              <span>€25.00 <small>per month + VAT</small></span>
              <a class="theme-button theme-button-primary" href="#registered-office-order">
                Contact us <span class="material-symbols-outlined" aria-hidden="true">arrow_downward</span>
              </a>
            </div>
          </div>
          <div class="abroad-intro__visual">
            <?php
            $assetImageName = 'service12.png';
            $assetImageAlt = 'Irish registered office service';
            $assetImageWidth = 1200;
            $assetImageHeight = 880;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
            <div class="abroad-intro__visual-note">
              <span class="material-symbols-outlined" aria-hidden="true">location_on</span>
              <span>Maynooth, County Kildare</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="registered-office-benefits py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="registered-office-benefits-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="registered-office-benefits__layout service-content-only">
          <div class="registered-office-benefits__content">
            <span class="theme-eyebrow">The benefits of our service</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="registered-office-benefits-title">A practical registered office for your Irish company.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">Our Maynooth address can help protect your home address and provide a local registered office for statutory correspondence.</p>
          </div>
        </div>
        <ul class="registered-office-benefits__grid">
          <?php foreach ($registeredOfficeBenefits as [$icon, $title, $description]): ?>
            <li>
              <span class="material-symbols-outlined" aria-hidden="true"><?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?></span>
              <div>
                <h3><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h3>
                <p><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>

    <section class="registered-office-order rbo-form-section py-20 lg:py-28 bg-surface-subtle border-b border-border-subtle" id="registered-office-order" aria-labelledby="registered-office-order-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="rbo-form__intro">
          <span class="theme-eyebrow">Get in touch</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="registered-office-order-title">Arrange your registered office service.</h2>
          <p class="text-on-surface-variant font-body-lg text-body-lg">Call us or get in touch to discuss using our Maynooth address for your company.</p>
        </div>
        <div class="rbo-form__notice" role="note">
          <span class="material-symbols-outlined" aria-hidden="true">info</span>
          <p>This form is for preview only and does not send or store information. Please call or email us to arrange the service until secure form submission is configured.</p>
        </div>

        <form class="rbo-form registered-office-form" method="post" autocomplete="off" novalidate>
          <fieldset class="rbo-form__group">
            <legend><span class="material-symbols-outlined" aria-hidden="true">person</span>Your details</legend>
            <div class="rbo-form__fields rbo-form__fields--two">
              <div class="rbo-form__field">
                <label for="registered-office-name">Your Name</label>
                <input id="registered-office-name" type="text" autocomplete="name">
              </div>
              <div class="rbo-form__field">
                <label for="registered-office-email">Your Email</label>
                <input id="registered-office-email" type="email" autocomplete="email">
              </div>
              <div class="rbo-form__field">
                <label for="registered-office-phone">Phone Number</label>
                <input id="registered-office-phone" type="tel" autocomplete="tel">
              </div>
              <div class="rbo-form__field">
                <label for="registered-office-company">Company Name</label>
                <input id="registered-office-company" type="text" autocomplete="organization">
              </div>
            </div>
          </fieldset>
          <div class="rbo-form__submit">
            <button class="theme-button theme-button-primary" type="submit" disabled>
              Enquire about this service <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
            </button>
            <p>Secure submission is not configured yet. Please call or email us to arrange the service.</p>
          </div>
        </form>
        <p class="rbo-form__questions">Call us on <a href="tel:+35345254212">+353 (045)254212</a> or email <a href="mailto:info@companiesformation.ie">info@companiesformation.ie</a>.</p>
      </div>
    </section>

    <?php require dirname(__DIR__) . '/includes/cta.php'; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="../../assets/js/site.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
