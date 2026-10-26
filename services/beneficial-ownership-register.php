<?php
declare(strict_types=1);

$siteRoot = '../../';
$activePage = 'services';
$pageTitle = 'Beneficial Ownership Register';
$pageDescription = 'All Limited companies have to be registered with the Registry of Beneficial Ownership which was launched in 2019.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => '../../index.php'],
  ['label' => 'Services', 'url' => '../../index.php#services'],
  ['label' => 'Beneficial Ownership Register'],
];
$contactCtaTitle = 'Need help with RBO registration?';
$contactCtaDescription = 'Call us on +353 (045)254212 or email info@companiesformation.ie and we will help with your company’s beneficial ownership filing.';
$contactCtaHref = 'tel:+35345254212';
$contactCtaLabel = 'Call us';
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Register your Irish company’s beneficial ownership information with help from Companies Formation.">
  <meta name="theme-color" content="#ffffff">
  <title>Beneficial Ownership Register | Companies Formation</title>
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

    <section class="rbo-intro abroad-intro py-16 lg:py-24 border-b border-border-subtle" aria-labelledby="rbo-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-intro__grid">
          <div class="abroad-intro__content">
            <span class="theme-eyebrow">Beneficial Ownership Register</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="rbo-intro-title">Register your company’s beneficial owners.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">All Limited companies have to be registered with the Registry of Beneficial Ownership which was launched in 2019. If you have an Irish limited company, you are required to file information detailing the beneficial owners of your company.</p>
            <div class="rbo-intro__price abroad-intro__price">
              <span>€150.00 <small>+ VAT</small></span>
              <a class="theme-button theme-button-primary" href="#rbo-registration-form">
                Register now <span class="material-symbols-outlined" aria-hidden="true">arrow_downward</span>
              </a>
            </div>
          </div>
          <div class="abroad-intro__visual">
            <?php
            $assetImageName = 'beneficial-ownership-register-hero.jpg';
            $assetImageAlt = 'Beneficial Ownership Register service';
            $assetImageWidth = 1200;
            $assetImageHeight = 880;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
            <div class="abroad-intro__visual-note">
              <span class="material-symbols-outlined" aria-hidden="true">account_tree</span>
              <span>Beneficial ownership filing support</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="rbo-service abroad-support py-20 lg:py-28 bg-white border-b border-border-subtle" aria-labelledby="rbo-service-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-support__grid service-content-only">
          <div class="rbo-service__content abroad-support__content">
            <span class="theme-eyebrow">RBO registration</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="rbo-service-title">We can register your company correctly and on time.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">We can register your company correctly and on time at the cost of €150 plus VAT (companies who do not file on time will be in breach of the Companies Acts).</p>
            <p class="text-on-surface-variant font-body-md text-body-md">Please complete the form below and we will make the filings for you, or request the order form if you would prefer to complete it offline.</p>
            <a class="rbo-service__phone" href="tel:+35345254212">
              <span class="material-symbols-outlined" aria-hidden="true">call</span>
              +353 (045)254212
            </a>
            <a class="rbo-service__email" href="mailto:info@companiesformation.ie?subject=Beneficial%20Ownership%20Register%20order%20form">
              <span class="material-symbols-outlined" aria-hidden="true">mail</span>
              Request the offline order form
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="rbo-form-section py-20 lg:py-28 bg-surface-subtle border-b border-border-subtle" id="rbo-registration-form" aria-labelledby="rbo-form-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="rbo-form__intro">
          <span class="theme-eyebrow">Beneficial ownership details</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="rbo-form-title">RBO Registration Form</h2>
          <p class="text-on-surface-variant font-body-lg text-body-lg">Enter your contact and company details, followed by the information for each shareholder.</p>
        </div>
        <div class="rbo-form__notice" role="note">
          <span class="material-symbols-outlined" aria-hidden="true">lock</span>
          <p>This form is for preview only and does not submit or store information. PPS numbers are sensitive personal data. Secure submission will be enabled once the form backend is configured.</p>
        </div>

        <form class="rbo-form" id="rbo-form" method="post" autocomplete="off" novalidate>
          <fieldset class="rbo-form__group">
            <legend><span class="material-symbols-outlined" aria-hidden="true">person</span>Your details</legend>
            <div class="rbo-form__fields rbo-form__fields--two">
              <div class="rbo-form__field">
                <label for="rbo-your-name">Your Name</label>
                <input id="rbo-your-name" type="text" autocomplete="name">
              </div>
              <div class="rbo-form__field">
                <label for="rbo-your-email">Your Email</label>
                <input id="rbo-your-email" type="email" autocomplete="email">
              </div>
              <div class="rbo-form__field">
                <label for="rbo-phone">Phone Number</label>
                <input id="rbo-phone" type="tel" autocomplete="tel">
              </div>
              <div class="rbo-form__field">
                <label for="rbo-company-name">Company Name</label>
                <input id="rbo-company-name" type="text" autocomplete="organization">
              </div>
            </div>
          </fieldset>

          <div class="rbo-form__shareholders">
            <?php for ($shareholder = 1; $shareholder <= 2; $shareholder++): ?>
              <fieldset class="rbo-form__group rbo-shareholder">
                <legend><span class="material-symbols-outlined" aria-hidden="true">account_circle</span>Shareholder <?= $shareholder ?></legend>
                <div class="rbo-form__fields rbo-form__fields--two">
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-name">Name</label>
                    <input id="rbo-shareholder-<?= $shareholder ?>-name" type="text">
                  </div>
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-pps">Shareholder <?= $shareholder ?> PPS Number</label>
                    <input id="rbo-shareholder-<?= $shareholder ?>-pps" type="text" autocomplete="off" spellcheck="false">
                  </div>
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-address-1">Address 1</label>
                    <input id="rbo-shareholder-<?= $shareholder ?>-address-1" type="text" autocomplete="address-line1">
                  </div>
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-address-2">Address 2</label>
                    <input id="rbo-shareholder-<?= $shareholder ?>-address-2" type="text" autocomplete="address-line2">
                  </div>
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-percentage">Shareholder <?= $shareholder ?> Percentage of Share</label>
                    <div class="rbo-form__input-suffix">
                      <input id="rbo-shareholder-<?= $shareholder ?>-percentage" type="number" min="0" max="100" step="0.01" inputmode="decimal">
                      <span>%</span>
                    </div>
                  </div>
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-appointed">Date Appointed Shareholder</label>
                    <input id="rbo-shareholder-<?= $shareholder ?>-appointed" type="date">
                  </div>
                  <fieldset class="rbo-form__choice-group">
                    <legend>Nature of interest in the shares</legend>
                    <div class="rbo-form__choices">
                      <?php foreach (['Direct', 'Indirect', 'Both'] as $interest): ?>
                        <label><input type="radio" name="rbo-shareholder-<?= $shareholder ?>-interest" value="<?= strtolower($interest) ?>"> <span><?= $interest ?></span></label>
                      <?php endforeach; ?>
                    </div>
                  </fieldset>
                  <fieldset class="rbo-form__choice-group">
                    <legend>Ownership type</legend>
                    <div class="rbo-form__choices rbo-form__choices--checks">
                      <?php foreach (['Shares', 'Voting Rights', 'Ownership Interest', 'Control via Other Means', 'Senior Manager'] as $ownershipType): ?>
                        <label><input type="checkbox" name="rbo-shareholder-<?= $shareholder ?>-ownership[]" value="<?= htmlspecialchars(strtolower(str_replace(' ', '-', $ownershipType)), ENT_QUOTES, 'UTF-8') ?>"> <span><?= $ownershipType ?></span></label>
                      <?php endforeach; ?>
                    </div>
                  </fieldset>
                </div>
              </fieldset>
            <?php endfor; ?>
          </div>

          <fieldset class="rbo-form__group rbo-form__other-control">
            <legend><span class="material-symbols-outlined" aria-hidden="true">group_add</span>Any other person/company with control not detailed above</legend>
            <div class="rbo-form__field">
              <label for="rbo-other-control">Please Give Details</label>
              <textarea id="rbo-other-control" rows="5"></textarea>
            </div>
          </fieldset>

          <div class="rbo-form__submit">
            <button class="theme-button theme-button-primary" type="submit" disabled>
              Submit registration <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
            </button>
            <p>Secure submission is not configured yet. Please call us or email us to arrange your registration.</p>
          </div>
        </form>

        <p class="rbo-form__questions">Have any questions? Call us on <a href="tel:+35345254212">+353 (045)254212</a> or email us on <a href="mailto:info@companiesformation.ie">info@companiesformation.ie</a>.</p>
      </div>
    </section>

    <?php require dirname(__DIR__) . '/includes/cta.php'; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="../../assets/js/site.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/site.js') ?>" defer></script>
  <script src="../../assets/js/rbo-registration-form.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/rbo-registration-form.js') ?>" defer></script>
</body>
</html>
