@extends('layouts.app')

@section('title', 'Migration | Leamss — Canada & Australia PR, Visas')

@section('content')
@php
$pathways = [
    'pr' => [
        'title' => 'Permanent Residency',
        'items' => [
            ['name' => 'Canada PR', 'desc' => 'Express Entry & PR pathways for Canada — points, profiles and paperwork, handled.', 'icon' => 'trees', 'href' => 'https://leamss.com/immigration/permanent-residency/canada'],
            ['name' => 'Australia PR', 'desc' => 'Skilled migration & PR for Australia — from eligibility to invitation rounds.', 'icon' => 'palmtree', 'href' => 'https://leamss.com/immigration/permanent-residency/australia'],
        ],
    ],
    'temp' => [
        'title' => 'Temporary Residency',
        'items' => [
            ['name' => 'Canada TR', 'desc' => 'Work, study and visit visas for Canada — right pathway for your goals.', 'icon' => 'flag', 'href' => 'https://leamss.com/immigration/temporary-residency/canada'],
            ['name' => 'Australia TR', 'desc' => 'Temporary visas for Australia — study, work and beyond, end to end.', 'icon' => 'clock', 'href' => 'https://leamss.com/immigration/temporary-residency/australia'],
        ],
    ],
];
$calculators = [
    ['label' => 'Canada 67 Points Calculator', 'href' => 'https://leamss.com/canada-67-points-calculator'],
    ['label' => 'Canadian CRS Calculator', 'href' => 'https://leamss.com/canada-crs-calculator'],
    ['label' => 'Australia PR Points Calculator', 'href' => 'https://leamss.com/australia-pr-points-calculator'],
];
@endphp

<section data-testid="migration-hero-section" class="relative grain overflow-hidden bg-[#FBFBFB] min-h-[100svh] flex flex-col justify-center pt-36 pb-16">
    <div class="hero-grid absolute inset-0"></div>
    <div class="absolute -top-32 -left-32 w-[480px] h-[480px] rounded-full bg-[#D2F9FB]/80 blur-[130px] pointer-events-none"></div>
    <div class="absolute bottom-0 -right-32 w-[480px] h-[480px] rounded-full bg-[#FFE9E0] blur-[130px] pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto w-full px-4 sm:px-8">
        <div class="flex items-center gap-2 font-mono-brand text-[11px] uppercase tracking-[0.16em] text-[#696969] mb-8" data-testid="migration-breadcrumb">
            <a href="{{ route('hub') }}" class="hover:text-[#FE570F] transition-colors">Home</a>
            <span class="text-[#B7B7B7]">/</span>
            <span class="text-[#FE570F]">Migration</span>
        </div>

        <div class="max-w-3xl">
            <h1 data-testid="migration-main-title" class="font-display text-[42px] leading-[1.04] sm:text-6xl lg:text-[64px] font-extrabold tracking-tight text-[#0F0F11]">
                <span class="mask-line"><span style="animation-delay:.15s">Borders,</span></span>
                <span class="mask-line"><span style="animation-delay:.28s">made <span class="font-serif-accent font-normal text-gradient-brand">simple.</span></span></span>
            </h1>
            <p class="mt-7 text-[#696969] text-base sm:text-lg leading-relaxed max-w-xl" data-reveal data-testid="migration-subtitle">
                Canada or Australia — permanent or temporary. Pick your pathway and our experts
                handle the rest, from points profiles to visa stamps.
            </p>
        </div>

        <div class="mt-12 space-y-8">
            @foreach ($pathways as $group)
                <div>
                    <p class="font-mono-brand text-[11px] uppercase tracking-[0.25em] text-[#26787C] font-semibold mb-4" data-reveal>{{ $group['title'] }}</p>
                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach ($group['items'] as $i => $p)
                            <a href="{{ $p['href'] }}" target="_blank" rel="noopener noreferrer" data-reveal data-testid="migration-path-{{ strtolower(str_replace(' ', '-', $p['name'])) }}"
                               class="group relative grain overflow-hidden rounded-[14px] bg-white border border-[#878787]/50 p-8 sm:p-10 block transition-all duration-500 hover:border-[#26787C]/80 hover:shadow-[0_28px_60px_-24px_rgba(38,120,124,0.5)] hover:-translate-y-1" style="transition-delay: {{ $i * 80 }}ms">
                                <span class="absolute top-0 right-0 w-28 h-28 pointer-events-none" style="clip-path: polygon(100% 0, 0 0, 100% 100%); background-color: rgba(210, 249, 251, 0.55);"></span>
                                <div class="relative z-10">
                                    <span class="grid place-items-center w-12 h-12 rounded-full bg-[#26787C] mb-6 transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-6">
                                        <i data-lucide="{{ $p['icon'] }}" class="w-5 h-5 text-white"></i>
                                    </span>
                                    <h2 class="font-display text-2xl sm:text-3xl font-extrabold tracking-tight text-[#0F0F11] flex items-center gap-3">
                                        {{ $p['name'] }}
                                        <i data-lucide="arrow-up-right" class="w-5 h-5 text-[#26787C] transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-1"></i>
                                    </h2>
                                    <p class="mt-3 text-[15px] text-[#696969] leading-relaxed max-w-md">{{ $p['desc'] }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="rounded-[14px] bg-[#26787C] grain p-8 sm:p-10 relative overflow-hidden" data-reveal data-testid="migration-calculators">
                <div class="absolute -top-20 -right-20 w-64 h-64 rounded-full bg-[#14666A]/70 blur-[80px] pointer-events-none"></div>
                <p class="font-mono-brand text-[11px] uppercase tracking-[0.25em] text-[#FFE9E0] font-semibold mb-4 relative z-10">Free Tools</p>
                <h2 class="font-display text-2xl font-extrabold tracking-tight text-white mb-6 relative z-10">Check your points before you apply</h2>
                <div class="flex flex-wrap gap-3 relative z-10">
                    @foreach ($calculators as $c)
                        <a href="{{ $c['href'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/25 px-5 py-2.5 text-sm font-semibold text-white hover:bg-white hover:text-[#26787C] transition-all duration-300">
                            <i data-lucide="calculator" class="w-4 h-4"></i>
                            {{ $c['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.cta')
@endsection
