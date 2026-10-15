<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Leamss Online Degree Courses 2026</title>
    <style>
        body { margin: 0; font-family: Helvetica, Arial, sans-serif; background: #0F0F11; color: #F8FAFC; }
        .page { position: relative; padding: 40px 60px; height: 297mm; box-sizing: border-box; page-break-after: always; }
        .bar { position: absolute; top: 0; left: 0; right: 0; height: 14px; background: #FE570F; }
        .brand { color: #FE570F; font-size: 12px; font-weight: bold; letter-spacing: 4px; }
        h1 { font-size: 34px; line-height: 1.2; margin: 40px 0 8px; color: #FFFFFF; }
        .sub { color: #FF8A6B; font-size: 13px; margin-bottom: 26px; }
        .uni { color: #FE570F; font-size: 15px; font-weight: bold; letter-spacing: 2px; margin: 18px 0 8px; text-transform: uppercase; }
        table.rows { width: 100%; border-collapse: collapse; }
        table.rows td { padding: 4px 0; border-bottom: 1px solid rgba(254,87,15,0.35); font-size: 11px; color: #F8FAFC; }
        table.rows td.fee { color: #FF8A6B; font-weight: bold; width: 110px; }
        table.rows td.dur { color: #94A3B8; width: 80px; text-align: right; }
        .footer { position: absolute; bottom: 30px; left: 60px; right: 60px; color: #94A3B8; font-size: 10px; line-height: 1.6; }
        .footer .link { color: #FE570F; font-weight: bold; }
    </style>
</head>
<body>
    <div class="page">
        <div class="bar"></div>
        <p class="brand">L E A M S S&nbsp;&nbsp;E D U C A T I O N</p>
        <h1>Online Degree Courses 2026</h1>
        <p class="sub">{{ $courses->count() }} UGC-recognized programs from 5 university partners. Flexible distance learning with live + recorded classes, EMI options and placement assistance.</p>
        @foreach ($courses->groupBy('university') as $university => $uniCourses)
            <p class="uni">{{ $university }}</p>
            <table class="rows">
                @foreach ($uniCourses as $c)
                    <tr>
                        <td>{{ $c->label() }}</td>
                        <td class="fee">Rs. {{ number_format($c->fee_per_semester) }}</td>
                        <td class="dur">{{ $c->duration }}</td>
                    </tr>
                @endforeach
            </table>
        @endforeach
        <div class="footer">
            Leamss Education | Toll Free: 1800-210-2427<br>
            Office No 10, Londhe Compound, Laxmi Chambers, Near Goandevi Maidan, Opposite Dmart Ready, Thane West - 400602<br>
            <span class="link">leamss.com/online-degree-courses</span>
        </div>
    </div>
</body>
</html>
