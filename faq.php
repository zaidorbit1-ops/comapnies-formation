<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/site-root.php';
$siteRoot = siteRootUrl();
$activePage = 'faq';
$pageTitle = 'Frequently Asked Questions';
$pageDescription = 'Answers to common questions about forming, registering and running a company in Ireland.';
$breadcrumbs = [
  ['label' => 'Home', 'url' => './'],
  ['label' => 'Frequently Asked Questions'],
];
$faqGroupIcons = [
  'Starting a company' => 'domain_add',
  'Tax and business requirements' => 'account_balance',
  'Company records and ongoing filings' => 'fact_check',
];
$faqGroups = [
  'Starting a company' => [
    [
      'question' => 'How long does a company formation take?',
      'answer' => 'The time depends on the CRO’s current processing workload and whether the application is complete and accepted first time. We can prepare and submit the application electronically, but CRO processing times can change, so no specific incorporation time can be guaranteed. Delays can arise if the proposed name or documents need clarification.',
    ],
    [
      'question' => 'Does the trading address need to be the same as the registered address?',
      'answer' => 'No. A company’s registered office must be a physical address in Ireland where official notices can be delivered. Its trading or business address can be different. The registered office is part of the company’s public record, so consider this before using a home address. See our <a href="services/irish-registered-office">Irish Registered Office service</a> for an alternative.',
    ],
    [
      'question' => 'What is the difference between a limited company and a trading name?',
      'answer' => 'A limited company is a separate legal entity registered with the CRO. A trading or business name is a name used by a person or existing entity; registering the name does not create a separate company or, by itself, provide limited liability. The right structure depends on ownership, risk and tax circumstances.',
    ],
    [
      'question' => 'How many directors are required?',
      'answer' => 'An Irish LTD may have one director, but it must have a separate company secretary when it has only one director. Other company types generally require at least two directors. At least one director must usually be resident in an EEA state, unless an applicable alternative, such as a qualifying bond or a real and continuous link certificate, is in place. Check the requirements for your company type before applying.',
    ],
    [
      'question' => 'What is a company limited by guarantee?',
      'answer' => 'A company limited by guarantee (CLG) has members rather than shareholders and does not have share capital. Each member’s liability is generally limited to the guarantee amount they agree to contribute if the company is wound up. CLGs are often used for clubs, associations and other organisations, but a CLG is not automatically a registered charity.',
    ],
    [
      'question' => 'What qualifies as a non-EEA resident director?',
      'answer' => 'For Irish company-law purposes, the relevant test is whether at least one director is resident in an EEA member state. A director who is not resident in an EEA state does not meet that test. A company without an EEA-resident director may be able to use a qualifying Section 137 bond or apply for a certificate based on a real and continuous link with economic activity in Ireland. Eligibility and evidence requirements should be checked for the specific company.',
    ],
  ],
  'Tax and business requirements' => [
    [
      'question' => 'How do I get a VAT number?',
      'answer' => 'You apply to Revenue, generally through ROS, using the registration process and the form appropriate to your business. A limited company normally uses the TR2 registration form. VAT registration depends on taxable activities, turnover thresholds and cross-border circumstances; it is not automatically required for every new company. Revenue currently lists principal thresholds of €42,500 for services and €85,000 for goods, with exceptions and special rules. Review <a href="https://www.revenue.ie/en/vat/vat-registration/who-should-register-for-vat/index.aspx" target="_blank" rel="noopener noreferrer">Revenue’s VAT registration guidance</a> before applying.',
    ],
    [
      'question' => 'What will the bank need to open a company account?',
      'answer' => 'Requirements vary between banks. Be prepared to provide the company’s incorporation documents and CRO number, details and identification for directors and beneficial owners, proof of address, tax information, and an explanation of the business and expected account activity. The bank may ask for additional documents or an in-person or video verification; incorporation does not guarantee that an account will be opened.',
    ],
  ],
  'Company records and ongoing filings' => [
    [
      'question' => 'What needs to be on my headed notepaper?',
      'answer' => 'Company business letters and order forms must show prescribed company details. These normally include the company’s full name, the place of registration, registered number, registered office address and legal form. Additional details can apply depending on the company and the information it chooses to display. Check current CRO guidance for your company type before printing stationery.',
    ],
    [
      'question' => 'What needs to be on my website?',
      'answer' => 'A company website should make the company’s legal identity and statutory details clear, including its full company name, place of registration, registered number, registered office and legal form. Where share capital details are shown, further disclosure rules may apply. Check the current CRO requirements for company websites and electronic business communications.',
    ],
    [
      'question' => 'Can I change directors, secretary or shareholders?',
      'answer' => 'Yes, subject to the company’s constitution and applicable company law. Director and secretary changes must be recorded in the company’s statutory records and the relevant CRO notice filed within the required time. A share transfer also needs to be properly documented and the company’s register of members updated; stamp duty or other requirements may apply depending on the transfer. We offer support with <a href="services/director-secretary-changes">director or secretary changes</a> and <a href="services/shareholder-changes">shareholder changes</a>.',
    ],
    [
      'question' => 'What needs to be filed for my company once it is formed?',
      'answer' => 'Most companies need to keep statutory registers and accounting records, file an annual return with the CRO and prepare financial statements. Depending on the company’s activity and circumstances, Revenue filings may also include Corporation Tax, VAT and employer PAYE returns. Companies must also meet applicable beneficial ownership registration requirements. Filing dates and obligations vary, so keep a calendar based on your company’s own CRO and Revenue records.',
    ],
    [
      'question' => 'Can I change my year-end filing date?',
      'answer' => 'A company may be able to change its Annual Return Date (ARD) by filing the appropriate annual return with the CRO, subject to statutory timing rules and limits on how often a change can be made. The ARD is separate from the company’s accounting year-end, and changing one does not automatically change the other. Check the CRO rules and the effect on your filing deadline before making a change.',
    ],
    [
      'question' => 'Can I close my company down?',
      'answer' => 'Possibly. A solvent company that meets the statutory conditions may be eligible for voluntary strike-off, which requires the company to stop trading, settle its affairs and meet CRO and Revenue requirements. A company with outstanding debts or other complications may need a different process, such as liquidation. Start by checking the company’s filings, assets, liabilities and tax position. We can explain our <a href="services/closing-up-a-company">company closure service</a> and the steps involved.',
    ],
  ],
];
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Answers to common questions about Irish company formation, directors, VAT, company records and annual filing requirements.">
  <meta name="theme-color" content="#ffffff">
  <?php require __DIR__ . '/includes/favicon.php'; ?>
  <title>Frequently Asked Questions | Companies Formation</title>
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

    <section class="faq-page py-20 lg:py-28 border-b border-border-subtle" aria-labelledby="faq-page-title">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="faq-page__intro">
          <span class="theme-eyebrow">Helpful answers</span>
          <span class="services-section__accent" aria-hidden="true"></span>
          <h2 class="text-surface-contrast font-headline-lg text-headline-lg font-bold tracking-tight" id="faq-page-title">Frequently Asked Questions</h2>
          <p class="text-on-surface-variant font-body-lg text-body-lg">Have a question about company formation, incorporation or registration in Ireland? Browse the topics below for a starting point.</p>
        </div>

        <div class="faq-page__groups">
          <?php foreach ($faqGroups as $groupTitle => $questions): ?>
            <section class="faq-page__group" aria-labelledby="faq-group-<?= htmlspecialchars(strtolower(str_replace(' ', '-', $groupTitle)), ENT_QUOTES, 'UTF-8') ?>">
              <h3 id="faq-group-<?= htmlspecialchars(strtolower(str_replace(' ', '-', $groupTitle)), ENT_QUOTES, 'UTF-8') ?>">
                <span class="faq-page__group-icon material-symbols-outlined" aria-hidden="true"><?= htmlspecialchars($faqGroupIcons[$groupTitle], ENT_QUOTES, 'UTF-8') ?></span>
                <span><?= htmlspecialchars($groupTitle, ENT_QUOTES, 'UTF-8') ?></span>
              </h3>
              <div class="faq-page__list">
                <?php foreach ($questions as $index => $faq): ?>
                  <details class="faq-page__item"<?= $groupTitle === 'Starting a company' && $index === 0 ? ' open' : '' ?>>
                    <summary>
                      <span><?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?></span>
                      <span class="material-symbols-outlined" aria-hidden="true">expand_more</span>
                    </summary>
                    <div class="faq-page__answer">
                      <p><?= $faq['answer'] ?></p>
                    </div>
                  </details>
                <?php endforeach; ?>
              </div>
            </section>
          <?php endforeach; ?>
        </div>

        <aside class="faq-page__contact" aria-label="Contact for more information">
          <span class="material-symbols-outlined" aria-hidden="true">support_agent</span>
          <div>
            <h3>Need help with your company?</h3>
            <p>Talk to our team about your circumstances and the next steps.</p>
          </div>
          <a class="theme-button theme-button-primary" href="tel:+35345254212">Call +353 (045)254212</a>
        </aside>
        <p class="faq-page__disclaimer">This information is general guidance, not legal or tax advice. Requirements can depend on your company type and circumstances. Please confirm current rules with the CRO or Revenue, or obtain advice for your specific situation.</p>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/includes/footer.php'; ?>
  <script src="<?= htmlspecialchars($siteRoot, ENT_QUOTES, 'UTF-8') ?>assets/js/site.js?v=<?= filemtime(__DIR__ . '/assets/js/site.js') ?>" defer></script>
</body>
</html>
