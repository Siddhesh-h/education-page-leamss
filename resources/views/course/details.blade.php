@extends('layouts.app')

@section('title', $course->label().' | Leamss Online Degree Courses 2026')

@section('content')
<section data-testid="detail-hero" class="detail-hero-pad grain">
    <div class="hero-grid"></div>
    <span class="blob blob-peach" style="top:-6rem; left:-8rem; width:440px; height:440px;"></span>
    <div class="wrap position-relative" style="z-index:2;">
        <nav class="breadcrumb-c" data-testid="detail-breadcrumb">
            <a href="{{ route('hub') }}">Home</a>
            <span class="sep">/</span>
            <a href="{{ route('education.domestic') }}#catalog">Courses</a>
            <span class="sep">/</span>
            <span class="current">{{ $course->degree_type }}</span>
        </nav>

        <div class="row g-5 align-items-center">
            <div class="col-lg-5 position-relative" data-reveal data-testid="detail-image-frame">
                <div class="detail-media-frame">
                    <div class="detail-media" data-testid="detail-image-wrapper">
                        <img src="{{ $course->image }}" alt="{{ $label }}" data-testid="detail-image">
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-reveal>
                <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
                    <span class="chip chip-active chip-static">{{ $course->degree_type }}</span>
                    <span class="chip chip-static chip-white">{{ $course->level }}</span>
                    <span class="card-uni mb-0">
                        <span class="dot"></span>
                        {{ $course->university }}
                    </span>
                </div>

                <h1 data-testid="detail-title" class="h-display h1-detail m-0">
                    {{ $course->degree }}
                    @if ($course->spec)
                        <span class="font-serif-accent c-orange" style="font-weight:400;">in {{ $course->spec }}</span>
                    @endif
                </h1>

                <p class="body-text mt-4 mb-0" style="max-width:36rem;" data-testid="detail-overview-short">
                    100% online, UGC-DEB entitled degree — learn at your own pace with live lectures, recorded archives and 24/7 LMS access, without pausing your career or shifting cities.
                </p>

                <div class="d-flex flex-wrap align-items-center gap-3 mt-4">
                    <div data-testid="detail-price" class="price-block">
                        <span class="value">₹{{ number_format($course->fee_per_semester) }}</span>
                        <span class="per">per semester</span>
                    </div>
                    <span class="card-duration">
                        <i data-lucide="clock"></i>
                        {{ $course->duration }}
                    </span>
                </div>

                <div class="d-flex flex-column flex-sm-row flex-wrap align-items-sm-center gap-3 mt-5">
                    <button data-open-enquiry data-course-label="{{ $label }}" data-testid="detail-enquire-btn" class="btn-brand btn-pill">
                        <i data-lucide="graduation-cap" style="width:16px;height:16px;"></i>
                        <span>Book Your Slot</span>
                    </button>
                    <button type="button" data-open-brochure data-course-id="{{ $course->id }}" data-brochure-label="{{ $label }}" data-testid="detail-brochure-btn" class="btn-outline-light-c">
                        <i data-lucide="download" style="width:16px;height:16px;"></i>
                        <span>Download Brochure</span>
                    </button>
                    <a href="{{ $course->link }}" target="_blank" rel="noreferrer" data-testid="detail-external-link" class="btn-ghost-teal">
                        View on leamss.com
                        <i data-lucide="external-link" style="width:16px;height:16px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-mist" data-testid="detail-industry-leader-section">
    <div class="wrap">
        <div class="mb-5" data-reveal>
            <p class="kicker mb-3">Your Degree, Your Edge</p>
            <h2 class="h-display h2-section m-0 d-flex align-items-start gap-3">
                <i data-lucide="award" class="c-green flex-shrink-0" style="width:28px;height:28px;margin-top:6px;"></i>
                <span>Become an industry leader with <span class="font-serif-accent c-orange" style="font-weight:400;">UGC-recognized {{ $course->degree_type }}</span></span>
            </h2>
        </div>
        <div class="d-flex flex-wrap gap-2" data-testid="detail-accreditations">
            @foreach ($accreditations as $i => $chip)
                <span data-reveal class="chip chip-static chip-teal-text" style="transition-delay: {{ $i * 50 }}ms">
                    <i data-lucide="shield-check" class="c-orange" style="width:15px;height:15px;"></i>
                    {{ $chip }}
                </span>
            @endforeach
        </div>

        <div class="row g-4 mt-1">
            @foreach ($careerImpact as $i => $card)
                <div class="col-12 col-md-6 col-lg-3" data-reveal style="transition-delay: {{ $i * 60 }}ms">
                    <div class="panel panel-hover panel-pad h-100">
                        <div class="icon-badge mb-4">
                            <i data-lucide="{{ $card['icon'] }}"></i>
                        </div>
                        <h3 class="font-display c-green fw-bold mb-2" style="font-size:18px;">{{ $card['title'] }}</h3>
                        <p class="mb-0" style="font-size:14px; color:var(--body-txt); line-height:1.65;">{{ $card['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section bg-paper" data-testid="detail-fees-section">
    <div class="wrap">
        <div class="mb-5" data-reveal>
            <p class="kicker mb-3">Fees Structure</p>
            <h2 class="h-display h2-section m-0 d-flex align-items-start gap-3">
                <i data-lucide="badge-indian-rupee" class="c-green flex-shrink-0" style="width:28px;height:28px;margin-top:6px;"></i>
                <span>Simple, transparent <span class="font-serif-accent c-orange" style="font-weight:400;">fees.</span></span>
            </h2>
        </div>
        <div class="grid-3">
            @foreach ([['label' => '24 Months EMI', 'value' => $emi, 'note' => 'Interest free', 'featured' => false], ['label' => 'Per Semester Fee', 'value' => $course->fee_per_semester, 'note' => 'Pay as you learn', 'featured' => true], ['label' => 'Full Program Fee', 'value' => $fullFee, 'note' => 'Total for '.$semesters.' semesters', 'featured' => false]] as $i => $f)
                <div data-reveal style="transition-delay: {{ $i * 70 }}ms">
                    <div data-testid="detail-fee-card-item" class="fee-card {{ $f['featured'] ? 'featured' : '' }}">
                        <p class="fee-label">{{ $f['label'] }}</p>
                        <p class="fee-value">₹{{ number_format($f['value']) }}<sup>*</sup></p>
                        <p class="fee-note">{{ $f['note'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section bg-mist" data-testid="detail-structure-section">
    <div class="wrap">
        <div class="mb-5" data-reveal>
            <p class="kicker mb-3">Program Overview &amp; Structure</p>
            <h2 class="h-display h2-section m-0 d-flex align-items-start gap-3">
                <i data-lucide="book-open" class="c-green flex-shrink-0" style="width:28px;height:28px;margin-top:6px;"></i>
                <span>What your <span class="font-serif-accent c-orange" style="font-weight:400;">learning journey looks like.</span></span>
            </h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="row g-4">
                    @foreach ([['icon' => 'clock', 'k' => 'Duration', 'v' => $course->duration], ['icon' => 'layers', 'k' => 'Structure', 'v' => $semesters.' Semesters'], ['icon' => 'monitor-play', 'k' => 'Delivery', 'v' => 'Live + Recorded Classes'], ['icon' => 'globe', 'k' => 'Learning Mode', 'v' => '100% Online · 24/7 LMS']] as $i => $s)
                        <div class="col-12 col-md-6" data-reveal style="transition-delay: {{ $i * 50 }}ms">
                            <div class="info-tile">
                                <span class="icon-badge icon-badge-peach">
                                    <i data-lucide="{{ $s['icon'] }}"></i>
                                </span>
                                <div>
                                    <p class="tile-k m-0">{{ $s['k'] }}</p>
                                    <p class="tile-v m-0">{{ $s['v'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4" data-reveal>
                <div class="panel-teal grain position-relative overflow-hidden h-100 d-flex flex-column justify-content-between" style="border-radius:14px; padding:2rem;" data-testid="detail-curriculum-cta">
                    <div class="position-relative" style="z-index:2;">
                        <h3 class="font-display text-white fw-bold mb-2" style="font-size:20px;">Full Semester-wise Curriculum</h3>
                        <p class="mb-0" style="font-size:14px; color:rgba(255,255,255,0.85); line-height:1.65;">The complete subject list for every semester is included in the official brochure — download it instantly.</p>
                    </div>
                    <a href="{{ route('brochure.download', $course) }}" data-testid="detail-structure-brochure-btn" class="btn-brand btn-pill-sm position-relative mt-4" style="z-index:2; align-self:flex-start; text-decoration:none;">
                        <i data-lucide="download" style="width:15px;height:15px;"></i>
                        <span>Download Brochure</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="panel panel-pad panel-pad-lg mt-5" data-testid="detail-advantages">
            <h3 class="font-display c-green fw-bold mb-4" style="font-size:22px;">{{ $course->university }} Advantages — Why we're the right fit for you</h3>
            <div class="row g-4">
                @foreach ($uniAdvantages as $i => $card)
                    <div class="col-12 col-md-6 d-flex gap-3" data-reveal style="transition-delay: {{ $i * 60 }}ms">
                        <span class="icon-badge icon-badge-peach">
                            <i data-lucide="{{ $card['icon'] }}"></i>
                        </span>
                        <div>
                            <h4 class="font-display fw-bold c-ink mb-1" style="font-size:16px;">{{ $card['title'] }}</h4>
                            <p class="mb-0" style="font-size:14px; color:var(--body-txt); line-height:1.65;">{{ $card['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section bg-paper" data-testid="detail-eligibility-section">
    <div class="wrap">
        <div class="mb-5" data-reveal>
            <p class="kicker mb-3">Eligibility Criteria</p>
            <h2 class="h-display h2-section m-0 d-flex align-items-start gap-3">
                <i data-lucide="check-circle-2" class="c-green flex-shrink-0" style="width:28px;height:28px;margin-top:6px;"></i>
                <span>Who can <span class="font-serif-accent c-orange" style="font-weight:400;">apply?</span></span>
            </h2>
        </div>

        @php
            $generalEligibility = $course->level === 'PG' ? [
                "Bachelor's degree (in the relevant field, as specified by the university) from a recognized university.",
                'Applicant must possess sufficient knowledge and understanding of English language & communication.',
                'Candidates whose first language is not English must have done at least past three (3) years of academic qualification under English medium.',
            ] : ($course->level === 'UG+PG' ? [
                '10+2 passed from a recognized board for the undergraduate stage of the integrated program.',
                'Seamless progression to the postgraduate stage as per university norms — no separate application needed.',
                'Applicant must possess sufficient knowledge and understanding of English language & communication.',
            ] : [
                '10+2 passed from a recognized board, or aspirants seeking a career in the respective field.',
                'Applicant must possess sufficient knowledge and understanding of English language & communication.',
                'Candidates whose first language is not English must have done at least past three (3) years of academic qualification under English medium.',
            ]);
        @endphp

        <div class="grid-3">
            <div data-reveal>
                <div class="panel panel-pad h-100" data-testid="detail-eligibility-general">
                    <span class="icon-badge icon-badge-peach mb-4"><i data-lucide="graduation-cap"></i></span>
                    <h3 class="font-display c-green fw-bold mb-4" style="font-size:18px;">General Criteria</h3>
                    <ul class="eligibility-list">
                        @foreach ($generalEligibility as $e)
                            <li><span class="bullet"></span>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div data-reveal style="transition-delay:60ms">
                <div class="panel panel-pad h-100" data-testid="detail-eligibility-indian">
                    <span class="icon-badge icon-badge-peach mb-4"><i data-lucide="users"></i></span>
                    <h3 class="font-display c-green fw-bold mb-4" style="font-size:18px;">For Indian Students</h3>
                    <ul class="eligibility-list">
                        @foreach ($generalEligibility as $e)
                            <li><span class="bullet"></span>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div data-reveal style="transition-delay:120ms">
                <div class="panel panel-pad h-100" data-testid="detail-eligibility-foreign">
                    <span class="icon-badge icon-badge-peach mb-4"><i data-lucide="globe"></i></span>
                    <h3 class="font-display c-green fw-bold mb-4" style="font-size:18px;">For Foreign Students</h3>
                    <ul class="eligibility-list">
                        @foreach ($foreignEligibility as $e)
                            <li><span class="bullet"></span>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-mist" data-testid="detail-admission-section">
    <div class="wrap">
        <div class="mb-5" data-reveal>
            <p class="kicker mb-3">Admission Process</p>
            <h2 class="h-display h2-section m-0 d-flex align-items-start gap-3">
                <i data-lucide="send" class="c-green flex-shrink-0" style="width:28px;height:28px;margin-top:6px;"></i>
                <span>From application to enrollment in <span class="font-serif-accent c-orange" style="font-weight:400;">5 steps.</span></span>
            </h2>
        </div>
        <div class="grid-5">
            @foreach ($admissionSteps as $i => $step)
                <div data-reveal style="transition-delay: {{ $i * 60 }}ms">
                    <div class="step-card">
                        <span class="step-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="icon-badge">
                            <i data-lucide="{{ $step['icon'] }}"></i>
                        </span>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section bg-paper" data-testid="detail-job-roles-section">
    <div class="wrap">
        <div class="mb-5" data-reveal>
            <p class="kicker mb-3">Career Outcomes</p>
            <h2 class="h-display h2-section m-0 d-flex align-items-start gap-3">
                <i data-lucide="briefcase" class="c-green flex-shrink-0" style="width:28px;height:28px;margin-top:6px;"></i>
                <span>Potential job roles after your <span class="font-serif-accent c-orange" style="font-weight:400;">{{ $course->degree_type }}.</span></span>
            </h2>
        </div>
        <div class="d-flex flex-wrap gap-2" data-testid="detail-job-role-chips">
            @foreach ($jobRoles as $i => $role)
                <span data-reveal class="chip chip-static" style="transition-delay: {{ $i * 40 }}ms; color:#173D4A;">
                    <span class="rounded-circle bg-orange flex-shrink-0" style="width:8px;height:8px;"></span>
                    {{ $role }}
                </span>
            @endforeach
        </div>

        <div class="hiring-strip" data-reveal data-testid="detail-hiring-partners">
            <p class="font-mono-brand text-uppercase text-center mb-4" style="font-size:11px; letter-spacing:0.22em; color:var(--body-txt); font-weight:600;">Top Hiring Partners</p>
            <div class="d-flex flex-wrap align-items-center justify-content-center" style="gap:2.5rem 3rem;">
                @foreach ($hiringLogos as $src)
                    <img src="{{ $src }}" alt="Hiring partner logo" loading="lazy">
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="bg-paper px-3 px-sm-4" data-testid="detail-next-step-section">
    <div data-reveal>
        <div class="wrap">
            <div class="panel-orange grain position-relative overflow-hidden text-center" style="border-radius:14px; padding: clamp(2.5rem, 5vw, 4rem) 1.5rem;">
                <span class="position-absolute" style="inset:0; background: radial-gradient(circle at 85% 20%, rgba(15,15,17,0.25), transparent 55%);"></span>
                <div class="position-relative mx-auto" style="z-index:2; max-width:48rem;">
                    <h2 class="h-display text-white m-0" style="font-size: clamp(26px, 3vw, 44px); line-height:1.15;">
                        Are you ready to take the next step in your <span class="font-serif-accent" style="font-weight:400;">career?</span>
                    </h2>
                    <button data-open-enquiry data-course-label="{{ $label }}" data-testid="detail-enroll-now-btn" class="btn-dark-c mt-4">
                        <i data-lucide="graduation-cap" style="width:16px;height:16px;"></i>
                        <span>Enroll Now</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-mist" data-testid="detail-faq-section">
    <div class="wrap" style="max-width:56rem;">
        <div class="mb-5 text-center" data-reveal>
            <p class="kicker mb-3">FAQs</p>
            <h2 class="h-display h2-section m-0">
                Frequently asked <span class="font-serif-accent c-orange" style="font-weight:400;">questions.</span>
            </h2>
        </div>
        <div class="d-flex flex-column gap-3" data-testid="detail-faq-list">
            @foreach ($faqs as $i => $faq)
                <details class="faq-item" data-reveal style="transition-delay: {{ $i * 50 }}ms" data-testid="detail-faq-item-{{ $i }}" {{ $i === 0 ? 'open' : '' }}>
                    <summary>
                        {{ $faq['q'] }}
                        <i data-lucide="chevron-down"></i>
                    </summary>
                    <p class="faq-a">{{ $faq['a'] }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>

@if ($related->isNotEmpty())
    <section class="section bg-paper" data-testid="detail-related-section">
        <div class="wrap">
            <div class="mb-5">
                <p class="kicker mb-3">Keep Exploring</p>
                <h2 class="h-display h2-section m-0">
                    Related <span class="font-serif-accent c-orange" style="font-weight:400;">programs.</span>
                </h2>
            </div>
            <div class="catalog-grid">
                @foreach ($related as $rc)
                    @include('partials.course-card', ['course' => $rc])
                @endforeach
            </div>
        </div>
    </section>
@endif

@include('partials.cta')
@endsection
