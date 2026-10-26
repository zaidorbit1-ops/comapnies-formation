<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/form-security.php';
$annualReturnCsrfToken = formCsrfToken();

$siteRoot = '../../';
$activePage = 'services';
$pageTitle = 'Annual Return';
$pageDescription = 'We have a very efficient Annual Return Preparation Service to help you file your Annual Return in the Companies Registration Office.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => '../../index.php'],
  ['label' => 'Services', 'url' => '../../index.php#services'],
  ['label' => 'Annual Return'],
];
$contactCtaTitle = 'Keep your annual return on track';
$contactCtaDescription = 'Talk to our team about preparing and filing your company’s Annual Return on time.';
$contactCtaHref = 'tel:+35345254212';
$contactCtaLabel = 'Call us';
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Annual Return preparation and filing service for Irish companies.">
  <meta name="theme-color" content="#ffffff">
  <?php require dirname(__DIR__) . '/includes/favicon.php'; ?>
  <title>Annual Return | Companies Formation</title>
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

    <section class="annual-return-intro abroad-intro py-16 lg:py-24 border-b border-border-subtle" aria-labelledby="annual-return-intro-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="abroad-intro__grid">
          <div class="abroad-intro__content">
            <span class="theme-eyebrow">Annual Return preparation</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="annual-return-intro-title">File your Annual Return correctly and on time.</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">We have a very efficient Annual Return Preparation Service to help you file your Annual Return in the Companies Registration Office (CRO) on time. Our qualified experts will prepare and file your Annual Return for you correctly and on time, avoiding late filing fees and statutory audit. Our automatic Annual Return Reminder Service informs you of when the Annual Return needs to be filed and our experts complete it for you.</p>
            <div class="annual-return-intro__price abroad-intro__price">
              <span>€120.00</span>
              <a class="theme-button theme-button-primary" href="#annual-return-enquiry">
                Enquire online <span class="material-symbols-outlined" aria-hidden="true">arrow_downward</span>
              </a>
            </div>
          </div>
          <div class="abroad-intro__visual">
            <?php
            $assetImageName = 'service8.png';
            $assetImageAlt = 'Annual Return preparation service';
            $assetImageWidth = 1200;
            $assetImageHeight = 880;
            $assetImageClass = '';
            $assetImagePriority = true;
            require dirname(__DIR__) . '/includes/asset-image.php';
            ?>
            <div class="abroad-intro__visual-note">
              <span class="material-symbols-outlined" aria-hidden="true">event_available</span>
              <span>Annual Return preparation and filing</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="annual-return-how py-20 lg:py-24 bg-white border-b border-border-subtle" aria-labelledby="annual-return-how-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="annual-return-how__layout">
          <div class="annual-return-how__content">
            <span class="theme-eyebrow">Simple annual filing support</span>
            <span class="services-section__accent" aria-hidden="true"></span>
            <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="annual-return-how-title">How it works:</h2>
            <p class="text-on-surface-variant font-body-lg text-body-lg">Our team prepares your electronic Annual Return and guides you through signing and returning it.</p>
            <p class="annual-return-how__reminder"><span class="material-symbols-outlined" aria-hidden="true">schedule</span>Please note it is important to file this document in advance of the Annual Return Date to avoid Late Filing Fees and penalties imposed by the Companies Office.</p>
          </div>
          <ol class="annual-return-how__steps">
            <li>
              <span class="material-symbols-outlined" aria-hidden="true">edit_document</span>
              <p>Complete the simple online form below.</p>
            </li>
            <li>
              <span class="material-symbols-outlined" aria-hidden="true">mark_email_read</span>
              <p>We e-mail you back your electronic Annual Return.</p>
            </li>
            <li>
              <span class="material-symbols-outlined" aria-hidden="true">task_alt</span>
              <p>You print the document we e-mail you, sign where indicated, and send us back the scanned document followed by originals in post… and you are finished for another year!</p>
            </li>
          </ol>
        </div>
      </div>
    </section>

    <section class="annual-return-form-section rbo-form-section py-20 lg:py-28 bg-surface-subtle border-b border-border-subtle" id="annual-return-enquiry" aria-labelledby="annual-return-form-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="rbo-form__intro">
          <span class="theme-eyebrow">Annual Return enquiry</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="annual-return-form-title">Annual Returns Enquiry</h2>
          <p class="text-on-surface-variant font-body-lg text-body-lg">Share your contact and company details so we can help with the Annual Return.</p>
        </div>
        <?= formStatusMarkup() ?>

        <form class="rbo-form annual-return-form" id="annual-return-form" action="../submit-form.php" method="post" autocomplete="on" data-ajax-form novalidate>
          <input type="hidden" name="form_type" value="annual_return">
          <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($annualReturnCsrfToken, ENT_QUOTES, 'UTF-8') ?>">
          <div class="form-honeypot" aria-hidden="true">
            <label for="annual-return-website">Leave this field empty</label>
            <input id="annual-return-website" name="website" type="text" tabindex="-1" autocomplete="off">
          </div>
          <fieldset class="rbo-form__group">
            <legend><span class="material-symbols-outlined" aria-hidden="true">person</span>Your details</legend>
            <div class="rbo-form__fields rbo-form__fields--two">
              <div class="rbo-form__field">
                <label for="annual-return-name">Your Name</label>
                <input id="annual-return-name" name="name" type="text" autocomplete="name" maxlength="160" required>
              </div>
              <div class="rbo-form__field">
                <label for="annual-return-email">Your Email</label>
                <input id="annual-return-email" name="email" type="email" autocomplete="email" maxlength="254" required>
              </div>
              <div class="rbo-form__field">
                <label for="annual-return-phone">Phone Number</label>
                <input id="annual-return-phone" name="phone" type="tel" autocomplete="tel" maxlength="60">
              </div>
            </div>
          </fieldset>

          <fieldset class="rbo-form__group">
            <legend><span class="material-symbols-outlined" aria-hidden="true">domain</span>Company details</legend>
            <div class="rbo-form__fields rbo-form__fields--two">
              <div class="rbo-form__field">
                <label for="annual-return-company-name">Company Name</label>
                <input id="annual-return-company-name" name="company_name" type="text" autocomplete="organization" maxlength="200" required>
              </div>
              <div class="rbo-form__field">
                <label for="annual-return-company-email">Email Address</label>
                <input id="annual-return-company-email" name="company_email" type="email" autocomplete="email" maxlength="254" required>
              </div>
              <label class="annual-return-form__confirmation" for="annual-return-no-changes">
                <input id="annual-return-no-changes" name="no_changes" type="checkbox" value="1">
                <span>I hereby confirm there are no changes to the Company Details since incorporation:</span>
              </label>
              <p class="annual-return-form__changes-note">If there are changes to the company details since incorporation, please detail them here and a company representative will be in contact with a quotation for the additional documents to be filed.</p>
              <div class="rbo-form__field annual-return-form__changes">
                <label for="annual-return-company-changes">Company Changes if any</label>
                <textarea id="annual-return-company-changes" name="company_changes" rows="5" maxlength="6000"></textarea>
              </div>
            </div>
          </fieldset>

          <div class="rbo-form__submit">
            <button class="theme-button theme-button-primary" type="submit">
              Send enquiry <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
            </button>
          </div>
        </form>

        <p class="rbo-form__questions">Have any questions? Call us on <a href="tel:+35345254212">+353 (045)254212</a> or email us on <a href="mailto:info@companiesformation.ie">info@companiesformation.ie</a>.</p>
      </div>
    </section>

    <?php require dirname(__DIR__) . '/includes/cta.php'; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="../../assets/js/site.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/site.js') ?>" defer></script>
  <script src="../../assets/js/form-submission.js?v=<?= filemtime(dirname(__DIR__) . '/assets/js/form-submission.js') ?>" defer></script>
</body>
</html>
