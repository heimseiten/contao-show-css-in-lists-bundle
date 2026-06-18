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


<img width="1814" height="811" alt="564304084-37f8c6bb-8986-4f64-af9d-ed3442517ad8" src="https://github.com/user-attachments/assets/27c5fa93-10dc-43c8-903b-ad1a10ed1dc9" />
<img width="1803" height="840" alt="564304144-dcab1210-85de-4ba3-9425-2a7ce0bb717d" src="https://github.com/user-attachments/assets/95b6d8d1-726c-470f-bccd-d4c0f7825a32" />
<img width="1683" height="1139" alt="577230855-71400930-d12e-42a5-a2a6-6325f7955db3" src="https://github.com/user-attachments/assets/6f10cb3a-d02a-4b98-bb43-c798a11769f6" />
<img width="1685" height="924" alt="577230902-50c3911c-2619-4d74-8580-2adbf771b259" src="https://github.com/user-attachments/assets/4780e1bf-f10a-42d5-9296-ee2d84350504" />
