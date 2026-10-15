@extends('layouts.app')

@section('title', 'Education | Leamss — Online Degrees & Study Abroad')

@section('content')
<section class="hero-section grain" data-testid="education-hub-section">
    <div class="hero-grid"></div>
    <span class="blob blob-peach" style="top:-8rem; right:-8rem; width:520px; height:520px;"></span>
    <span class="blob blob-mint" style="bottom:0; left:-8rem; width:480px; height:480px;"></span>

    <div class="wrap position-relative" style="z-index:2;">
        <div class="breadcrumb-c" data-testid="education-breadcrumb">
            <a href="{{ route('hub') }}">Home</a>
            <span class="sep">/</span>
            <span class="current">Education</span>
        </div>

        <div style="max-width:48rem;">
            <h1 class="h-display h1-page m-0" data-testid="education-main-title">
                <span class="mask-line"><span style="animation-delay:.15s">Your education.</span></span>
                <span class="mask-line"><span style="animation-delay:.28s">Your <span class="font-serif-accent text-gradient-brand" style="font-weight:400;">way.</span></span></span>
            </h1>

            <p class="body-text body-text-lg mt-4" style="max-width:36rem;" data-reveal data-testid="education-subtitle">
                Stay home and earn a UGC-recognized online degree, or fly out and study at a global
                campus. Pick your route — the search is the same, the opportunity is yours.
            </p>
        </div>

        <div class="grid-2 mt-5" data-testid="education-options">
            <a href="{{ route('education.domestic') }}" data-reveal data-testid="education-option-domestic" class="option-card option-orange grain">
                <span class="position-absolute" style="inset:0; background: radial-gradient(circle at 85% 15%, rgba(15,15,17,0.22), transparent 55%); pointer-events:none;"></span>
                <span class="option-icon"><i data-lucide="home"></i></span>
                <p class="kicker kicker-cream kicker-sm option-kicker">Route 01 · Learn From India</p>
                <h2 class="option-title">
                    Domestic
                    <i data-lucide="arrow-right" class="option-arrow"></i>
                </h2>
                <p class="option-desc" style="color:rgba(255,255,255,0.9);">
                    {{ $count }}+ UGC-DEB entitled online MBA, MCA, BBA, BCA, M.Com, MA &amp; BA degrees —
                    live + recorded classes, EMI options, 100% online.
                </p>
                <div class="option-chips">
                    @foreach (['Search '.$count.' Courses', '5 University Partners', 'From ₹'.number_format($minFee).' / Sem'] as $chip)
                        <span class="chip chip-glass">{{ $chip }}</span>
                    @endforeach
                </div>
            </a>

            <a href="{{ route('education.international') }}" data-reveal data-testid="education-option-international" style="transition-delay:100ms;" class="option-card option-teal grain">
                <span class="clip-corner clip-corner-tl"></span>
                <span class="blob blob-teal" style="bottom:-5rem; right:-5rem; width:288px; height:288px;"></span>
                <span class="option-icon"><i data-lucide="globe"></i></span>
                <p class="kicker kicker-cream kicker-sm option-kicker">Route 02 · Learn Abroad</p>
                <h2 class="option-title">
                    International
                    <i data-lucide="arrow-right" class="option-arrow"></i>
                </h2>
                <p class="option-desc">
                    Explore study abroad across the UK, USA, Canada, Australia, New Zealand and
                    Europe — with end-to-end admission &amp; visa support.
                </p>
                <div class="option-chips">
                    @foreach (['6 Destinations', 'University Shortlisting', 'Visa Support'] as $chip)
                        <span class="chip chip-glass">{{ $chip }}</span>
                    @endforeach
                </div>
            </a>
        </div>
    </div>
</section>

<section data-testid="education-marquee-section" class="bg-paper py-4 overflow-hidden position-relative" style="z-index:10;">
    <div class="marquee-band marquee-hover">
        <div class="marquee-track">
            @foreach ([1, 2] as $half)
                <div class="marquee-half" @if ($half === 2) aria-hidden="true" @endif>
                    @foreach (['Amity University Online — NAAC A+', 'Manipal University Jaipur — UGC DEB Entitled', 'Jain University Online — NIRF Ranked', 'DY Patil University Pune — NAAC A++', 'Sikkim Manipal University — AICTE Approved', 'UK · USA · Canada · Australia · NZ · Europe'] as $item)
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

@include('partials.cta')
@endsection
