---
name: Sovereign Corporate
colors:
  surface: '#f8f9ff'
  surface-dim: '#cedbef'
  surface-bright: '#f8f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#eef4ff'
  surface-container: '#e4efff'
  surface-container-high: '#dce9fd'
  surface-container-highest: '#d6e4f8'
  on-surface: '#0f1c2b'
  on-surface-variant: '#424753'
  inverse-surface: '#253141'
  inverse-on-surface: '#e9f1ff'
  outline: '#727784'
  outline-variant: '#c2c6d5'
  surface-tint: '#005cba'
  primary: '#004c9c'
  on-primary: '#ffffff'
  primary-container: '#0864c7'
  on-primary-container: '#dae5ff'
  inverse-primary: '#abc7ff'
  secondary: '#465f8a'
  on-secondary: '#ffffff'
  secondary-container: '#b4cdfe'
  on-secondary-container: '#3e5681'
  tertiary: '#004c9c'
  on-tertiary: '#ffffff'
  tertiary-container: '#0064c8'
  on-tertiary-container: '#dae5ff'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d7e3ff'
  primary-fixed-dim: '#abc7ff'
  on-primary-fixed: '#001b3f'
  on-primary-fixed-variant: '#00458e'
  secondary-fixed: '#d7e3ff'
  secondary-fixed-dim: '#aec7f8'
  on-secondary-fixed: '#001b3e'
  on-secondary-fixed-variant: '#2e4770'
  tertiary-fixed: '#d7e3ff'
  tertiary-fixed-dim: '#aac7ff'
  on-tertiary-fixed: '#001b3e'
  on-tertiary-fixed-variant: '#00458e'
  background: '#f8f9ff'
  on-background: '#0f1c2b'
  surface-variant: '#d6e4f8'
  surface-canvas: '#FFFFFF'
  surface-subtle: '#F4F7FB'
  surface-contrast: '#002048'
  border-subtle: '#E2E8F0'
  border-strong: '#CBD5E1'
  status-success: '#0E8345'
  status-alert: '#D9381E'
  accent-cyan: '#23D8CD'
typography:
  headline-xl:
    fontFamily: Sora
    fontSize: 56px
    fontWeight: '800'
    lineHeight: 64px
    letterSpacing: -0.03em
  headline-xl-mobile:
    fontFamily: Sora
    fontSize: 36px
    fontWeight: '800'
    lineHeight: 44px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Sora
    fontSize: 40px
    fontWeight: '700'
    lineHeight: 48px
    letterSpacing: -0.025em
  headline-lg-mobile:
    fontFamily: Sora
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 36px
    letterSpacing: -0.02em
  headline-md:
    fontFamily: Sora
    fontSize: 28px
    fontWeight: '600'
    lineHeight: 36px
    letterSpacing: -0.015em
  headline-sm:
    fontFamily: Sora
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
    letterSpacing: -0.01em
  title-lg:
    fontFamily: Sora
    fontSize: 18px
    fontWeight: '600'
    lineHeight: 24px
    letterSpacing: -0.01em
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 15px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Inter
    fontSize: 13px
    fontWeight: '400'
    lineHeight: 20px
  label-lg:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.01em
  label-md:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.02em
  label-sm:
    fontFamily: Inter
    fontSize: 11px
    fontWeight: '600'
    lineHeight: 14px
    letterSpacing: 0.04em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  gutter: 1.5rem
  gutter-mobile: 1rem
  margin: 3rem
  margin-mobile: 1.25rem
  space-xs: 0.5rem
  space-sm: 0.75rem
  space-md: 1rem
  space-lg: 1.5rem
  space-xl: 2.5rem
---

## Brand & Style

This design system targets international founders, legal counsel, and fintech enterprises establishing statutory operations within the Republic of Ireland. It projects institutional authority, cross-border corporate certainty, and seamless regulatory execution. 

The aesthetic synthesizes high-end corporate fintech precision with editorial legal clarity:
- **Tone:** Sovereign, decisive, institutional, and frictionless.
- **Visual Stance:** Restrained minimalism paired with deep structural contrast. The design rejects decorative gradients, cartoonish illustrations, and generic SaaS templates in favor of structured financial grids, fine hair-line rules, purposeful data density, and confident typography.
- **Logo Integration:** The wordmark logo anchors the top-left navigation and primary trust seals, relying on generous negative space and rigid baseline alignment to assert established market leadership.

## Colors

The palette establishes an immediate hierarchy of state-level legitimacy and technical agility:
- **Primary Blue (`#0864C7`):** Directs the user's eye exclusively toward decisive action—statutory submission triggers, progress bars, active multi-step indicators, and primary checkout buttons.
- **Navy Blue (`#002048`):** The structural core. Dictates executive hero banners, high-contrast typography, statutory validation badges, footers, and institutional dark panels.
- **Surface Canvas (`#FFFFFF`) & Subtle Surface (`#F4F7FB`):** Create clean, rhythmic alternating bands across corporate filings, director verification tables, and pricing modules without jarring breaks.
- **Border Tokens (`#E2E8F0`, `#CBD5E1`):** Ensure architectural razor-sharpness across dense statutory form fields and corporate tier tables.
- **Cyan Accent (`#23D8CD`):** Reserved strictly for micro-status indicators such as "Active Company Registration", "CRO Verified", and real-time API sync states.

## Typography

The typographic system creates an authoritative balance between the geometric modernism of **Sora** and the functional legibility of **Inter**:
- **Display & Headings (Sora):** Sora’s broad proportion and precise geometric cuts project contemporary financial infrastructure. Headings must always maintain tight negative tracking (`-0.03em` on display sizes) to prevent loose, informal layouts.
- **Body & Financial Data (Inter):** Inter handles corporate descriptions, director disclosures, and regulatory disclosures with neutral clarity. Its tall x-height guarantees crisp rendering on critical identification numbers, tax IDs, and IBAN fields.
- **Labels & Micro-data:** Micro-labels (such as statutory reference numbers or verification timestamps) use `label-sm` or `label-md` in SemiBold with uppercase transformation and slight positive tracking (`0.02em` to `0.04em`) to mirror official institutional documentation.

## Layout & Spacing

The system enforces a disciplined 8px modular spacing rhythm to convey precision and reliability:
- **Grid Architecture:** Desktop views operate on a 12-column fluid grid constrained to a maximum content width of `1280px` (`max-w-7xl`). Dashboard and legal filing flows use an asymmetrical 4-to-8 split: 4 columns for real-time order/statutory summary and 8 columns for interactive documentation fields.
- **Breakpoints:**
  - `mobile`: `< 768px` (single-column stack, edge margins `1.25rem`, gutters `1rem`).
  - `tablet`: `768px - 1024px` (6-column layout, edge margins `2rem`, gutters `1.25rem`).
  - `desktop`: `> 1024px` (12-column structured grid, edge margins `3rem`, gutters `1.5rem`).
- **Vertical Cadence:** Marketing and incorporation category sections require generous breathing room (`space-xl` scaled to `5rem`–`6rem` in section padding) to prevent executive fatigue and signify high-touch service.

## Elevation & Depth

This design system avoids heavy blurred dropshadows, which detract from institutional authority. Depth is established via crisp, low-contrast structural outlines and subtle ambient light:
- **Surface Elevation:** Cards and interactive panels utilize a dual-layer approach: a 1px border (`#E2E8F0`) paired with an ultra-soft ambient shadow: `0 1px 3px 0 rgba(0, 32, 72, 0.04), 0 6px 16px -4px rgba(0, 32, 72, 0.06)`.
- **Active & Hover Elevation:** Interactive modules lift subtly on hover (`translate-y-[-2px]`), supported by an expanded shadow: `0 12px 24px -6px rgba(0, 32, 72, 0.08)`.
- **Institutional Overlay:** Modal overlays, director identity upload drawers, and statutory dialogs sit over a backdrop blur (`backdrop-blur-md`) with an authoritative Navy tint (`rgba(0, 32, 72, 0.65)`).

## Shapes

The shape system adopts a controlled, professional **Soft (1)** geometry:
- Default containers, cards, and input fields carry `0.375rem` to `0.5rem` (`rounded-md` to `rounded-lg`) corner radii.
- This creates refined, approachable edges while maintaining architectural crispness appropriate for statutory legal services.
- Micro-badges, status pills, and verified indicators retain full pill geometry (`rounded-full`) to clearly separate metadata tags from actionable form containers.

## Components

### Buttons
- **Primary Action (Company Formation CTAs, Proceed to Filing):** Solid `#0864C7` background, pure white text, font-weight 600, padding `12px 24px`, radius `6px`. Hover state shifts to `#064F9E` with a micro-elevation of 1px.
- **Secondary (Download Prospectus, Save Draft):** White background, 1px solid `#CBD5E1` border, `#002048` text. Hover transitions to `#F4F7FB` background with `#0864C7` border.
- **Institutional Contrast Button:** Solid `#002048` background, `#FFFFFF` text, paired alongside Primary Blue buttons in executive hero sections.

### Cards & Service Tiers
- **Pricing & Entity Cards (e.g., Irish LTD, DAC, Branch Office):** `#FFFFFF` canvas, 1px solid `#E2E8F0`, padding `32px`. Selected or featured tiers receive a persistent 2px `#0864C7` border and an uppercase `label-sm` badge anchored at the top right.
- **Summary Sidebar Cards:** `#F4F7FB` background, borderless, internal padding `24px` with a 1px divider between line items.

### Input Fields & Selectors
- Standard height `44px` with `14px` horizontal padding.
- Border is 1px solid `#CBD5E1`, transitioning to `#0864C7` with a `0 0 0 3px rgba(8, 100, 199, 0.12)` focus ring.
- Labels are positioned outside the input container using `label-md` in `#002048` with a mandatory red asterisk (`#D9381E`) for statutory prerequisites.

### Checkboxes & Radios
- Box size `18px x 18px` with `4px` corner radius.
- Active states feature solid `#0864C7` fill with a crisp white tick/dot. Inactive borders sit at `#CBD5E1`.

### Status Chips & Badges
- **Statutory Verified:** Light emerald background (`#E6F4EA`), `#0E8345` text, 1px border (`#CEEAD6`).
- **Processing / CRO Submission:** Light blue background (`#EBF3FC`), `#0864C7` text, 1px border (`#C5DCFA`).
- **Entity Identification:** Navy tint background (`#E6EBF1`), `#002048` text.

### Domain-Specific Components
- **Company Name CRO Availability Bar:** A high-impact, full-width search input with integrated country selector (`.ie` default), instant feedback status dot (`#23D8CD` for available, `#D9381E` for reserved), and inline "Reserve Entity" trigger.
- **Incorporation Step Tracker:** A numbered, connected step indicator featuring filled Blue circles for completed steps, pulsating outer rings for active legal milestones, and muted Gray indicators for subsequent statutory filings.