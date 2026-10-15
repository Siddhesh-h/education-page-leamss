@extends('layouts.app')

@section('content')
@php
$whyCards = [
    ['icon' => 'award', 'title' => 'High-Quality UGC Education', 'highlight' => 'UGC-DEB Approved', 'span' => 'md:col-span-8', 'desc' => 'India is home to globally recognized universities offering a variety of programs and specializations — degrees equal in value to regular full-time campus programs.'],
    ['icon' => 'badge-indian-rupee', 'title' => 'Affordable Education Options', 'highlight' => 'From ₹12,500 / Sem', 'span' => 'md:col-span-4', 'desc' => 'Studying in India is cost-effective compared to studying abroad, with various scholarships and financial aid available.'],
    ['icon' => 'briefcase', 'title' => 'Diverse Career Opportunities', 'highlight' => 'Placement Support', 'span' => 'md:col-span-4', 'desc' => 'Graduating from an Indian university opens up numerous employment prospects and internships across industries.'],
    ['icon' => 'laptop', 'title' => 'Flexible Distance Learning', 'highlight' => 'Learn Anywhere', 'span' => 'md:col-span-8', 'desc' => 'Learn at your own pace with live lectures, recorded archives and 24/7 LMS access — without pausing your career or shifting cities.'],
];
$marqueeItems = [
    'Amity University Online — NAAC A+',
    'Manipal University Jaipur — UGC DEB Entitled',
    'Jain University Online — NIRF Ranked',
    'DY Patil University Pune — NAAC A++',
    'Sikkim Manipal University — AICTE Approved',
    'UGC & DEB Approved Degrees',
    '100% Online & Flexible Learning',
];
@endphp

<section data-testid="hero-section" class="relative grain overflow-hidden bg-[#FBFBFB] min-h-[100svh] flex flex-col justify-center pt-36 pb-16">
    <div class="hero-grid absolute inset-0"></div>
    <div class="absolute -top-40 -left-40 w-[560px] h-[560px] rounded-full bg-[#FFE9E0] blur-[140px] pointer-events-none"></div>
    <div class="absolute top-1/3 right-0 w-[520px] h-[520px] rounded-full bg-[#D2F9FB]/80 blur-[140px] pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto w-full px-4 sm:px-8 grid lg:grid-cols-12 gap-14 items-center">
        <div class="lg:col-span-7">
            <div class="inline-flex items-center gap-2.5 rounded-full border border-[#FE570F]/30 bg-[#FFE9E0] px-4 py-2 mb-8" data-testid="hero-eyebrow-badge">
                <span class="relative flex w-2 h-2">
                    <span class="animate-ping-dot absolute inline-flex w-full h-full rounded-full bg-[#FE570F]"></span>
                    <span class="relative inline-flex w-2 h-2 rounded-full bg-[#FE570F]"></span>
                </span>
                <span class="font-mono-brand text-[11px] uppercase tracking-[0.22em] font-semibold text-[#DD4909]">Admissions Open 2026 · UGC-DEB Approved</span>
            </div>

            <h1 data-testid="hero-main-title" class="font-display text-[40px] leading-[1.06] sm:text-6xl lg:text-[60px] xl:text-[66px] font-extrabold tracking-tight text-[#0F0F11]">
                <span class="mask-line"><span style="animation-delay:.15s">Shape your future</span></span>
                <span class="mask-line"><span style="animation-delay:.28s">with accredited</span></span>
                <span class="mask-line"><span style="animation-delay:.41s">
                    <span class="inline-block mt-3 bg-[#FE570F] text-white px-5 py-2" style="border-radius:0 30px 0 30px; box-shadow:12px -10px 0 -2px #26787C;">
                        <span class="font-serif-accent font-normal">online degrees.</span>
                    </span>
                </span></span>
            </h1>

            <p data-testid="hero-subtitle" class="mt-8 text-[#696969] text-base sm:text-lg leading-relaxed max-w-xl" data-reveal>
                Compare {{ $count }}+ UGC-recognized online MBA, MCA, BBA, BCA, M.Com &amp; MA degrees from Amity, Manipal Jaipur, Jain, DY Patil Pune &amp; Sikkim Manipal — flexible distance learning that fits around your life.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4" data-reveal>
                <a href="#catalog" data-testid="hero-explore-courses-btn" class="btn-brand group inline-flex items-center justify-center gap-2.5 rounded-full px-8 py-4 text-sm font-bold">
                    <span class="inline-flex items-center gap-2.5">
                        Explore {{ $count }}+ Degree Courses
                        <i data-lucide="arrow-right" class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </a>
                <button data-open-enquiry data-testid="hero-book-slot-btn" class="inline-flex items-center justify-center gap-2.5 rounded-full px-8 py-4 text-sm font-bold text-[#0F0F11] bg-white border border-[#B7B7B7] transition-all duration-300 hover:border-[#FE570F] hover:text-[#FE570F]">
                    <i data-lucide="calendar-check" class="w-4 h-4"></i>
                    Book Free Expert Slot
                </button>
            </div>
        </div>

        <div class="lg:col-span-5 relative hidden md:block" data-reveal data-parallax data-testid="hero-image-frame">
            <div class="relative rounded-[2rem] overflow-hidden border border-[#878787]/40 bg-white shadow-[0_40px_90px_-40px_rgba(15,15,17,0.35)]">
                <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=85&w=1400&auto=format&fit=crop" alt="Graduates celebrating by throwing their caps in the air" class="w-full h-[540px] object-cover">
                <span class="absolute inset-0 bg-gradient-to-t from-[#0F0F11]/60 via-transparent to-transparent"></span>
                <div class="absolute bottom-5 left-5 right-5 flex items-center justify-between">
                    <p class="font-mono-brand text-[10px] uppercase tracking-[0.2em] text-white/85">Class of 2026 · 100% Online</p>
                    <i data-lucide="badge-check" class="w-5 h-5 text-[#FE570F]"></i>
                </div>
            </div>

            <div class="animate-float absolute -top-6 -right-4 bg-white border border-[#E8E8E8] rounded-2xl px-5 py-3.5 shadow-[0_20px_45px_-20px_rgba(15,15,17,0.3)]" data-testid="hero-floating-chip-courses">
                <p class="font-display text-2xl font-extrabold text-[#26787C] leading-none">{{ $count }}+</p>
                <p class="font-mono-brand text-[10px] uppercase tracking-[0.16em] text-[#696969] mt-1">UGC Courses</p>
            </div>

            <div class="absolute -bottom-8 -left-10 flex items-end gap-3">
                <div class="animate-float w-36 h-44 rounded-2xl overflow-hidden border-4 border-white shadow-2xl -rotate-6" style="animation-delay:1s">
                    <img src="https://images.unsplash.com/photo-1623461487986-9400110de28e?q=85&w=700&auto=format&fit=crop" alt="Graduate in cap and gown" class="w-full h-full object-cover">
                </div>
                <div class="animate-float bg-white border border-[#E8E8E8] rounded-2xl px-5 py-3.5 shadow-[0_20px_45px_-20px_rgba(15,15,17,0.3)]" style="animation-delay:.5s" data-testid="hero-floating-chip-fee">
                    <p class="font-mono-brand text-lg font-bold text-[#FE570F] leading-none">₹{{ number_format($minFee) }}</p>
                    <p class="font-mono-brand text-[10px] uppercase tracking-[0.16em] text-[#696969] mt-1">Starting / Sem</p>
                </div>
            </div>
        </div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto w-full px-4 sm:px-8 mt-20" data-reveal>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 border-t border-[#E0E0E0] pt-8" data-testid="hero-stats">
            <div>
                <p class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-[#26787C]">{{ $count }}+</p>
                <p class="font-mono-brand text-[10px] sm:text-[11px] uppercase tracking-[0.18em] text-[#696969] mt-1.5">Online Degree Programs</p>
            </div>
            <div>
                <p class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-[#26787C]">05</p>
                <p class="font-mono-brand text-[10px] sm:text-[11px] uppercase tracking-[0.18em] text-[#696969] mt-1.5">University Partners</p>
            </div>
            <div>
                <p class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-[#26787C]">₹{{ number_format($minFee) }}</p>
                <p class="font-mono-brand text-[10px] sm:text-[11px] uppercase tracking-[0.18em] text-[#696969] mt-1.5">Lowest Fee / Semester</p>
            </div>
            <div>
                <p class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-[#26787C]">2026</p>
                <p class="font-mono-brand text-[10px] sm:text-[11px] uppercase tracking-[0.18em] text-[#696969] mt-1.5">Admissions Now Open</p>
            </div>
        </div>
    </div>
</section>

<section data-testid="university-marquee-section" class="relative z-10 bg-[#FBFBFB] py-8 overflow-hidden">
    <div class="-rotate-[0.6deg] scale-[1.03] bg-[#FE570F] py-5 overflow-hidden marquee-hover shadow-[0_20px_60px_-20px_rgba(254,87,15,0.55)]">
        <div class="flex w-max animate-marquee">
            <div class="flex items-center gap-12 pr-12 shrink-0">
                @foreach ($marqueeItems as $item)
                    <span class="flex items-center gap-12 shrink-0">
                        <span class="font-display text-lg sm:text-xl font-bold tracking-tight text-white whitespace-nowrap">{{ $item }}</span>
                        <i data-lucide="graduation-cap" class="w-5 h-5 text-white/70 shrink-0"></i>
                    </span>
                @endforeach
            </div>
            <div class="flex items-center gap-12 pr-12 shrink-0" aria-hidden="true">
                @foreach ($marqueeItems as $item)
                    <span class="flex items-center gap-12 shrink-0">
                        <span class="font-display text-lg sm:text-xl font-bold tracking-tight text-white whitespace-nowrap">{{ $item }}</span>
                        <i data-lucide="graduation-cap" class="w-5 h-5 text-white/70 shrink-0"></i>
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="bg-[#F9F9F9] text-[#0F0F11] py-24 sm:py-28" data-testid="why-choose-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-14">
            <div data-reveal>
                <p class="font-mono-brand text-xs uppercase tracking-[0.25em] text-[#FE570F] font-semibold mb-4">Why Leamss</p>
                <h2 class="font-display text-3xl sm:text-4xl lg:text-[44px] font-extrabold tracking-tight leading-[1.1] max-w-xl">
                    Why choose an online degree <span class="font-serif-accent font-normal text-[#FE570F]">in India?</span>
                </h2>
            </div>
            <p class="text-[#696969] max-w-md text-[15px] leading-relaxed lg:text-right" data-reveal>
                A robust educational system with world-renowned institutions — cost-effective education without compromising on quality.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            @foreach ($whyCards as $i => $card)
                <div data-reveal class="col-span-full {{ $card['span'] }}" style="transition-delay: {{ $i * 80 }}ms">
                    <div class="group relative h-full rounded-[14px] bg-white border border-[#878787]/40 p-8 sm:p-10 overflow-hidden transition-all duration-500 hover:border-[#FE570F]/70 hover:shadow-[0_24px_50px_-20px_rgba(194,194,194,0.55)]">
                        <span class="absolute top-6 right-8 font-display text-6xl font-extrabold text-[#26787C]/10 select-none group-hover:text-[#FE570F]/15 transition-colors duration-500">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <div class="w-12 h-12 rounded-full bg-[#26787C] grid place-items-center mb-6 transition-all duration-500 group-hover:bg-[#FE570F] group-hover:-rotate-6 group-hover:scale-110">
                            <i data-lucide="{{ $card['icon'] }}" class="w-5 h-5 text-white"></i>
                        </div>
                        <div class="flex flex-wrap items-center gap-3 mb-3">
                            <h3 class="font-display text-xl sm:text-2xl font-bold tracking-tight text-[#26787C]">{{ $card['title'] }}</h3>
                            <span class="font-mono-brand text-[10px] uppercase tracking-[0.18em] font-semibold text-[#DD4909] bg-[#FFE9E0] border border-[#FE570F]/25 rounded-full px-3 py-1">{{ $card['highlight'] }}</span>
                        </div>
                        <p class="text-[#696969] text-[15px] leading-relaxed max-w-lg">{{ $card['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="catalog" class="bg-[#FBFBFB] text-[#0F0F11] pb-24 sm:pb-28" data-testid="course-catalog-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">
        <div class="mb-10">
            <p class="font-mono-brand text-xs uppercase tracking-[0.25em] text-[#FE570F] font-semibold mb-4">Course Catalog 2026</p>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-[44px] font-extrabold tracking-tight leading-[1.1]">
                Find the degree that <span class="font-serif-accent font-normal text-[#FE570F]">moves you forward.</span>
            </h2>
        </div>
    </div>

    <form id="filter-form" method="GET" action="{{ route('home') }}" data-testid="sticky-filter-bar" class="sticky top-[60px] sm:top-[64px] z-40 border-y border-[#E8E8E8] bg-white/90 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 py-4 flex flex-col gap-3">
            <div class="flex flex-col sm:flex-row gap-3">
                <div class="relative flex-1">
                    <i data-lucide="search" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-[#878787]"></i>
                    <input type="text" name="search" value="{{ $search }}" data-testid="course-search-input" placeholder="Search courses — e.g. Digital Marketing, AI, Finance…" class="w-full rounded-lg border border-[#B7B7B7] bg-white pl-10 pr-4 py-2.5 text-sm placeholder:text-[#9A9A9A] focus:border-[#FE570F] focus:ring-2 focus:ring-[#FE570F]/20 transition outline-none">
                </div>
                <div class="grid grid-cols-2 sm:flex sm:gap-3">
                    <div class="relative flex-1">
                        <span class="absolute left-3.5 top-1/2 -translate-y-1/2 font-mono-brand text-[10px] uppercase tracking-wider text-[#878787] pointer-events-none">Uni</span>
                        <select name="university" data-auto-submit data-testid="university-filter-select" class="w-full appearance-none rounded-lg border border-[#B7B7B7] bg-white pl-10 pr-8 py-2.5 text-[13px] font-semibold text-[#0F0F11] cursor-pointer transition-colors hover:border-[#FE570F] focus:border-[#FE570F]">
                            <option value="">All Universities</option>
                            @foreach ($universities as $u)
                                <option value="{{ $u }}" @if ($university === $u) selected @endif>{{ $u }}</option>
                            @endforeach
                        </select>
                        <i data-lucide="chevron-down" class="absolute right-2.5 top-1/2 -translate-y-1/2 w-4 h-4 text-[#878787] pointer-events-none"></i>
                    </div>
                    <div class="relative flex-1 sm:w-44">
                        <select name="sort" data-auto-submit data-testid="sort-select" class="w-full appearance-none rounded-lg border border-[#B7B7B7] bg-white pl-4 pr-8 py-2.5 text-[13px] font-semibold text-[#0F0F11] cursor-pointer transition-colors hover:border-[#FE570F] focus:border-[#FE570F]">
                            <option value="featured" @if ($sort === 'featured') selected @endif>Sort: Featured</option>
                            <option value="price-asc" @if ($sort === 'price-asc') selected @endif>Fee: Low to High</option>
                            <option value="price-desc" @if ($sort === 'price-desc') selected @endif>Fee: High to Low</option>
                            <option value="duration" @if ($sort === 'duration') selected @endif>Duration</option>
                        </select>
                        <i data-lucide="chevron-down" class="absolute right-2.5 top-1/2 -translate-y-1/2 w-4 h-4 text-[#878787] pointer-events-none"></i>
                    </div>
                </div>
                <input type="hidden" name="degree" value="{{ $degree }}" data-degree-input>
                <button type="button" data-reset-filters data-testid="filter-reset-btn" class="shrink-0 inline-flex items-center justify-center gap-1.5 rounded-lg px-4 py-2.5 text-[13px] font-semibold border transition-all duration-300 border-[#E02735] text-[#E02735] hover:bg-[#E02735] hover:text-white">
                    <i data-lucide="rotate-ccw" class="w-3.5 h-3.5"></i>
                    Reset
                </button>
            </div>

            <div data-testid="degree-type-chips" class="flex gap-2 overflow-x-auto no-scrollbar -mx-1 px-1">
                @foreach ($degreeChips as $chip)
                    <button type="button" data-degree-chip="{{ $chip }}" data-testid="degree-chip-{{ strtolower(str_replace('.', '-', $chip)) }}"
                        class="shrink-0 rounded-full px-4 py-1.5 text-xs font-semibold tracking-wide transition-all duration-300 {{ $degree === $chip ? 'bg-[#FE570F] text-white shadow-md shadow-[#FE570F]/30' : 'bg-white border border-[#B7B7B7] text-[#424242] hover:border-[#FE570F] hover:text-[#FE570F]' }}">
                        {{ $chip }}
                    </button>
                @endforeach
            </div>
        </div>
    </form>

    <div class="max-w-7xl mx-auto px-4 sm:px-8 pt-8">
        <p class="font-mono-brand text-xs text-[#696969] mb-6" data-testid="results-count">
            SHOWING {{ $courses->count() }} OF {{ $allCourses->count() }} PROGRAMS
        </p>

        @if ($courses->isEmpty())
            <div class="rounded-[14px] border-2 border-dashed border-[#B7B7B7] bg-white/70 py-20 text-center" data-testid="catalog-empty-state">
                <p class="font-display text-2xl font-bold mb-2">No courses match your filters</p>
                <p class="text-[#696969] text-sm mb-6">Try a different keyword, university or degree type.</p>
                <a href="{{ route('home') }}" class="btn-brand inline-flex rounded-full px-6 py-3 text-sm font-semibold"><span>Reset all filters</span></a>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($courses as $course)
                    @include('partials.course-card', ['course' => $course])
                @endforeach
            </div>
        @endif
    </div>
</section>

@include('partials.cta')
@endsection
