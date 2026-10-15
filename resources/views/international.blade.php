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

<section data-testid="international-hero-section" class="relative grain overflow-hidden bg-[#FBFBFB] pt-36 pb-14">
    <div class="hero-grid absolute inset-0"></div>
    <div class="absolute -top-32 -left-32 w-[480px] h-[480px] rounded-full bg-[#D2F9FB]/80 blur-[130px] pointer-events-none"></div>
    <div class="absolute top-20 right-0 w-[440px] h-[440px] rounded-full bg-[#FFE9E0] blur-[130px] pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-8">
        <div class="flex items-center gap-2 font-mono-brand text-[11px] uppercase tracking-[0.16em] text-[#696969] mb-8" data-testid="international-breadcrumb">
            <a href="{{ route('hub') }}" class="hover:text-[#FE570F] transition-colors">Home</a>
            <span class="text-[#B7B7B7]">/</span>
            <a href="{{ route('education') }}" class="hover:text-[#FE570F] transition-colors">Education</a>
            <span class="text-[#B7B7B7]">/</span>
            <span class="text-[#FE570F]">International</span>
        </div>

        <div class="max-w-3xl">
            <p class="font-mono-brand text-xs uppercase tracking-[0.25em] text-[#FE570F] font-semibold mb-4">Route 02 · Learn Abroad</p>
            <h1 data-testid="international-main-title" class="font-display text-4xl sm:text-5xl lg:text-[56px] font-extrabold tracking-tight leading-[1.06] text-[#0F0F11]">
                Study abroad,{" "}
                <span class="font-serif-accent font-normal text-gradient-brand">borderless.</span>
            </h1>
            <p class="mt-6 text-[#696969] text-base sm:text-lg leading-relaxed max-w-xl" data-reveal data-testid="international-subtitle">
                Pick a destination — our counsellors handle university shortlisting, admissions,
                visas and everything in between.
            </p>
        </div>

        {{-- destination search --}}
        <div data-testid="destination-search-bar" class="mt-10 rounded-[14px] border border-[#878787]/50 bg-white/90 backdrop-blur-xl p-4 flex flex-col sm:flex-row gap-3" data-reveal>
            <div class="relative flex-1">
                <i data-lucide="search" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-[#878787]"></i>
                <input type="text" data-destination-search data-testid="destination-search-input" placeholder="Search a destination — e.g. Canada, UK, Australia…" class="w-full rounded-lg border border-[#B7B7B7] bg-white pl-10 pr-4 py-2.5 text-sm placeholder:text-[#9A9A9A] focus:border-[#FE570F] focus:ring-2 focus:ring-[#FE570F]/20 transition outline-none">
            </div>
            <div data-testid="region-chips" class="flex gap-2 overflow-x-auto no-scrollbar">
                @foreach ($regions as $region)
                    <button type="button" data-region-chip="{{ $region }}" data-testid="region-chip-{{ strtolower($region) }}"
                        class="shrink-0 rounded-full px-4 py-1.5 text-xs font-semibold tracking-wide transition-all duration-300 {{ $region === 'All' ? 'bg-[#26787C] text-white shadow-md shadow-[#26787C]/30' : 'bg-white border border-[#B7B7B7] text-[#424242] hover:border-[#26787C] hover:text-[#26787C]' }}">
                        {{ $region }}
                    </button>
                @endforeach
            </div>
        </div>

        <p class="font-mono-brand text-xs text-[#696969] mt-6 mb-6" data-destination-count data-testid="destination-count">SHOWING 6 DESTINATIONS</p>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-testid="destination-grid" data-destination-grid>
            @foreach ($destinations as $i => $d)
                <a href="{{ $d['href'] }}" target="_blank" rel="noopener noreferrer" data-destination-card data-name="{{ strtolower($d['name']) }} {{ strtolower($d['region']) }}" data-region="{{ $d['region'] }}" data-testid="destination-card-{{ strtolower(str_replace(' ', '-', $d['name'])) }}"
                   class="group relative grain overflow-hidden rounded-[14px] bg-white border border-[#878787]/50 p-8 block transition-all duration-300 hover:border-[#26787C]/80 hover:shadow-[0_20px_50px_-16px_rgba(38,120,124,0.45)] hover:-translate-y-1" data-reveal style="transition-delay: {{ $i * 60 }}ms">
                    <span class="absolute top-0 right-0 w-24 h-24 pointer-events-none" style="clip-path: polygon(100% 0, 0 0, 100% 100%); background-color: rgba(210, 249, 251, 0.55);"></span>
                    <span class="grid place-items-center w-12 h-12 rounded-full bg-[#26787C] mb-6 transition-transform duration-300 group-hover:scale-110">
                        <i data-lucide="{{ $d['icon'] }}" class="w-5 h-5 text-white"></i>
                    </span>
                    <p class="font-mono-brand text-[10px] uppercase tracking-[0.2em] text-[#FE570F] font-semibold mb-2">{{ $d['region'] }}</p>
                    <h3 class="font-display text-2xl font-extrabold tracking-tight text-[#0F0F11] flex items-center gap-2">
                        {{ $d['name'] }}
                        <i data-lucide="arrow-up-right" class="w-5 h-5 text-[#26787C] transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-1"></i>
                    </h3>
                    <p class="mt-3 text-sm text-[#696969] leading-relaxed">Explore universities and courses in {{ $d['name'] }} with full admission &amp; visa support from Leamss.</p>
                </a>
            @endforeach
        </div>

        <div class="rounded-[14px] border-2 border-dashed border-[#B7B7B7] bg-white/70 py-14 text-center hidden" data-destination-empty data-testid="destination-empty-state">
            <p class="font-display text-xl font-bold text-[#0F0F11] mb-2">No destinations match your search</p>
            <p class="text-[#696969] text-sm">Try another country or region — or ask us directly.</p>
        </div>
    </div>
</section>

@include('partials.cta')
@endsection
