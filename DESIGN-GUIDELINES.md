# Companies Formation Design Guidelines

The landing page is the approved visual reference for future pages. New pages should reuse its components, visual language, and interaction patterns rather than introducing a second design system.

## Brand and visual direction

- Keep the brand focused on Irish company formation and services in Ireland.
- Use deep navy for strong brand surfaces, white/light neutral backgrounds for content, and cyan/blue accents for emphasis.
- Reuse the existing theme tokens in `assets/css/theme.css`: `--color-navy`, `--color-primary-action`, `--color-accent`, `--color-text`, `--color-text-muted`, `--color-canvas`, and `--color-surface-subtle`.
- Use Sora for headings and Inter for body copy, as configured by the existing theme.
- Keep content layouts spacious and aligned to the existing `max-w-7xl` page container. All top-level sections inside `main#main` share the `--section-space-y` vertical-padding token from `assets/css/theme.css` (currently 44–56 px responsively); adjust this one token to increase or decrease spacing consistently across every page.
- Avoid adding unsupported regulatory credentials, legal promises, or service claims. Confirm business-specific claims before publishing them.

## Page structure and navigation

- Use the shared PHP includes for the site header and footer on every page.
- Use `includes/breadcrumb.php` as the centered page-intro hero and breadcrumb on internal pages; keep the homepage slider as its hero.
- Keep the utility bar consistent: Irish company formation tagline, clickable email, and clickable telephone number.
- Reuse the current top-level navigation labels and paths: Home, About, Services, Packages, FAQ, Downloads, and Contact.
- Keep the Services mega menu hover/focus driven on desktop. On smaller screens, keep service navigation usable without relying on hover.
- Use meaningful page titles, a single descriptive `h1` per page, logical heading order, and semantic sections, navigation, lists, and buttons.
- Use the agreed PHP route for each page (for example, the root-level About page is `about.php`, the Irish Company Formation detail page is `services/irish-company-formation.php`, the Free Company Check detail page is `services/free-company-check.php`, Irish Company Registration From Abroad is `services/irish-company-registration-from-abroad.php`, director or secretary changes are `services/director-secretary-changes.php`, shareholder changes are `services/shareholder-changes.php`, company closure is `services/closing-up-a-company.php`, the Beneficial Ownership Register is `services/beneficial-ownership-register.php`, Annual Return is `services/annual-return.php`, Audit Exemption Court Application is `services/audit-exemption-court-application.php`, Company Secretarial is `services/company-secretarial.php`, Tax/VAT Registration is `services/tax-vat-registration.php`, and Irish Registered Office is `services/irish-registered-office.php`); do not copy old `.html` reference URLs into the new site.
- Keep Packages, FAQ, Downloads, and Contact as root-level routes: `packages.php`, `faq.php`, `downloads.php`, and `contact.php`. Keep service detail pages under `services/`.
- Keep legal pages at the root level. Use `terms-and-conditions.php` for the supplied conditions of sale, company transfer, and services; do not use that content as a Privacy Policy.
- Use `packages.php` for the package overview and keep its package names, prices, descriptions, inclusions, and visual treatment consistent with the homepage package section.
- Use `faq.php` for Irish company formation FAQs. Keep answers concise, jurisdiction-specific, cautious about changing or case-dependent requirements, and link to official CRO or Revenue guidance where relevant.
- Use `downloads.php` for downloadable forms. Link directly to the verified local PDF assets (not to a PHP page), give each download a clear title and action, and remind users to check that forms and filing requirements are current.
- Store all page and service-card photography directly in `assets/images/`; do not create image subfolders. Use unique, descriptive filenames for service-page imagery and `service1.png` through `service12.png` for the homepage service cards.
- The first five service detail pages reuse their homepage card image as their hero: service1.png through service5.png map in homepage card order to Irish Company Formation, Free Company Check, Irish Company Registration From Abroad, Changes in Directors or Secretary Details, and Changes in Shareholders.
- Each service detail page should use one image in its opening section only. Design subsequent sections with typography, icons, lists, and cards rather than asking for additional photos.
- When a referenced image is not present yet, render an in-page placeholder that states the exact filename and recommended pixel dimensions. Use web-ready JPG, PNG, or WebP files rather than camera RAW/DNG files. Homepage service-card source images should be at least 1200 × 800 px (3:2 aspect ratio) to remain sharp when displayed in the cards; standard service-page images should be 1200 × 880 px unless a placeholder specifies a different proportion. Replace low-resolution originals with a genuinely higher-resolution source; do not upscale the small file.
- Keep CRO API credentials in the server environment (`CRO_API_EMAIL` and `CRO_API_KEY`); never place credentials in page markup, JavaScript, or committed source.

## Typography and content

- Use short, descriptive headings and readable paragraphs with comfortable line height.
- Render headings in title case consistently across the homepage, service pages, and shared page components.
- Keep paragraphs at a manageable line length; pair a heading with a clear explanation and a single next action where appropriate.
- Use the existing `.theme-eyebrow` for small uppercase section labels. Add the Services section gradient accent line when a section label needs more hierarchy.
- Do not use decorative number badges or visible numbered markers (such as 1, 2, 3, 4) in page sections, cards, or lists. Use relevant Google Material Symbols icons, consistent with the existing icon font already loaded by the site. Keep numbers when they are factual content, such as prices, dates, phone numbers, legal amounts, and durations.
- Enquiry forms without a configured secure submission backend must be clearly marked as preview-only, must not imply that submissions are received, and must provide a working phone or email alternative.
- Write Ireland-specific copy and preserve official service names where they are supplied.
- Use descriptive link text rather than generic “click here” labels.

## Cards and buttons

- Reuse `.theme-card`, `.surface-card`, `.pricing-card`, and `.theme-button` styles before creating new variants.
- Use consistent rounded corners, subtle borders, generous internal padding, and soft resting shadows.
- Interactive cards use `.interactive-card`: hover/focus lifts the card, strengthens the shadow, and reveals a directional cyan/blue gradient border and soft glow. Direction varies by card position; preserve this variation rather than making every card identical.
- Keep card hover movement subtle and smooth. Pricing cards should not have a permanent Tailwind translate utility; their initial and hover positions must be controlled by the theme so the transition remains smooth.
- Give buttons a clear primary or secondary role, visible hover/focus states, and a comfortable target size.
- Avoid using price labels on services unless the price is confirmed and intentionally part of that service offer.

## Motion and interaction

- Reuse the existing IntersectionObserver reveal classes in `assets/js/site.js` for scroll-based entrances.
- Prefer opacity and small translate/scale transitions. Use the slider’s larger motion only for the hero.
- Use restrained hover and entrance treatments for cards and headings: short movement, clear contrast, and no motion that distracts from reading.
- Reveal content again as it enters the viewport where that behavior is already used.
- Respect `prefers-reduced-motion`; do not add motion that blocks reading, navigation, or input.
- Ensure hover interactions also have a keyboard-accessible focus equivalent where applicable.
- Keep carousels operable with buttons and preserve their responsive visible-card counts.

## Responsive behavior and accessibility

- Validate new layouts at desktop, tablet, and narrow mobile widths.
- Use responsive grids that collapse cleanly without horizontal page overflow.
- Do not rely on hover as the only way to reach navigation or interactive content on touch devices.
- Preserve visible keyboard focus, sufficient text/background contrast, meaningful image alt text, and accessible names for icon-only controls.
- Keep decorative icons hidden from assistive technology; icons that communicate meaning need accompanying text or an accessible label.

## Footer and contact information

- Reuse the dark navy gradient footer and keep the supplied Maynooth address, Irish phone number, and company email accurate.
- Keep service links grouped by their supplied categories and keep legal links separate from general navigation.
- Link email with `mailto:` and telephone with `tel:`. Open external map destinations safely with `rel="noopener noreferrer"`.
- Add new legal or informational page links only when their routes are agreed and implemented.

## Before publishing a new page

1. Reuse the shared header, footer, breadcrumb hero, typography, theme tokens, cards, and button styles.
2. Check headings, destinations, contact details, service copy, and legal/regulatory claims.
3. Review desktop and mobile layouts, keyboard navigation, and reduced-motion behavior.
4. Run PHP syntax checks and JavaScript syntax checks for any changed scripts.
