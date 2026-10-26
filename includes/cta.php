<?php
$contactCtaTitle = $contactCtaTitle ?? 'Let’s make your next move in Ireland.';
$contactCtaDescription = $contactCtaDescription ?? 'Talk to our team for clear, practical support with your company formation and ongoing company needs.';
$contactCtaHref = $contactCtaHref ?? (($siteRoot ?? '') . 'contact');
$contactCtaLabel = $contactCtaLabel ?? 'Get in touch';
?>
<section class="contact-cta" id="contact-cta" aria-labelledby="contact-cta-title">
  <div class="contact-cta__content">
    <span class="contact-cta__eyebrow">Here for your next step</span>
    <h2 id="contact-cta-title"><?= htmlspecialchars($contactCtaTitle, ENT_QUOTES, 'UTF-8') ?></h2>
    <p><?= htmlspecialchars($contactCtaDescription, ENT_QUOTES, 'UTF-8') ?></p>
  </div>
  <a class="theme-button theme-button-light" href="<?= htmlspecialchars($contactCtaHref, ENT_QUOTES, 'UTF-8') ?>">
    <?= htmlspecialchars($contactCtaLabel, ENT_QUOTES, 'UTF-8') ?>
    <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
  </a>
</section>
