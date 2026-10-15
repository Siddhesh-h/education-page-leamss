@extends('layouts.app')

@section('content')
<section class="hero-section grain" data-testid="hero-section">
    <div class="hero-grid"></div>
    <span class="blob blob-peach" style="top:-10rem; left:-10rem; width:560px; height:560px;"></span>
    <span class="blob blob-mint" style="top:33%; right:0; width:520px; height:520px;"></span>

    <div class="wrap position-relative" style="z-index:2;">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7">
                <div class="chip chip-peach chip-static mb-4" data-reveal data-testid="hero-eyebrow-badge">
                    <span class="position-relative d-inline-flex" style="width:8px;height:8px;">
                        <span class="animate-ping-dot position-absolute bg-orange rounded-circle" style="inset:0;"></span>
                        <span class="position-relative bg-orange rounded-circle" style="width:8px;height:8px;"></span>
                    </span>
                    Admissions Open 2026 · UGC-DEB Approved
                </div>

                <h1 class="h-display h1-hero m-0" data-testid="hero-main-title">
                    <span class="mask-line"><span style="animation-delay:.15s">Shape your future</span></span>
                    <span class="mask-line"><span style="animation-delay:.28s">with accredited</span></span>
                    <span class="mask-line"><span style="animation-delay:.41s"><span class="title-block"><span class="font-serif-accent" style="font-weight:400;">online degrees.</span></span></span></span>
                </h1>

                <p class="body-text body-text-lg mt-4" style="max-width:36rem;" data-reveal data-testid="hero-subtitle">
                    Compare {{ $count }}+ UGC-recognized online MBA, MCA, BBA, BCA, M.Com &amp; MA degrees from Amity, Manipal Jaipur, Jain, DY Patil Pune &amp; Sikkim Manipal — flexible distance learning that fits around your life.
                </p>

                <div class="d-flex flex-column flex-sm-row gap-3 mt-5" data-reveal>
                    <a href="#catalog" data-testid="hero-explore-courses-btn" class="btn-brand btn-pill group" style="text-decoration:none;">
                        <span class="d-inline-flex align-items-center gap-2">
                            Explore {{ $count }}+ Degree Courses
                            <i data-lucide="arrow-right" style="width:16px;height:16px;"></i>
                        </span>
                    </a>
                    <button data-open-enquiry data-testid="hero-book-slot-btn" class="btn-outline-light-c">
                        <i data-lucide="calendar-check" style="width:16px;height:16px;"></i>
                        Book Free Expert Slot
                    </button>
                </div>
            </div>

            <div class="col-lg-5 d-none d-md-block position-relative" data-reveal data-parallax data-testid="hero-image-frame">
                <div class="hero-media">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=85&w=1400&auto=format&fit=crop" alt="Graduates celebrating by throwing their caps in the air">
                    <span class="hero-media-overlay"></span>
                    <div class="position-absolute bottom-0 start-0 end-0 d-flex align-items-center justify-content-between px-4 pb-4">
                        <p class="font-mono-brand m-0 text-uppercase" style="font-size:10px; letter-spacing:0.2em; color:rgba(255,255,255,0.85);">Class of 2026 · 100% Online</p>
                        <i data-lucide="badge-check" class="c-orange" style="width:20px;height:20px;"></i>
                    </div>
                </div>

                <div class="animate-float float-chip" style="top:-24px; right:-16px;" data-testid="hero-floating-chip-courses">
                    <p class="chip-value m-0">{{ $count }}+</p>
                    <p class="chip-label m-0">UGC Courses</p>
                </div>

                <div class="position-absolute d-flex align-items-end gap-3" style="bottom:-32px; left:-40px;">
                    <div class="animate-float polaroid" style="animation-delay:1s;">
                        <img src="https://images.unsplash.com/photo-1623461487986-9400110de28e?q=85&w=700&auto=format&fit=crop" alt="Graduate in cap and gown">
                    </div>
                    <div class="animate-float float-chip" style="position:static; animation-delay:.5s;" data-testid="hero-floating-chip-fee">
                        <p class="chip-value-orange m-0">₹{{ number_format($minFee) }}</p>
                        <p class="chip-label m-0">Starting / Sem</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="stat-grid mt-5" data-reveal data-testid="hero-stats">
            <div>
                <p class="stat-value m-0">{{ $count }}+</p>
                <p class="stat-label m-0">Online Degree Programs</p>
            </div>
            <div>
                <p class="stat-value m-0">05</p>
                <p class="stat-label m-0">University Partners</p>
            </div>
            <div>
                <p class="stat-value m-0">₹{{ number_format($minFee) }}</p>
                <p class="stat-label m-0">Lowest Fee / Semester</p>
            </div>
            <div>
                <p class="stat-value m-0">2026</p>
                <p class="stat-label m-0">Admissions Now Open</p>
            </div>
        </div>
    </div>
</section>

<section data-testid="university-marquee-section" class="bg-paper py-4 overflow-hidden position-relative" style="z-index:10;">
    <div class="marquee-band marquee-hover">
        <div class="marquee-track">
            @foreach ([1, 2] as $half)
                <div class="marquee-half" @if ($half === 2) aria-hidden="true" @endif>
                    @foreach (['Amity University Online — NAAC A+', 'Manipal University Jaipur — UGC DEB Entitled', 'Jain University Online — NIRF Ranked', 'DY Patil University Pune — NAAC A++', 'Sikkim Manipal University — AICTE Approved', 'UGC & DEB Approved Degrees', '100% Online & Flexible Learning'] as $item)
                        <span class="marquee-item">
                            <span class="font-display">{{ $item }}</span>
                            <i data-lucide="graduation-cap" style="width:20px;height:20px;color:rgba(255,255,255,0.7);"></i>
                        </span>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-mist section" data-testid="why-choose-section">
    <div class="wrap">
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end gap-4 mb-5">
            <div data-reveal>
                <p class="kicker mb-3">Why Leamss</p>
                <h2 class="h-display h2-section m-0" style="max-width:36rem;">
                    Why choose an online degree <span class="font-serif-accent c-orange" style="font-weight:400;">in India?</span>
                </h2>
            </div>
            <p class="body-text mb-0" style="max-width:28rem; font-size:15px;" data-reveal>
                A robust educational system with world-renowned institutions — cost-effective education without compromising on quality.
            </p>
        </div>

        @php
            $whyCards = [
                ['icon' => 'award', 'title' => 'High-Quality UGC Education', 'highlight' => 'UGC-DEB Approved', 'span' => 'span-8', 'desc' => 'India is home to globally recognized universities offering a variety of programs and specializations — degrees equal in value to regular full-time campus programs.'],
                ['icon' => 'badge-indian-rupee', 'title' => 'Affordable Education Options', 'highlight' => 'From ₹12,500 / Sem', 'span' => 'span-4', 'desc' => 'Studying in India is cost-effective compared to studying abroad, with various scholarships and financial aid available.'],
                ['icon' => 'briefcase', 'title' => 'Diverse Career Opportunities', 'highlight' => 'Placement Support', 'span' => 'span-4', 'desc' => 'Graduating from an Indian university opens up numerous employment prospects and internships across industries.'],
                ['icon' => 'laptop', 'title' => 'Flexible Distance Learning', 'highlight' => 'Learn Anywhere', 'span' => 'span-8', 'desc' => 'Learn at your own pace with live lectures, recorded archives and 24/7 LMS access — without pausing your career or shifting cities.'],
            ];
        @endphp

        <div class="grid-12">
            @foreach ($whyCards as $i => $card)
                <div class="{{ $card['span'] }}" data-reveal style="transition-delay: {{ $i * 80 }}ms;">
                    <div class="panel panel-hover position-relative h-100 grain" style="padding: 2.5rem;">
                        <span class="ghost-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="icon-badge mb-4"><i data-lucide="{{ $card['icon'] }}"></i></span>
                        <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                            <h3 class="h-display c-green m-0" style="font-size:clamp(20px,1.8vw,24px);">{{ $card['title'] }}</h3>
                            <span class="chip chip-peach">{{ $card['highlight'] }}</span>
                        </div>
                        <p class="body-text mb-0" style="font-size:15px; max-width:32rem;">{{ $card['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="catalog" class="bg-paper" style="padding-bottom:6rem;" data-testid="course-catalog-section">
    <div class="wrap">
        <div class="mb-5">
            <p class="kicker mb-3">Course Catalog 2026</p>
            <h2 class="h-display h2-section m-0">
                Find the degree that <span class="font-serif-accent c-orange" style="font-weight:400;">moves you forward.</span>
            </h2>
        </div>
    </div>

    <form id="filter-form" method="GET" action="{{ route('education.domestic') }}" data-testid="sticky-filter-bar" class="filter-bar">
        <div class="wrap d-flex flex-column gap-3 py-4">
            <div class="filter-row">
                <div class="search-wrap">
                    <i data-lucide="search" class="search-icon"></i>
                    <input type="text" name="search" value="{{ $search }}" data-testid="course-search-input" placeholder="Search courses — e.g. Digital Marketing, AI, Finance…" class="form-control">
                </div>
                <div class="d-grid gap-3 d-sm-flex">
                    <div class="select-wrap" style="flex:1;">
                        <span class="select-uni-tag">Uni</span>
                        <select name="university" data-auto-submit data-testid="university-filter-select" class="form-select">
                            <option value="">All Universities</option>
                            @foreach ($universities as $u)
                                <option value="{{ $u }}" @if ($university === $u) selected @endif>{{ $u }}</option>
                            @endforeach
                        </select>
                        <i data-lucide="chevron-down" class="select-icon"></i>
                    </div>
                    <div class="select-wrap" style="flex:1;">
                        <select name="sort" data-auto-submit data-testid="sort-select" class="form-select" style="padding-left:16px;">
                            <option value="featured" @if ($sort === 'featured') selected @endif>Sort: Featured</option>
                            <option value="price-asc" @if ($sort === 'price-asc') selected @endif>Fee: Low to High</option>
                            <option value="price-desc" @if ($sort === 'price-desc') selected @endif>Fee: High to Low</option>
                            <option value="duration" @if ($sort === 'duration') selected @endif>Duration</option>
                        </select>
                        <i data-lucide="chevron-down" class="select-icon"></i>
                    </div>
                </div>
                <input type="hidden" name="degree" value="{{ $degree }}" data-degree-input>
                <button type="button" data-reset-filters data-testid="filter-reset-btn" class="btn-reset" @if (!($search || $university || $degree !== 'All' || $sort !== 'featured')) disabled @endif>
                    <i data-lucide="rotate-ccw" style="width:14px;height:14px;"></i>
                    Reset
                </button>
            </div>

            <div class="chips-row" data-testid="degree-type-chips">
                @foreach ($degreeChips as $chip)
                    <button type="button" data-degree-chip="{{ $chip }}" data-testid="degree-chip-{{ strtolower(str_replace('.', '-', $chip)) }}" class="chip {{ $degree === $chip ? 'chip-active' : '' }}">{{ $chip }}</button>
                @endforeach
            </div>
        </div>
    </form>

    <div class="wrap" style="padding-top:2rem;">
        <p class="results-count" data-testid="results-count">
            SHOWING {{ $courses->count() }} OF {{ $allCourses->count() }} PROGRAMS
        </p>

        @if ($courses->isEmpty())
            <div class="empty-state" data-testid="catalog-empty-state">
                <p class="h-display c-ink mb-2" style="font-size:24px;">No courses match your filters</p>
                <p class="c-body mb-4" style="font-size:14px;">Try a different keyword, university or degree type.</p>
                <a href="{{ route('education.domestic') }}" class="btn-brand btn-pill"><span>Reset all filters</span></a>
            </div>
        @else
            <div class="catalog-grid">
                @foreach ($courses as $course)
                    @include('partials.course-card', ['course' => $course])
                @endforeach
            </div>
        @endif
    </div>
</section>

@include('partials.cta')
@endsection
