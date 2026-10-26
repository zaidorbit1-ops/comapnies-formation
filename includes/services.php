<?php
$serviceCategories = [
  'Formation' => [
    ['irish-company-formation', 'Irish Company Formation', 'Start your Irish limited company with guidance on the incorporation application, company details and documents required by the Companies Registration Office.', 'domain_add', 'service1.png'],
    ['free-company-check', 'Free Company Check', 'Check whether a proposed company name appears available before preparing your Irish incorporation application. Final approval remains with the Companies Registration Office.', 'fact_check', 'service2.png'],
    ['irish-company-registration-from-abroad', 'Irish Company Registration From Abroad', 'Form an Irish company while based overseas, with practical guidance on the incorporation process, required information and director residency considerations.', 'public', 'service3.png'],
  ],
  'Changes' => [
    ['director-secretary-changes', 'Changes in Directors or Secretary Details', 'Prepare the relevant company records and notifications when appointing, resigning or updating details for an Irish company director or secretary.', 'manage_accounts', 'service4.png'],
    ['shareholder-changes', 'Changes in Shareholders', 'Get support documenting share transfers and updating statutory registers and applicable company filings when ownership changes.', 'swap_horiz', 'service5.png'],
    ['closing-up-a-company', 'Closing Up A Company', 'Understand the steps and filings that may apply when closing an Irish company, including whether a voluntary strike-off may be suitable.', 'domain_disabled', 'service6.png'],
  ],
  'Compliance' => [
    ['beneficial-ownership-register', 'Beneficial Ownership Register', 'Get help identifying beneficial owners and preparing the information required for the Irish Register of Beneficial Ownership, subject to applicable rules.', 'account_tree', 'service7.png'],
    ['annual-return', 'Annual Return', 'Prepare for your company’s annual return filing with the CRO, including the relevant company information and filing deadline.', 'event_note', 'service8.png'],
    ['audit-exemption-court-application', 'Audit Exemption Court Application', 'Explore possible next steps if an Irish company has lost its audit exemption and needs advice about seeking court relief.', 'gavel', 'service9.png'],
    ['tax-vat-registration', 'Tax/VAT Registration', 'Get practical guidance on applying for relevant Irish tax registrations, including VAT where appropriate to the company’s activities.', 'receipt_long', 'service10.png'],
  ],
  'Secretarial' => [
    ['company-secretarial', 'Company Secretarial', 'Keep statutory registers, company records and routine governance filings organised throughout the life of your Irish company.', 'folder_managed', 'service11.png'],
    ['irish-registered-office', 'Irish Registered Office', 'Arrange an Irish registered office address service for official company correspondence, subject to service terms and eligibility.', 'location_on', 'service12.png'],
  ],
];
$serviceRoutes = [
  'irish-company-formation' => 'services/irish-company-formation',
  'free-company-check' => 'services/free-company-check',
  'irish-company-registration-from-abroad' => 'services/irish-company-registration-from-abroad',
  'director-secretary-changes' => 'services/director-secretary-changes',
  'shareholder-changes' => 'services/shareholder-changes',
  'closing-up-a-company' => 'services/closing-up-a-company',
  'beneficial-ownership-register' => 'services/beneficial-ownership-register',
  'annual-return' => 'services/annual-return',
  'audit-exemption-court-application' => 'services/audit-exemption-court-application',
  'tax-vat-registration' => 'services/tax-vat-registration',
  'company-secretarial' => 'services/company-secretarial',
  'irish-registered-office' => 'services/irish-registered-office',
];
?>
<section class="py-20 lg:py-28 bg-white border-b border-border-subtle" id="services">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">
    <div class="max-w-3xl mb-16">
      <span class="theme-eyebrow text-primary-container font-label-md text-label-md uppercase tracking-wider font-semibold">Specialist Solutions</span>
      <span class="services-section__accent" aria-hidden="true"></span>
      <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight mt-1 mb-3">Our Services</h2>
      <p class="text-on-surface-variant font-body-lg text-body-lg">
        Formation, company changes, compliance and secretarial support for businesses operating in Ireland.
      </p>
    </div>
    <?php foreach ($serviceCategories as $category => $services): ?>
      <section class="service-category" aria-labelledby="service-category-<?= strtolower($category) ?>">
        <div class="service-category__heading">
          <span class="service-category__marker" aria-hidden="true"></span>
          <h3 id="service-category-<?= strtolower($category) ?>"><?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?></h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach ($services as [$id, $title, $description, $icon, $imageName]): ?>
            <article class="theme-card surface-card service-card p-7 rounded-xl flex flex-col justify-between" id="service-<?= htmlspecialchars($id, ENT_QUOTES, 'UTF-8') ?>">
              <div>
                <div class="service-card__image">
                  <?php
                  $assetImageName = $imageName;
                  $assetImageAlt = $title;
                  $assetImageWidth = 1200;
                  $assetImageHeight = 800;
                  $assetImageClass = 'service-card__image-content';
                  $assetImagePriority = false;
                  require __DIR__ . '/asset-image.php';
                  ?>
                </div>
                <div class="service-card__icon w-12 h-12 rounded-lg bg-surface-subtle text-primary-container flex items-center justify-center mb-5">
                  <span class="material-symbols-outlined text-[26px]" aria-hidden="true"><?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?></span>
                </div>
                <h4 class="text-surface-contrast font-title-lg text-title-lg font-bold mb-2"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h4>
                <p class="text-on-surface-variant font-body-md text-body-md leading-relaxed"><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
              </div>
              <div class="mt-6 pt-5 border-t border-border-subtle">
                <a class="theme-link text-primary-container hover:text-surface-contrast font-label-md text-label-md font-semibold inline-flex items-center" href="<?= htmlspecialchars($serviceRoutes[$id] ?? '#contact-cta', ENT_QUOTES, 'UTF-8') ?>">
                  <?= isset($serviceRoutes[$id]) ? 'Explore this service' : 'Enquire about this service' ?> <span class="material-symbols-outlined text-[16px] ml-1" aria-hidden="true">arrow_forward</span>
                </a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endforeach; ?>
  </div>
</section>
