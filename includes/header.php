<header class="site-header bg-surface-canvas/95 backdrop-blur-md border-b border-border-subtle shadow-sm sticky top-0 z-50 transition-colors duration-200">
<div class="site-header__topbar">
<div class="site-header__topbar-inner">
<span class="site-header__tagline"><img src="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>assets/images/ireland.png" alt="Irish flag" width="24" height="16"> Company Formation Services in Ireland</span>
<div class="site-header__contact">
<a href="mailto:info@companiesformation.ie"><span class="material-symbols-outlined" aria-hidden="true">mail</span>info@companiesformation.ie</a>
<a href="tel:+35345254212"><span class="material-symbols-outlined" aria-hidden="true">call</span>+353 (45) 254212</a>
</div>
</div>
</div>
<div class="site-header__inner max-w-7xl mx-auto px-6 lg:px-12 flex items-center justify-between h-20 w-full">
<!-- Brand Logo & Jurisdiction Anchor -->
<a class="site-brand flex items-center gap-3 group" href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>index.php">
<img alt="Companies Formation" class="h-12 w-auto object-contain" src="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>assets/images/logo.png"/>
</a>
<button class="site-nav__toggle" type="button" aria-label="Open navigation menu" aria-controls="site-nav" aria-expanded="false" data-mobile-nav-toggle>
  <span class="material-symbols-outlined" aria-hidden="true">menu</span>
</button>
<!-- Desktop Navigation Cluster -->
<nav class="site-nav flex items-center gap-8" id="site-nav" aria-label="Main navigation">
<a class="site-nav__link<?= ($activePage ?? 'home') === 'home' ? ' is-current' : '' ?>" href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>index.php"<?= ($activePage ?? 'home') === 'home' ? ' aria-current="page"' : '' ?>>Home</a>
<a class="site-nav__link<?= ($activePage ?? '') === 'about' ? ' is-current' : '' ?>" href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>about.php"<?= ($activePage ?? '') === 'about' ? ' aria-current="page"' : '' ?>>About</a>
<div class="site-nav__dropdown" data-services-dropdown>
<a class="site-nav__link<?= ($activePage ?? '') === 'services' ? ' is-current' : '' ?>" href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>index.php#services" aria-haspopup="true">Services <span class="material-symbols-outlined" aria-hidden="true">expand_more</span></a>
<button class="site-nav__submenu-toggle" type="button" aria-label="Show service links" aria-controls="services-menu" aria-expanded="false" data-services-toggle>
  <span class="material-symbols-outlined" aria-hidden="true">expand_more</span>
</button>
<div class="services-mega-menu" id="services-menu">
<div class="services-mega-menu__intro">
<span class="services-mega-menu__eyebrow">Your Irish business, supported</span>
<h2>From formation to ongoing compliance.</h2>
<p>Practical company services for every stage of doing business in Ireland.</p>
<a class="services-mega-menu__all" href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>index.php#services">Explore all services <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span></a>
</div>
<div class="services-mega-menu__categories">
<div class="services-mega-menu__category">
<h3>Formation</h3>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/irish-company-formation.php">Irish Company Formation</a>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/free-company-check.php">Free Company Check</a>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/irish-company-registration-from-abroad.php">Irish Company Registration From Abroad</a>
</div>
<div class="services-mega-menu__category">
<h3>Changes</h3>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/director-secretary-changes.php">Changes in Directors or Secretary Details</a>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/shareholder-changes.php">Changes in Shareholders</a>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/closing-up-a-company.php">Closing Up A Company</a>
</div>
<div class="services-mega-menu__category">
<h3>Compliance</h3>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/beneficial-ownership-register.php">Beneficial Ownership Register</a>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/annual-return.php">Annual Return</a>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/audit-exemption-court-application.php">Audit Exemption Court Application</a>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/tax-vat-registration.php">Tax/VAT Registration</a>
</div>
<div class="services-mega-menu__category">
<h3>Secretarial</h3>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/company-secretarial.php">Company Secretarial</a>
<a href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>services/irish-registered-office.php">Irish Registered Office</a>
</div>
</div>
</div>
</div>
<a class="site-nav__link<?= ($activePage ?? '') === 'packages' ? ' is-current' : '' ?>" href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>packages.php"<?= ($activePage ?? '') === 'packages' ? ' aria-current="page"' : '' ?>>Packages</a>
<a class="site-nav__link<?= ($activePage ?? '') === 'faq' ? ' is-current' : '' ?>" href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>faq.php"<?= ($activePage ?? '') === 'faq' ? ' aria-current="page"' : '' ?>>FAQ</a>
<a class="site-nav__link<?= ($activePage ?? '') === 'downloads' ? ' is-current' : '' ?>" href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>downloads.php"<?= ($activePage ?? '') === 'downloads' ? ' aria-current="page"' : '' ?>>Downloads</a>
<a class="site-nav__link<?= ($activePage ?? '') === 'contact' ? ' is-current' : '' ?>" href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>contact.php"<?= ($activePage ?? '') === 'contact' ? ' aria-current="page"' : '' ?>>Contact</a>
</nav>
<!-- Trailing Action Buttons -->
<div class="site-header__actions flex items-center gap-3">
<a class="theme-button theme-button-secondary hidden sm:inline-flex items-center justify-center px-4 py-2.5 font-label-md text-label-md" href="https://companiesformation.ie">
          Client Portal
        </a>
        <a class="theme-button theme-button-primary inline-flex items-center justify-center px-5 py-2.5 font-label-md text-label-md" href="<?= htmlspecialchars($siteRoot ?? '', ENT_QUOTES, 'UTF-8') ?>index.php#packages">
          Start Formation
        </a>
</div>
</div>
</header>