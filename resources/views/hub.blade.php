@extends('layouts.app')

@section('title', 'LEAMSS | Immigration Consultants in Thane — Visa, PR, Study Abroad & Online Degrees 2026')

@section('content')
@php
    $destBase = 'https://leamss.com/public/assets/web/images';
    $migrationCards = [
        ['name' => 'Canada', 'badge' => 'Permanent Residency', 'img' => "$destBase/canada-img3.webp", 'flag' => "$destBase/flags/canada-flag.webp", 'href' => 'https://leamss.com/immigration/permanent-residency/canada'],
        ['name' => 'Australia', 'badge' => 'Permanent Residency', 'img' => "$destBase/australia-img3.webp", 'flag' => "$destBase/flags/australia-flag.webp", 'href' => 'https://leamss.com/immigration/permanent-residency/australia'],
        ['name' => 'Canada', 'badge' => 'Temporary Residency', 'img' => "$destBase/canada-img3.webp", 'flag' => "$destBase/flags/canada-flag.webp", 'href' => 'https://leamss.com/immigration/temporary-residency/canada'],
        ['name' => 'Australia', 'badge' => 'Temporary Residency', 'img' => "$destBase/australia-img3.webp", 'flag' => "$destBase/flags/australia-flag.webp", 'href' => 'https://leamss.com/immigration/temporary-residency/australia'],
    ];
    $abroadCards = [
        ['name' => 'USA', 'img' => "$destBase/usa-img1.webp", 'flag' => "$destBase/flags/usa-flag.webp", 'href' => 'https://leamss.com/study-abroad/study-in-usa'],
        ['name' => 'UK', 'img' => "$destBase/uk-img1.webp", 'flag' => "$destBase/flags/uk-flag.webp", 'href' => 'https://leamss.com/study-abroad/study-in-uk'],
        ['name' => 'Canada', 'img' => "$destBase/canada-img1.webp", 'flag' => "$destBase/flags/canada-flag.webp", 'href' => 'https://leamss.com/study-abroad/study-in-canada'],
        ['name' => 'Australia', 'img' => "$destBase/australia-img1.webp", 'flag' => "$destBase/flags/australia-flag.webp", 'href' => 'https://leamss.com/study-abroad/study-in-australia'],
        ['name' => 'New Zealand', 'img' => "$destBase/new-zealand-img1.webp", 'flag' => "$destBase/flags/new-zealand-flag.webp", 'href' => 'https://leamss.com/study-abroad/study-in-new-zealand'],
        ['name' => 'European Countries', 'img' => "$destBase/european-countries-img1.webp", 'flag' => "$destBase/flags/european-countries-flags.webp", 'href' => 'https://leamss.com/study-abroad/study-in-european-countries'],
    ];
    $degrees = ['BBA', 'BCA', 'BA', 'B.Com', 'MBA', 'MCA', 'MA', 'M.Com'];
    $coaching = [
        ['name' => 'PTE Coaching', 'img' => "$destBase/pte-coaching.webp", 'href' => 'https://leamss.com/coaching/pte-coaching'],
        ['name' => 'IELTS Coaching', 'img' => "$destBase/ielts-coaching.webp", 'href' => 'https://leamss.com/coaching/ielts-english'],
        ['name' => 'Spoken English', 'img' => "$destBase/spoken-english.webp", 'href' => 'https://leamss.com/coaching/spoken-english'],
    ];
    $whyChoose = [
        ['icon' => 'shield-check', 'title' => 'Trust', 'desc' => 'We keep open lines of communication and guarantee transparency at every turn, fostering confidence and trust all along the way.'],
        ['icon' => 'receipt', 'title' => 'No Hidden Charges', 'desc' => 'We offer competitive pricing with absolutely no hidden fees. With us, you will always know what to expect, ensuring clarity and confidence throughout your immigration journey.'],
        ['icon' => 'award', 'title' => 'Expertise & Reputation', 'desc' => 'At LEAMSS, we confidently offer all-inclusive services and customised solutions to make sure every client has a smooth and effective experience.'],
        ['icon' => 'trending-up', 'title' => 'A Superior Probability of Success', 'desc' => 'At LEAMSS, receive personalized guidance in education and immigration services to achieve your academic and professional goals effectively.'],
        ['icon' => 'file-check', 'title' => 'Thorough Documentation', 'desc' => 'We offer thorough legal advice, specialized assistance, and documentation that guarantees a seamless immigration process.'],
        ['icon' => 'thumbs-up', 'title' => 'Success at Fulfilling Client Expectations', 'desc' => 'We stay with you from profile assessment to visa grant, keeping you updated at every step.'],
    ];
    $testimonials = [
        ['quote' => 'Rohit, Meenal, Kritika and their entire team is very practical, supportive and possess expertise in analyzing the profiles for best ideal destination and thoroughly professional in their approach towards clients. I strongly recommend their services to anyone seriously interested in exploring their immigration options.', 'name' => 'Krishna KV', 'href' => 'https://www.google.com/search?q=LEAMSS-+(Thane)+Reviews'],
        ['quote' => 'I am extremely happy with the services provided by LEAMSS. The team has been very supportive, professional, and highly responsive regarding my PR process. They patiently addressed all my queries, explained every step clearly, and guided me with the right documentation.', 'name' => 'Varsha Bhatia', 'href' => 'https://www.google.com/search?q=LEAMSS-+(Thane)+Reviews'],
        ['quote' => 'I am so grateful to Leamss for helping me navigate my Australian PR journey — their expertise and support made a huge difference. From my first phone conversation with Rohit to now, it has been an incredible journey of professionalism.', 'name' => 'Sophia Chowdhury', 'href' => 'https://www.google.com/search?q=LEAMSS-+(Thane)+Reviews'],
    ];
    $partners = [
        ['name' => 'DY Patil Pune', 'img' => "$destBase/clients/dy-patil-pune-logo.webp"],
        ['name' => 'Jain University', 'img' => "$destBase/clients/jain-university-logo.webp"],
        ['name' => 'Manipal University Jaipur', 'img' => "$destBase/clients/manipal-university-logo.webp"],
        ['name' => 'UKIQ', 'img' => "$destBase/clients/ukiq-logo.webp"],
        ['name' => 'Amity University', 'img' => "$destBase/clients/amity-university-logo.webp"],
    ];
@endphp

<section class="hero-section grain" data-testid="home-hero">
    <div class="hero-grid"></div>
    <span class="blob blob-peach" style="top:-10rem; left:-10rem; width:560px; height:560px;"></span>
    <span class="blob blob-mint" style="top:30%; right:0; width:520px; height:520px;"></span>

    <div class="wrap position-relative" style="z-index:2;">
        <div style="max-width:56rem;">
            <div class="chip chip-peach chip-static chip-wrap mb-4" data-reveal data-testid="home-eyebrow-badge">
                <span class="position-relative d-inline-flex" style="width:8px;height:8px;">
                    <span class="animate-ping-dot position-absolute bg-orange rounded-circle" style="inset:0;"></span>
                    <span class="position-relative bg-orange rounded-circle" style="width:8px;height:8px;"></span>
                </span>
                Trusted Visa &amp; Education Experts
            </div>

            <h1 class="h-display h1-hero m-0" data-testid="home-main-title">
                <span class="mask-line"><span style="animation-delay:.15s">Immigration Consultants</span></span>
                <span class="mask-line"><span style="animation-delay:.28s">in Thane for Australia,</span></span>
                <span class="mask-line"><span style="animation-delay:.41s">Canada &amp; <span class="font-serif-accent text-gradient-brand" style="font-weight:400;">Study Abroad</span></span></span>
            </h1>

            <p class="body-text body-text-lg mt-4" style="max-width:38rem;" data-reveal data-testid="home-subtitle">
                From Australia and Canada PR to UGC-recognized online degrees — LEAMSS guides every step
                of your journey with clear, honest advice. Everything under one roof.
            </p>

            <div class="home-tabs mt-4" role="tablist" data-reveal data-testid="home-tabs">
                <button type="button" role="tab" aria-selected="true" class="home-tab home-tab-active" data-home-tab="migration" data-testid="home-tab-migration">
                    <i data-lucide="plane"></i>
                    Migration
                </button>
                <button type="button" role="tab" aria-selected="false" class="home-tab" data-home-tab="education" data-testid="home-tab-education">
                    <i data-lucide="graduation-cap"></i>
                    Education
                </button>
            </div>
        </div>

        <div class="home-panel mt-5" data-home-panel="migration" data-testid="home-panel-migration">
            <div class="catalog-grid" data-testid="home-migration-cards">
                @foreach ($migrationCards as $c)
                    <a href="{{ $c['href'] }}" class="country-card panel panel-hover" data-reveal data-testid="home-country-card-{{ strtolower(str_replace(' ', '-', $c['name'] . '-' . $c['badge'])) }}">
                        <div class="country-media">
                            <img src="{{ $c['img'] }}" alt="{{ $c['name'] }} immigration" loading="lazy">
                            <span class="country-flag"><img src="{{ $c['flag'] }}" alt="{{ $c['name'] }} flag"></span>
                            <span class="country-badge">{{ $c['badge'] }}</span>
                        </div>
                        <div class="country-body">
                            <h3 class="country-title">{{ $c['name'] }}</h3>
                            <span class="country-link">Know More <i data-lucide="arrow-right"></i></span>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="d-flex flex-column flex-sm-row gap-3 mt-4" data-reveal>
                <a href="{{ route('migration') }}" data-testid="home-migration-explore-btn" class="btn-brand btn-pill" style="text-decoration:none;">
                    <span class="d-inline-flex align-items-center gap-2">
                        Explore All Migration Pathways
                        <i data-lucide="arrow-right" style="width:16px;height:16px;"></i>
                    </span>
                </a>
                <button data-open-enquiry data-testid="home-migration-consult-btn" class="btn-outline-light-c">
                    <i data-lucide="calendar-check" style="width:16px;height:16px;"></i>
                    Book Free Counselling
                </button>
            </div>
        </div>

        <div class="home-panel mt-5" data-home-panel="education" hidden data-testid="home-panel-education">
            <a href="{{ route('education.domestic') }}" class="option-card option-orange grain d-block" data-reveal data-testid="home-degrees-feature">
                <span class="clip-corner clip-corner-tl"></span>
                <span class="blob blob-orange" style="bottom:-6rem; right:-4rem; width:320px; height:320px;"></span>
                <div class="position-relative d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-4" style="z-index:2;">
                    <div>
                        <p class="kicker kicker-cream kicker-sm option-kicker m-0">Online Degree Courses</p>
                        <h2 class="option-title m-0">{{ $count }}+ UGC-Recognized Degrees</h2>
                        <p class="option-desc m-0">MBA, MCA, BBA, BCA, M.Com &amp; MA from Amity, Manipal Jaipur, Jain, DY Patil Pune &amp; Sikkim Manipal — 24 months no-cost EMI, 100% online.</p>
                    </div>
                    <span class="btn-white-c flex-shrink-0" style="pointer-events:none;">
                        <span>Browse All Courses</span>
                        <i data-lucide="arrow-right" class="c-orange" style="width:16px;height:16px;"></i>
                    </span>
                </div>
            </a>

            <p class="kicker mt-5 mb-4" data-reveal>Study Abroad Destinations</p>
            <div class="catalog-grid" data-testid="home-abroad-cards">
                @foreach ($abroadCards as $c)
                    <a href="{{ $c['href'] }}" class="country-card panel panel-hover" data-reveal data-testid="home-abroad-card-{{ strtolower(str_replace(' ', '-', $c['name'])) }}">
                        <div class="country-media">
                            <img src="{{ $c['img'] }}" alt="Study abroad in {{ $c['name'] }}" loading="lazy">
                            <span class="country-flag"><img src="{{ $c['flag'] }}" alt="{{ $c['name'] }} flag"></span>
                        </div>
                        <div class="country-body">
                            <h3 class="country-title">{{ $c['name'] }}</h3>
                            <span class="country-link">Know More <i data-lucide="arrow-right"></i></span>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="d-flex flex-column flex-sm-row gap-3 mt-4" data-reveal>
                <a href="{{ route('education.international') }}" data-testid="home-abroad-explore-btn" class="btn-brand btn-pill" style="text-decoration:none;">
                    <span class="d-inline-flex align-items-center gap-2">
                        Explore Study Abroad
                        <i data-lucide="arrow-right" style="width:16px;height:16px;"></i>
                    </span>
                </a>
                <a href="{{ route('education') }}" data-testid="home-education-explore-btn" class="btn-outline-light-c">
                    <i data-lucide="compass" style="width:16px;height:16px;"></i>
                    Education Overview
                </a>
            </div>
        </div>

        <div class="stat-grid mt-5" data-reveal data-testid="home-stats">
            <div>
                <p class="stat-value m-0">80+</p>
                <p class="stat-label m-0">Visa Categories</p>
            </div>
            <div>
                <p class="stat-value m-0">80k+</p>
                <p class="stat-label m-0">Visa Process</p>
            </div>
            <div>
                <p class="stat-value m-0">{{ $count }}+</p>
                <p class="stat-label m-0">Online Courses</p>
            </div>
            <div>
                <p class="stat-value m-0">80+</p>
                <p class="stat-label m-0">Leamss Experts</p>
            </div>
        </div>
    </div>
</section>

<section class="section bg-mist" data-testid="home-about-section">
    <div class="wrap">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7" data-reveal>
                <p class="kicker mb-3">About LEAMSS</p>
                <h2 class="h-display h2-section m-0">
                    From IELTS prep to PR approval — LEAMSS guides <span class="font-serif-accent c-orange" style="font-weight:400;">every step of your abroad journey</span>
                </h2>
                <p class="body-text mt-4 mb-0">
                    LEAMSS has been serving people with Australia and Canada PR services for years, along with
                    other visa solutions. From start to finish, our expert team guides you with clear and honest
                    advice for your immigration plans.
                </p>
                <p class="body-text mt-3 mb-0">
                    At LEAMSS, we believe in delivering the best experience to help you achieve your goals with
                    confidence and transparency. We look forward to adding your name to our success stories.
                </p>
                <a href="https://leamss.com/about-us" data-testid="home-about-btn" class="btn-brand btn-pill mt-4" style="text-decoration:none;">
                    <span>About Us</span>
                </a>
            </div>
            <div class="col-lg-5 d-none d-md-block" data-reveal data-testid="home-about-image">
                <div class="hero-media">
                    <img src="{{ $destBase }}/aboutus-leamss.webp" alt="LEAMSS Immigration Consultants">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-paper" data-testid="home-accreditations">
    <div class="wrap">
        <div class="row g-5">
            <div class="col-lg-6" data-reveal>
                <h3 class="font-display fw-bold c-ink mb-4" style="font-size:20px;">Study at universities recognised by India's top accreditation bodies</h3>
                <div class="d-flex flex-wrap gap-2">
                    @foreach (['UGC Approved', 'NAAC Accredited', 'NIRF Ranked'] as $a)
                        <span class="chip chip-static chip-teal-text" data-testid="home-accreditation-chip-{{ strtolower(str_replace(' ', '-', $a)) }}">
                            <i data-lucide="badge-check" class="c-orange" style="width:15px;height:15px;"></i>
                            {{ $a }}
                        </span>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6" data-reveal style="transition-delay:100ms;">
                <h3 class="font-display fw-bold c-ink mb-4" style="font-size:20px;">Internationally ranked. Globally respected</h3>
                <div class="d-flex flex-wrap gap-2">
                    @foreach (['QAA', 'THE World Rankings', 'NBA', 'QS', 'WES'] as $a)
                        <span class="chip chip-static" data-testid="home-accreditation-chip-intl-{{ strtolower(str_replace(' ', '-', $a)) }}">
                            <i data-lucide="globe" class="c-orange" style="width:15px;height:15px;"></i>
                            {{ $a }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-mist" data-testid="home-programs-section">
    <div class="wrap">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7" data-reveal>
                <p class="kicker mb-3">Under-Graduate &amp; Post Graduate Program</p>
                <h2 class="h-display h2-section m-0">
                    Find the program that <span class="font-serif-accent c-orange" style="font-weight:400;">fits your career.</span>
                </h2>
                <p class="body-text mt-4 mb-0">
                    LEAMSS guides you toward a better understanding of courses and career pathways for domestic
                    and international studies — associated with top universities nationally and internationally.
                </p>
            </div>
            <div class="col-lg-5" data-reveal>
                <div class="panel-teal grain position-relative overflow-hidden text-center" style="border-radius:14px; padding:2rem;" data-testid="home-emi-panel">
                    <div class="position-relative" style="z-index:2;">
                        <p class="font-mono-brand text-uppercase m-0" style="font-size:11px; letter-spacing:0.2em; color:var(--peach); font-weight:600;">No Cost EMI</p>
                        <p class="font-display fw-bolder text-white m-0" style="font-size:40px;">24 Months</p>
                        <p class="m-0" style="font-size:13px; color:rgba(255,255,255,0.85);">Interest-free EMI on every program fee</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap gap-2 mt-5" data-testid="home-program-chips">
            @foreach ($degrees as $d)
                <a href="{{ route('education.domestic', ['degree' => $d]) }}#catalog" class="chip" data-reveal data-testid="home-program-chip-{{ strtolower(str_replace('.', '', $d)) }}">{{ $d }}</a>
            @endforeach
        </div>
    </div>
</section>

<section class="section bg-paper" data-testid="home-coaching-section">
    <div class="wrap">
        <div class="mb-5" data-reveal>
            <p class="kicker mb-3">Coaching</p>
            <h2 class="h-display h2-section m-0">
                Learn the Language. <span class="font-serif-accent c-orange" style="font-weight:400;">Unlock the World</span>
            </h2>
            <p class="body-text mt-3 mb-0">
                Enhance your language skills to grab the opportunity — PTE, IELTS, TOEFL, Michigan, English &amp; German.
            </p>
        </div>
        <div class="catalog-grid" data-testid="home-coaching-cards">
            @foreach ($coaching as $c)
                <a href="{{ $c['href'] }}" class="country-card panel panel-hover" data-reveal data-testid="home-coaching-card-{{ strtolower(str_replace(' ', '-', $c['name'])) }}">
                    <div class="country-media">
                        <img src="{{ $c['img'] }}" alt="{{ $c['name'] }}" loading="lazy">
                    </div>
                    <div class="country-body">
                        <h3 class="country-title">{{ $c['name'] }}</h3>
                        <span class="country-link">Know More <i data-lucide="arrow-right"></i></span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="section bg-mist" data-testid="home-why-section">
    <div class="wrap">
        <div class="row g-5 align-items-start">
            <div class="col-lg-4" data-reveal>
                <p class="kicker mb-3">Why Choose LEAMSS</p>
                <h2 class="h-display h2-section m-0">
                    We listen, understand and provide the <span class="font-serif-accent c-orange" style="font-weight:400;">fastest way forward.</span>
                </h2>
                <p class="body-text mt-4 mb-0">
                    As a one-stop abroad service provider, we have everything under one roof — helping you save
                    time and money from negative outcomes. Still need more reasons to choose us?
                </p>
                <a href="https://leamss.com/contactus" data-testid="home-why-connect-btn" class="btn-brand btn-pill mt-4" style="text-decoration:none;">
                    <span>Connect Now</span>
                </a>
            </div>
            <div class="col-lg-8">
                <div class="row g-4" data-testid="home-why-cards">
                    @foreach ($whyChoose as $i => $card)
                        <div class="col-12 col-md-6" data-reveal style="transition-delay: {{ $i * 60 }}ms">
                            <div class="panel panel-hover panel-pad h-100">
                                <div class="icon-badge mb-4">
                                    <i data-lucide="{{ $card['icon'] }}"></i>
                                </div>
                                <h3 class="font-display c-green fw-bold mb-2" style="font-size:17px;">{{ $card['title'] }}</h3>
                                <p class="mb-0" style="font-size:14px; color:var(--body-txt); line-height:1.65;">{{ $card['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-paper" data-testid="home-testimonials-section">
    <div class="wrap">
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-4 mb-5" data-reveal>
            <div>
                <p class="kicker mb-3">Success Stories</p>
                <h2 class="h-display h2-section m-0">
                    Stories of Trust, Success <span class="font-serif-accent c-orange" style="font-weight:400;">and Satisfaction</span>
                </h2>
                <p class="body-text mt-3 mb-0">
                    Embark on a global exploration — experience joy in 190+ countries and across the world.
                </p>
            </div>
            <a href="https://www.google.com/search?q=LEAMSS-+(Thane)+Reviews" target="_blank" rel="noopener noreferrer" data-testid="home-reviews-btn" class="btn-outline-light-c flex-shrink-0">
                <i data-lucide="star" class="c-orange" style="width:16px;height:16px;"></i>
                More Reviews
            </a>
        </div>
        <div class="catalog-grid" data-testid="home-testimonial-cards">
            @foreach ($testimonials as $i => $t)
                <div class="panel panel-hover panel-pad h-100 d-flex flex-column" data-reveal style="transition-delay: {{ $i * 70 }}ms" data-testid="home-testimonial-card-{{ $i }}">
                    <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_74x24dp.png" alt="Google review" style="height:18px; width:auto; align-self:flex-start;">
                    <p class="my-4" style="font-size:14px; color:#424242; line-height:1.7; flex:1;">"{{ $t['quote'] }}"</p>
                    <div>
                        <p class="font-display fw-bold c-ink m-0" style="font-size:15px;">{{ $t['name'] }}</p>
                        <a href="{{ $t['href'] }}" target="_blank" rel="noopener noreferrer" style="font-family:'JetBrains Mono',monospace; font-size:11px; letter-spacing:0.1em; text-transform:uppercase; color:var(--green); text-decoration:none;">Read on Google Reviews →</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-paper py-4 overflow-hidden position-relative" style="z-index:10;" data-testid="home-partners-section">
    <div class="marquee-band marquee-hover">
        <div class="marquee-track">
            @foreach ([1, 2] as $half)
                <div class="marquee-half" @if ($half === 2) aria-hidden="true" @endif>
                    @foreach ($partners as $p)
                        <span class="marquee-item">
                            <span class="font-display">{{ $p['name'] }}</span>
                            <img src="{{ $p['img'] }}" alt="{{ $p['name'] }} logo" class="partner-logo" loading="lazy">
                        </span>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.cta')
@endsection
