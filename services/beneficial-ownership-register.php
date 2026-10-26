<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/form-security.php';
$rboCsrfToken = formCsrfToken();

require_once (dirname(__DIR__) . '/includes/site-root.php');
$siteRoot = siteRootUrl();
$activePage = 'services';
$pageTitle = 'Beneficial Ownership Register';
$pageDescription = 'All Limited companies have to be registered with the Registry of Beneficial Ownership which was launched in 2019.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => $siteRoot],
  ['label' => 'Services', 'url' => $siteRoot . '#services'],
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
  <?php require dirname(__DIR__) . '/includes/favicon.php'; ?>
  <title>Beneficial Ownership Register | Companies Formation</title>
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
            $assetImageName = 'service7.png';
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
          <p class="text-on-surface-variant font-body-lg text-body-lg">Complete your registration in a few simple steps.</p>
        </div>
        <?= formStatusMarkup() ?>

        <button class="theme-button theme-button-primary rbo-form__open" id="rbo-open-form" type="button" aria-haspopup="dialog" aria-controls="rbo-form-dialog">
          Fill out a form <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
        </button>

        <dialog class="rbo-wizard" id="rbo-form-dialog" aria-labelledby="rbo-dialog-title">
          <div class="rbo-wizard__header">
            <div>
              <span class="theme-eyebrow">RBO registration</span>
              <h3 id="rbo-dialog-title">Tell us about your company</h3>
            </div>
            <button class="rbo-wizard__close" type="button" aria-label="Close form" data-rbo-close>
              <span class="material-symbols-outlined" aria-hidden="true">close</span>
            </button>
          </div>
          <div class="rbo-wizard__progress" aria-live="polite">
            <div class="rbo-wizard__progress-copy"><span data-rbo-step-label>Your details</span><span data-rbo-step-count>Step 1 of 4</span></div>
            <div class="rbo-wizard__progress-track"><span data-rbo-progress-bar></span></div>
          </div>

        <form class="rbo-form" id="rbo-form" action="../submit-form" method="post" autocomplete="on" data-ajax-form data-rbo-wizard novalidate>
          <input type="hidden" name="form_type" value="rbo">
          <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($rboCsrfToken, ENT_QUOTES, 'UTF-8') ?>">
          <div class="form-honeypot" aria-hidden="true">
            <label for="rbo-website">Leave this field empty</label>
            <input id="rbo-website" name="website" type="text" tabindex="-1" autocomplete="off">
          </div>
          <div class="rbo-wizard__step" data-rbo-step="0" data-step-title="Your details">
          <fieldset class="rbo-form__group">
            <legend><span class="material-symbols-outlined" aria-hidden="true">person</span>Your details</legend>
            <div class="rbo-form__fields rbo-form__fields--two">
              <div class="rbo-form__field">
                <label for="rbo-your-name">Your Name</label>
                <input id="rbo-your-name" name="name" type="text" autocomplete="name" maxlength="160" required>
              </div>
              <div class="rbo-form__field">
                <label for="rbo-your-email">Your Email</label>
                <input id="rbo-your-email" name="email" type="email" autocomplete="email" maxlength="254" required>
              </div>
              <div class="rbo-form__field">
                <label for="rbo-phone">Phone Number</label>
                <input id="rbo-phone" name="phone" type="tel" autocomplete="tel" maxlength="60" required>
              </div>
              <div class="rbo-form__field">
                <label for="rbo-company-name">Company Name</label>
                <input id="rbo-company-name" name="company_name" type="text" autocomplete="organization" maxlength="200" required>
              </div>
            </div>
          </fieldset>

          <div class="rbo-wizard__actions rbo-wizard__actions--end">
            <button class="theme-button theme-button-primary" type="button" data-rbo-next>Next <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></button>
          </div>
          </div>

          <?php for ($shareholder = 1; $shareholder <= 2; $shareholder++): ?>
            <div class="rbo-wizard__step" data-rbo-step="<?= $shareholder ?>" data-step-title="Shareholder <?= $shareholder ?>">
              <fieldset class="rbo-form__group rbo-shareholder" data-shareholder="<?= $shareholder ?>">
                <legend><span class="material-symbols-outlined" aria-hidden="true">account_circle</span>Shareholder <?= $shareholder ?></legend>
                <div class="rbo-form__fields rbo-form__fields--two">
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-name">Name</label>
                    <input id="rbo-shareholder-<?= $shareholder ?>-name" name="shareholder_<?= $shareholder ?>_name" type="text" maxlength="160"<?= $shareholder === 1 ? ' required' : '' ?>>
                  </div>
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-pps">Shareholder <?= $shareholder ?> PPS Number</label>
                    <input id="rbo-shareholder-<?= $shareholder ?>-pps" name="shareholder_<?= $shareholder ?>_pps" type="text" autocomplete="off" spellcheck="false" maxlength="40"<?= $shareholder === 1 ? ' required' : '' ?>>
                  </div>
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-address-1">Address 1</label>
                    <input id="rbo-shareholder-<?= $shareholder ?>-address-1" name="shareholder_<?= $shareholder ?>_address_1" type="text" autocomplete="address-line1" maxlength="200"<?= $shareholder === 1 ? ' required' : '' ?>>
                  </div>
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-address-2">Address 2</label>
                    <input id="rbo-shareholder-<?= $shareholder ?>-address-2" name="shareholder_<?= $shareholder ?>_address_2" type="text" autocomplete="address-line2" maxlength="200">
                  </div>
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-percentage">Shareholder <?= $shareholder ?> Percentage of Share</label>
                    <div class="rbo-form__input-suffix">
                      <input id="rbo-shareholder-<?= $shareholder ?>-percentage" name="shareholder_<?= $shareholder ?>_percentage" type="number" min="0" max="100" step="0.01" inputmode="decimal"<?= $shareholder === 1 ? ' required' : '' ?>>
                      <span>%</span>
                    </div>
                  </div>
                  <div class="rbo-form__field">
                    <label for="rbo-shareholder-<?= $shareholder ?>-appointed">Date Appointed Shareholder</label>
                    <input id="rbo-shareholder-<?= $shareholder ?>-appointed" name="shareholder_<?= $shareholder ?>_appointed" type="date"<?= $shareholder === 1 ? ' required' : '' ?>>
                  </div>
                  <fieldset class="rbo-form__choice-group">
                    <legend>Nature of interest in the shares</legend>
                    <div class="rbo-form__choices">
                      <?php foreach (['Direct', 'Indirect', 'Both'] as $interest): ?>
                        <label><input type="radio" name="shareholder_<?= $shareholder ?>_interest" value="<?= strtolower($interest) ?>"<?= $shareholder === 1 ? ' required' : '' ?>> <span><?= $interest ?></span></label>
                      <?php endforeach; ?>
                    </div>
                  </fieldset>
                  <fieldset class="rbo-form__choice-group">
                    <legend>Ownership type</legend>
                    <div class="rbo-form__choices rbo-form__choices--checks">
                      <?php foreach (['Shares', 'Voting Rights', 'Ownership Interest', 'Control via Other Means', 'Senior Manager'] as $ownershipType): ?>
                        <label><input type="checkbox" name="shareholder_<?= $shareholder ?>_ownership[]" value="<?= htmlspecialchars(strtolower(str_replace(' ', '-', $ownershipType)), ENT_QUOTES, 'UTF-8') ?>"> <span><?= $ownershipType ?></span></label>
                      <?php endforeach; ?>
                    </div>
                  </fieldset>
                </div>
              </fieldset>
              <div class="rbo-wizard__actions">
                <button class="theme-button theme-button-secondary" type="button" data-rbo-back><span class="material-symbols-outlined" aria-hidden="true">arrow_back</span> Back</button>
                <button class="theme-button theme-button-primary" type="button" data-rbo-next>Next <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></button>
              </div>
            </div>
          <?php endfor; ?>

          <div class="rbo-wizard__step" data-rbo-step="3" data-step-title="Other control">
          <fieldset class="rbo-form__group rbo-form__other-control">
            <legend><span class="material-symbols-outlined" aria-hidden="true">group_add</span>Any other person/company with control not detailed above</legend>
            <div class="rbo-form__field">
              <label for="rbo-other-control">Please Give Details</label>
              <textarea id="rbo-other-control" name="other_control" rows="5" maxlength="6000"></textarea>
            </div>
          </fieldset>

          <label class="rbo-form__privacy-consent" for="rbo-terms-consent">
            <input id="rbo-terms-consent" name="terms_consent" type="checkbox" value="1" required>
            <span>By submitting, you confirm that you have read and accepted our <a href="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>terms-and-conditions" target="_blank" rel="noopener">Terms and Conditions</a> and <a href="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>privacy-policy" target="_blank" rel="noopener">Privacy Policy</a>.</span>
          </label>

          <div class="rbo-wizard__actions">
            <button class="theme-button theme-button-secondary" type="button" data-rbo-back><span class="material-symbols-outlined" aria-hidden="true">arrow_back</span> Back</button>
            <button class="theme-button theme-button-primary" type="submit">
              Submit registration <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
            </button>
          </div>
          </div>
        </form>
        </dialog>

        <p class="rbo-form__questions">Have any questions? Call us on <a href="tel:+35345254212">+353 (045)254212</a> or email us on <a href="mailto:info@companiesformation.ie">info@companiesformation.ie</a>.</p>
      </div>
    </section>

    <?php require dirname(__DIR__) . '/includes/cta.php'; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/site.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/site.js') ?>" defer></script>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/form-submission.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/form-submission.js') ?>" defer></script>
</body>
</html>
