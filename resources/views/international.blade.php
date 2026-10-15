@extends('layouts.app')

@section('title', 'Study Abroad | Leamss — International Education')

@section('content')
@php
$destinations = [
    ['name' => 'UK', 'region' => 'Europe', 'icon' => 'landmark', 'href' => 'https://leamss.com/study-abroad/study-in-uk'],
    ['name' => 'USA', 'region' => 'Americas', 'icon' => 'flag', 'href' => 'https://leamss.com/study-abroad/study-in-usa'],
    ['name' => 'Canada', 'region' => 'Americas', 'icon' => 'trees', 'href' => 'https://leamss.com/study-abroad/study-in-canada'],
    ['name' => 'Australia', 'region' => 'Oceania', 'icon' => 'palmtree', 'href' => 'https://leamss.com/study-abroad/study-in-australia'],
    ['name' => 'New Zealand', 'region' => 'Oceania', 'icon' => 'mountain', 'href' => 'https://leamss.com/study-abroad/study-in-new-zealand'],
    ['name' => 'European Countries', 'region' => 'Europe', 'icon' => 'globe', 'href' => 'https://leamss.com/study-abroad/study-in-european-countries'],
];
$regions = ['All', 'Europe', 'Americas', 'Oceania'];
@endphp

<section class="hero-sub grain detail-hero-pad" data-testid="international-hero-section">
    <div class="hero-grid"></div>
    <span class="blob blob-mint" style="top:-8rem; left:-8rem; width:480px; height:480px;"></span>
    <span class="blob blob-peach" style="top:5rem; right:0; width:440px; height:440px;"></span>

    <div class="wrap position-relative" style="z-index:2;">
        <div class="breadcrumb-c" data-testid="international-breadcrumb">
            <a href="{{ route('hub') }}">Home</a>
            <span class="sep">/</span>
            <a href="{{ route('education') }}">Education</a>
            <span class="sep">/</span>
            <span class="current">International</span>
        </div>

        <div style="max-width:48rem;">
            <p class="kicker mb-3">Route 02 · Learn Abroad</p>
            <h1 class="h-display h1-page m-0" data-testid="international-main-title">
                Study abroad, <span class="font-serif-accent text-gradient-brand" style="font-weight:400;">borderless.</span>
            </h1>
            <p class="body-text body-text-lg mt-4" style="max-width:36rem;" data-reveal data-testid="international-subtitle">
                Pick a destination — our counsellors handle university shortlisting, admissions,
                visas and everything in between.
            </p>
        </div>

        <div class="panel position-relative d-flex flex-column flex-sm-row gap-3 p-3 mt-4" style="border-radius:14px;" data-testid="destination-search-bar" data-reveal>
            <div class="search-wrap flex-grow-1">
                <i data-lucide="search" class="search-icon"></i>
                <input type="text" data-destination-search data-testid="destination-search-input" placeholder="Search a destination — e.g. Canada, UK, Australia…" class="form-control">
            </div>
            <div class="chips-row" data-testid="region-chips">
                @foreach ($regions as $region)
                    <button type="button" data-region-chip="{{ $region }}" data-testid="region-chip-{{ strtolower($region) }}" class="chip {{ $region === 'All' ? 'chip-teal-active' : '' }}">{{ $region }}</button>
                @endforeach
            </div>
        </div>

        <p class="results-count" data-destination-count data-testid="destination-count">SHOWING 6 DESTINATIONS</p>

        <div class="grid-3" data-testid="destination-grid" data-destination-grid>
            @foreach ($destinations as $i => $d)
                <a href="{{ $d['href'] }}" target="_blank" rel="noopener noreferrer" data-destination-card data-name="{{ strtolower($d['name']) }} {{ strtolower($d['region']) }}" data-region="{{ $d['region'] }}" data-testid="destination-card-{{ strtolower(str_replace(' ', '-', $d['name'])) }}" data-reveal style="transition-delay: {{ $i * 60 }}ms;" class="dest-card grain">
                    <span class="clip-corner clip-corner-tr"></span>
                    <span class="icon-badge mb-4"><i data-lucide="{{ $d['icon'] }}"></i></span>
                    <p class="kicker kicker-sm mb-1">{{ $d['region'] }}</p>
                    <h3 class="dest-title">
                        {{ $d['name'] }}
                        <i data-lucide="arrow-up-right"></i>
                    </h3>
                    <p class="dest-desc">Explore universities and courses in {{ $d['name'] }} with full admission &amp; visa support from Leamss.</p>
                </a>
            @endforeach
        </div>

        <div class="empty-state hidden" data-destination-empty data-testid="destination-empty-state">
            <p class="h-display c-ink mb-2" style="font-size:20px;">No destinations match your search</p>
            <p class="c-body m-0" style="font-size:14px;">Try another country or region — or ask us directly.</p>
        </div>
    </div>
</section>

@include('partials.cta')
@endsection
