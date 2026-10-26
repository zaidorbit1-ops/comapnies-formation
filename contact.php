<?php
declare(strict_types=1);

$siteRoot = '';
$activePage = 'contact';
$pageTitle = 'Contact Us';
$pageDescription = 'Get in touch with Companies Formation for practical support with company formation and ongoing company services in Ireland.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => 'index.php'],
  ['label' => 'Contact'],
];
$contactMethods = [
  [
    'icon' => 'call',
    'label' => 'Call our team',
    'value' => '+353 (45) 254212',
    'href' => 'tel:+35345254212',
  ],
  [
    'icon' => 'mail',
    'label' => 'Email us',
    'value' => 'info@companiesformation.ie',
    'href' => 'mailto:info@companiesformation.ie',
  ],
  [
    'icon' => 'location_on',
    'label' => 'Visit our office',
    'value' => 'Unit F13, Maynooth Business Campus, Maynooth, Co. Kildare W23 Y5N7',
    'href' => 'https://maps.google.com/?q=Unit+F13,+Maynooth+Business+Campus,+Maynooth,+Co.+Kildare,+W23+Y5N7',
  ],
];
$contactPackages = [
  'Basic Package (€135.00 Only)',
  'Standard Package (€199.00 Only)',
  'Premium Package (€299.00 Only)',
  'Non-resident Package (€1,950.00 Only)',
];
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Contact Companies Formation in Maynooth, Co. Kildare by phone or email for Irish company formation and company services.">
  <meta name="theme-color" content="#ffffff">
  <title>Contact Us | Companies Formation</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Sora:wght@400;600;700;800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script src="assets/js/tailwind-config.js"></script>
  <link rel="stylesheet" href="assets/css/theme.css?v=<?= filemtime(__DIR__ . '/assets/css/theme.css') ?>">
</head>
<body class="bg-surface-canvas text-on-surface antialiased font-body-md selection:bg-primary-container selection:text-white">
  <a class="skip-link" href="#main">Skip to content</a>
  <?php require __DIR__ . '/includes/header.php'; ?>
  <main id="main">
    <?php require __DIR__ . '/includes/breadcrumb.php'; ?>

    <section class="contact-page py-20 lg:py-28 border-b border-border-subtle" aria-labelledby="contact-page-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="contact-page__intro">
          <span class="theme-eyebrow">We’re here to help</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="contact-page-title">Let’s talk about your company.</h2>
          <p class="text-on-surface-variant font-body-lg text-body-lg">Contact our team in Maynooth to discuss company formation, registration or ongoing company services.</p>
        </div>

        <div class="contact-page__layout">
          <div class="contact-page__form-panel">
            <div class="contact-page__section-heading">
              <span class="theme-eyebrow">Send an enquiry</span>
              <h3>Got a question? We’re ready to help!</h3>
              <p>Share your details and choose the package you would like to discuss.</p>
            </div>
            <div class="contact-page__notice" id="contact-form-note" role="note">
              <span class="material-symbols-outlined" aria-hidden="true">info</span>
              <p>This form is for preview only and does not send or store your details. Call or email us to get in touch until secure form submission is configured.</p>
            </div>
            <form class="contact-page__form" method="post" autocomplete="off" novalidate aria-describedby="contact-form-note">
              <div class="contact-page__form-fields">
                <div class="contact-page__field">
                  <label for="contact-name">Your Name</label>
                  <input id="contact-name" type="text" autocomplete="name" placeholder="Enter your name">
                </div>
                <div class="contact-page__field">
                  <label for="contact-package">Package</label>
                  <select id="contact-package">
                    <option value="" selected disabled>Select a package</option>
                    <?php foreach ($contactPackages as $package): ?>
                      <option value="<?= htmlspecialchars($package, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($package, ENT_QUOTES, 'UTF-8') ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="contact-page__field">
                  <label for="contact-email">Email Address</label>
                  <input id="contact-email" type="email" autocomplete="email" placeholder="you@example.com">
                </div>
                <div class="contact-page__field">
                  <label for="contact-phone">Phone Number</label>
                  <input id="contact-phone" type="tel" autocomplete="tel" placeholder="+353">
                </div>
                <div class="contact-page__field contact-page__field--full">
                  <label for="contact-message">Message</label>
                  <textarea id="contact-message" rows="5" placeholder="How can we help?"></textarea>
                </div>
              </div>
              <div class="contact-page__submit">
                <button class="theme-button theme-button-primary" type="submit" disabled>
                  Send enquiry <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
                </button>
                <span>Secure submission is not configured yet.</span>
              </div>
            </form>
          </div>

          <aside class="contact-page__details" aria-label="Contact information">
            <div class="contact-page__section-heading">
              <span class="theme-eyebrow">Contact details</span>
              <h3>We’re based in Maynooth.</h3>
              <p>Reach our team by phone or email, or find our office in County Kildare.</p>
            </div>
            <div class="contact-page__detail-list">
              <?php foreach ($contactMethods as $method): ?>
                <article class="contact-page__card">
                  <span class="material-symbols-outlined" aria-hidden="true"><?= htmlspecialchars($method['icon'], ENT_QUOTES, 'UTF-8') ?></span>
                  <div>
                    <h4><?= htmlspecialchars($method['label'], ENT_QUOTES, 'UTF-8') ?></h4>
                    <a href="<?= htmlspecialchars($method['href'], ENT_QUOTES, 'UTF-8') ?>"<?= str_starts_with($method['href'], 'https://') ? ' target="_blank" rel="noopener noreferrer"' : '' ?>>
                      <?= htmlspecialchars($method['value'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                  </div>
                </article>
              <?php endforeach; ?>
              <article class="contact-page__card">
                <span class="material-symbols-outlined" aria-hidden="true">language</span>
                <div>
                  <h4>Website</h4>
                  <a href="https://companiesformation.ie" target="_blank" rel="noopener noreferrer">companiesformation.ie</a>
                </div>
              </article>
            </div>
          </aside>
        </div>

        <div class="contact-page__map">
          <div class="contact-page__map-heading">
            <span class="theme-eyebrow">Find our office</span>
            <h3>Maynooth Business Campus, Co. Kildare</h3>
          </div>
          <iframe
            title="Map showing Companies Formation at Maynooth Business Campus"
            src="https://maps.google.com/maps?q=Unit%20F13%2C%20Maynooth%20Business%20Campus%2C%20Maynooth%2C%20Co.%20Kildare%20W23%20Y5N7&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen></iframe>
        </div>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/site.js?v=<?= filemtime(__DIR__ . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
