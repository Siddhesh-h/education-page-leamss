<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $label ?? 'Leamss Brochure' }}</title>
    <style>
        body { margin: 0; font-family: Helvetica, Arial, sans-serif; background: #0F0F11; color: #F8FAFC; }
        .page { position: relative; padding: 40px 60px; height: 297mm; box-sizing: border-box; }
        .bar { position: absolute; top: 0; left: 0; right: 0; height: 14px; background: #FE570F; }
        .brand { color: #FE570F; font-size: 12px; font-weight: bold; letter-spacing: 4px; }
        h1 { font-size: 32px; line-height: 1.2; margin: 40px 0 8px; color: #FFFFFF; }
        .meta { color: #FF8A6B; font-size: 14px; margin-bottom: 30px; }
        table.info { width: 100%; border-collapse: collapse; margin: 14px 0; }
        table.info td { padding: 7px 0; border-bottom: 1px solid rgba(255,255,255,0.25); font-size: 13px; }
        table.info td.k { color: #FE570F; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; width: 170px; font-size: 11px; }
        .hl-title { color: #FE570F; font-size: 14px; font-weight: bold; letter-spacing: 2px; margin: 30px 0 12px; }
        .hl { font-size: 13px; color: #E2E8F0; margin-bottom: 8px; }
        .hl span { color: #FF8A6B; font-weight: bold; }
        .cta { background: #FE570F; color: #0F0F11; padding: 16px 24px; font-weight: bold; font-size: 14px; margin-top: 26px; }
        .footer { position: absolute; bottom: 30px; left: 60px; right: 60px; color: #94A3B8; font-size: 10px; line-height: 1.6; }
        .footer .link { color: #FE570F; font-weight: bold; }
    </style>
</head>
<body>
    <div class="page">
        <div class="bar"></div>
        <p class="brand">L E A M S S&nbsp;&nbsp;E D U C A T I O N</p>
        <h1>{{ $label }}</h1>
        <p class="meta">{{ $course->university }} &nbsp;|&nbsp; {{ $course->level }} Program</p>
        <table class="info">
            <tr><td class="k">Course Fee</td><td>Rs. {{ number_format($course->fee_per_semester) }} per semester</td></tr>
            <tr><td class="k">Duration</td><td>{{ $course->duration }} ({{ $course->semesters() }} semesters)</td></tr>
            <tr><td class="k">Learning Mode</td><td>100% Online - Live + Recorded Classes</td></tr>
            <tr><td class="k">Approval</td><td>UGC-DEB Entitled, Globally Recognized</td></tr>
        </table>
        <p class="hl-title">PROGRAM HIGHLIGHTS</p>
        @foreach ($highlights as $h)
            <p class="hl"><span>-</span> {{ $h }}</p>
        @endforeach
        <div class="cta">Book Your Free Counselling Slot — Call Toll Free: 1800-210-2427 | leamss.com</div>
        <div class="footer">
            Leamss Education | Toll Free: 1800-210-2427<br>
            Office No 10, Londhe Compound, Laxmi Chambers, Near Goandevi Maidan, Opposite Dmart Ready, Thane West - 400602<br>
            <span class="link">leamss.com/online-degree-courses</span>
        </div>
    </div>
</body>
</html>
