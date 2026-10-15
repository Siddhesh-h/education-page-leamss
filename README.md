# Leamss — Online Degree Courses (Laravel Edition)

A faithful Laravel port of the redesigned "Online Degree Courses" page for leamss.com —
same leamss brand colors (#FE570F orange, #26787C teal, #E02735 red, #FBFBFB paper),
same header/footer as the live site, all 88 real courses, working enquiry form,
and instant branded PDF brochures.

## Requirements

- PHP >= 8.2 (with `mbstring`, `dom`, `xml`, `gd` extensions)
- Composer
- MySQL (or SQLite for quick local runs)

## Setup

```bash
git clone https://github.com/Siddhesh-h/education-page-leamss.git
cd education-page-leamss

composer install

cp .env.example .env
php artisan key:generate

# Option A — zero config SQLite:
touch database/database.sqlite
# then set in .env:  DB_CONNECTION=sqlite

# Option B — MySQL (like the live server): edit DB_* values in .env

php artisan migrate --seed     # creates tables + seeds all 88 courses
php artisan storage:link       # (optional, if you link public assets)

php artisan serve              # http://127.0.0.1:8000
```

## What's inside

| Area | Details |
|---|---|
| Home page | Kinetic hero (masked line reveal + parallax), angled university marquee, why-choose grid, course catalog with sticky filter bar (server-side search / university / degree-type / fee & duration sorting), CTA band |
| Course details | `/course-details/{course}` for all 88 courses — breadcrumb, teal-offset image frame, accreditation chips, career-impact cards, fees with 24-month interest-free EMI (computed from real fees), program structure, eligibility (General / Indian / Foreign students), 5-step admission process, job roles per degree type, hiring partners, FAQ accordion, related programs |
| Header / Footer | Same as leamss.com — two-row white header (logo, company name, contact info, socials, dropdowns, Book a Consultation + Pay Now), teal footer with consultation banner, all link columns, office address, calculators |
| Lead capture | `POST /enquiries` (validated, stored, session toast) and `POST /brochure-request` (validated, stored, streams the PDF download) |
| PDF brochures | Generated with `barryvdh/laravel-dompdf` — per-course and full catalogue (grouped by university), leamss-branded dark/orange design |
| Floating actions | Call (+91 77188 82427) and WhatsApp (wa.me/7738352427) buttons on every page |

## Where the content lives

- **All 88 courses**: `database/seeders/CourseSeeder.php` (ported 1:1 from the live leamss page)
- **Per-degree-type content** (highlights, job roles, career impact, advantages, admission steps, foreign eligibility, accreditations, hiring logos): `config/leamss.php`
- **Course images**: `public/course-images/` (downloaded from leamss.com), **hiring logos**: `public/hiring-partners/`
- **Brand styling**: `public/assets/app.css` (buttons with the signature black-sweep hover, grain, marquee, masked reveals)

## Admin / leads

Leads land in the `enquiries` and `brochure_leads` tables — check them with any DB client or:

```bash
php artisan tinker
>>> App\Models\Enquiry::latest()->get();
>>> App\Models\BrochureLead::latest()->get();
```

## Notes

- Tailwind is loaded via the Play CDN for drop-in portability. For production, compile
  Tailwind locally and swap the CDN `<script>` in `resources/views/layouts/app.blade.php`.
- Route model binding uses the course slug as the primary key, so URLs stay identical in
  shape to leamss.com: `/course-details/online-bcom-degree-amity-university`.
