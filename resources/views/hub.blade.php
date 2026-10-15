@extends('layouts.app')

@section('title', 'Leamss | Migration & Education — Your Next Step Starts Here')

@section('content')
<section class="hero-section grain" data-testid="hub-section">
    <div class="hero-grid"></div>
    <span class="blob blob-peach" style="top:-10rem; left:-10rem; width:560px; height:560px;"></span>
    <span class="blob blob-mint" style="top:25%; right:0; width:520px; height:520px;"></span>

    <div class="wrap position-relative" style="z-index:2;">
        <div style="max-width:48rem;">
            <div class="chip chip-peach chip-static mb-4" data-reveal data-testid="hub-eyebrow-badge">
                <span class="position-relative d-inline-flex" style="width:8px;height:8px;">
                    <span class="animate-ping-dot position-absolute bg-orange rounded-circle" style="inset:0;"></span>
                    <span class="position-relative bg-orange rounded-circle" style="width:8px;height:8px;"></span>
                </span>
                Ladhani Education &amp; Migration Services
            </div>

            <h1 class="h-display h1-hero m-0" data-testid="hub-main-title">
                <span class="mask-line"><span style="animation-delay:.15s">Where do you want</span></span>
                <span class="mask-line"><span style="animation-delay:.28s">to go <span class="font-serif-accent text-gradient-brand" style="font-weight:400;">next?</span></span></span>
            </h1>

            <p class="body-text body-text-lg mt-4" style="max-width:36rem;" data-reveal data-testid="hub-subtitle">
                Two paths, one trusted partner. Pursue a UGC-recognized online degree, or let our
                experts take you across borders — study abroad, PR and visas, all under one roof.
            </p>
        </div>

        <div class="grid-2 mt-5" data-testid="hub-options">
            <a href="{{ route('migration') }}" data-reveal data-testid="hub-option-migration" class="option-card option-teal grain">
                <span class="clip-corner clip-corner-tl"></span>
                <span class="blob blob-teal" style="bottom:-5rem; right:-5rem; width:288px; height:288px;"></span>
                <span class="option-icon"><i data-lucide="plane"></i></span>
                <p class="kicker kicker-cream kicker-sm option-kicker">Path 01 · Borderless</p>
                <h2 class="option-title">
                    Migration
                    <i data-lucide="arrow-right" class="option-arrow"></i>
                </h2>
                <p class="option-desc">
                    Permanent &amp; temporary residency for Canada and Australia — points calculators,
                    visa processing and expert guidance.
                </p>
                <div class="option-chips">
                    @foreach (['Canada PR', 'Australia PR', 'Study Visas'] as $chip)
                        <span class="chip chip-glass">{{ $chip }}</span>
                    @endforeach
                </div>
            </a>

            <a href="{{ route('education') }}" data-reveal data-testid="hub-option-education" style="transition-delay:100ms;" class="option-card option-orange grain">
                <span class="position-absolute inset-0" style="inset:0; background: radial-gradient(circle at 85% 15%, rgba(15,15,17,0.22), transparent 55%); pointer-events:none;"></span>
                <span class="option-icon"><i data-lucide="graduation-cap"></i></span>
                <p class="kicker kicker-cream kicker-sm option-kicker">Path 02 · Degree First</p>
                <h2 class="option-title">
                    Education
                    <i data-lucide="arrow-right" class="option-arrow"></i>
                </h2>
                <p class="option-desc" style="color:rgba(255,255,255,0.9);">
                    {{ $count }}+ UGC-recognized online degrees from India's top universities — or explore
                    study abroad across 6 global destinations.
                </p>
                <div class="option-chips">
                    @foreach (['Domestic · Online Degrees', 'International · Study Abroad'] as $chip)
                        <span class="chip chip-glass">{{ $chip }}</span>
                    @endforeach
                </div>
            </a>
        </div>

        <div class="stat-grid mt-5" data-reveal data-testid="hub-stats">
            <div>
                <p class="stat-value m-0">{{ $count }}+</p>
                <p class="stat-label m-0">Online Degree Programs</p>
            </div>
            <div>
                <p class="stat-value m-0">06</p>
                <p class="stat-label m-0">Study Abroad Destinations</p>
            </div>
            <div>
                <p class="stat-value m-0">04</p>
                <p class="stat-label m-0">Migration Pathways</p>
            </div>
            <div>
                <p class="stat-value m-0">1994</p>
                <p class="stat-label m-0">Group Legacy Since</p>
            </div>
        </div>
    </div>
</section>
@endsection
