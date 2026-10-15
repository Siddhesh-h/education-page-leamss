<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FBFBFB">
    <meta name="description" content="Leamss — Compare 88+ UGC-recognized online MBA, MCA, BBA, BCA, M.Com & MA degrees from Amity, Manipal Jaipur, Jain, DY Patil Pune & Sikkim Manipal. Flexible distance learning, admissions open 2026.">
    <title>@yield('title', 'Leamss | Online Degree Courses 2026 — Flexible Distance Learning')</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Instrument+Sans:wght@400;500;600;700&family=Instrument+Serif:ital@0;1&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
</head>
<body class="bg-[#FBFBFB] text-[#0F0F11] font-body overflow-x-hidden" data-open-enquiry-on-load="{{ (session('enquiry_success') || $errors->enquiry->any()) ? '1' : '0' }}">
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    @include('partials.floating-buttons')
    @include('partials.modals')

    {{-- session toast --}}
    @if (session('enquiry_success'))
        <div class="toast" data-testid="session-toast">{{ session('enquiry_success') }}</div>
    @endif

    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <script src="{{ asset('assets/app.js') }}"></script>
</body>
</html>
