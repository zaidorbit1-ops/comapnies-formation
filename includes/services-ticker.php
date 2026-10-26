<?php
$tickerServices = [
  ['irish-company-formation', 'Company Formation', 'domain_add'],
  ['free-company-check', 'Free Company Check', 'fact_check'],
  ['irish-company-registration-from-abroad', 'Formation From Abroad', 'public'],
  ['director-secretary-changes', 'Director & Secretary Changes', 'manage_accounts'],
  ['shareholder-changes', 'Shareholder Changes', 'swap_horiz'],
  ['closing-up-a-company', 'Company Closure', 'domain_disabled'],
  ['beneficial-ownership-register', 'Beneficial Ownership Register', 'account_tree'],
  ['annual-return', 'Annual Return', 'event_note'],
  ['audit-exemption-court-application', 'Audit Exemption Support', 'gavel'],
  ['tax-vat-registration', 'Tax/VAT Registration', 'receipt_long'],
  ['company-secretarial', 'Company Secretarial', 'folder_managed'],
  ['irish-registered-office', 'Irish Registered Office', 'location_on'],
];
$tickerServicePrefix = rtrim($siteRoot ?? '/', '/') . '/services/';
?>
<section class="services-ticker" aria-label="Explore our company services">
  <div class="services-ticker__inner">
    <div class="services-ticker__label">
      <span class="services-ticker__label-mark" aria-hidden="true">
        <span class="material-symbols-outlined">auto_awesome</span>
      </span>
      <span class="services-ticker__label-copy">
        <span>Companies Formation</span>
        <strong>Our services</strong>
      </span>
    </div>
    <div class="services-ticker__viewport">
      <ul class="services-ticker__track">
        <?php foreach ([false, true] as $isDuplicate): ?>
          <?php foreach ($tickerServices as [$slug, $label, $icon]): ?>
            <li<?= $isDuplicate ? ' aria-hidden="true"' : '' ?>>
              <?php if ($isDuplicate): ?>
                <span class="services-ticker__item">
              <?php else: ?>
                <a class="services-ticker__item" href="<?= htmlspecialchars($tickerServicePrefix . $slug, ENT_QUOTES, 'UTF-8') ?>">
              <?php endif; ?>
                <span class="services-ticker__icon material-symbols-outlined" aria-hidden="true"><?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?></span>
                <span class="services-ticker__item-copy">
                  <span class="services-ticker__item-kicker">COMPANY SUPPORT</span>
                  <span class="services-ticker__item-title"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></span>
                </span>
                <span class="services-ticker__spark" aria-hidden="true"></span>
              <?php if ($isDuplicate): ?>
                </span>
              <?php else: ?>
                </a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
