# Show CSS in lists (Contao backend)

Shows the **CSS ID and CSS classes** of pages, articles and content elements
directly in the Contao back end list views – rendered as small, readable
"pills". Each back end user enables it for themselves in their profile.

Extracted from `heimseiten/contao-custom-backend-settings-bundle` into a
dedicated bundle.

## Installation

```bash
composer require heimseiten/contao-show-css-in-lists-bundle
vendor/bin/contao-console contao:migrate
```

## Usage

In the back end open your user profile (or *System → Back end users*) and tick
**„CSS in Seiten, ID und CSS in Artikeln und Inhaltselementen anzeigen"** in the
appearance section. The CSS id/classes then appear in:

- the **page tree** (site structure),
- the **article** list,
- the **content element** list (incl. element groups).

Requires Contao `^5.7` (uses the automatic SQL definition from
[contao/contao#8838](https://github.com/contao/contao/pull/8838), so the user
setting needs no explicit `sql`).
