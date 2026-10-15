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

<section class="hero-section grain" data-testid="migration-hero-section">
    <div class="hero-grid"></div>
    <span class="blob blob-mint" style="top:-8rem; left:-8rem; width:480px; height:480px;"></span>
    <span class="blob blob-peach" style="bottom:0; right:-8rem; width:480px; height:480px;"></span>

    <div class="wrap position-relative" style="z-index:2;">
        <div class="breadcrumb-c" data-testid="migration-breadcrumb">
            <a href="{{ route('hub') }}">Home</a>
            <span class="sep">/</span>
            <span class="current">Migration</span>
        </div>

        <div style="max-width:48rem;">
            <h1 class="h-display h1-page m-0" data-testid="migration-main-title">
                <span class="mask-line"><span style="animation-delay:.15s">Borders,</span></span>
                <span class="mask-line"><span style="animation-delay:.28s">made <span class="font-serif-accent text-gradient-brand" style="font-weight:400;">simple.</span></span></span>
            </h1>
            <p class="body-text body-text-lg mt-4" style="max-width:36rem;" data-reveal data-testid="migration-subtitle">
                Canada or Australia — permanent or temporary. Pick your pathway and our experts
                handle the rest, from points profiles to visa stamps.
            </p>
        </div>

        <div class="d-flex flex-column gap-5 mt-5">
            @foreach ($pathways as $group)
                <div>
                    <p class="font-mono-brand text-uppercase c-green fw-bold mb-3" style="font-size:11px; letter-spacing:0.25em;" data-reveal>{{ $group['title'] }}</p>
                    <div class="grid-2">
                        @foreach ($group['items'] as $i => $p)
                            <a href="{{ $p['href'] }}" target="_blank" rel="noopener noreferrer" data-reveal data-testid="migration-path-{{ strtolower(str_replace(' ', '-', $p['name'])) }}" style="transition-delay: {{ $i * 80 }}ms;" class="dest-card grain" data-name="{{ strtolower($p['name']) }}">
                                <span class="clip-corner clip-corner-tr-lg"></span>
                                <span class="icon-badge icon-badge-lg mb-4"><i data-lucide="{{ $p['icon'] }}"></i></span>
                                <h2 class="dest-title" style="font-size:clamp(24px,2.2vw,30px);">
                                    {{ $p['name'] }}
                                    <i data-lucide="arrow-up-right"></i>
                                </h2>
                                <p class="dest-desc" style="font-size:15px; max-width:28rem;">{{ $p['desc'] }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="panel-teal grain position-relative overflow-hidden" style="border-radius:14px; padding:2.5rem;" data-reveal data-testid="migration-calculators">
                <span class="blob blob-teal" style="top:-5rem; right:-5rem; width:256px; height:256px;"></span>
                <p class="kicker kicker-cream kicker-sm mb-3 position-relative" style="z-index:2;">Free Tools</p>
                <h2 class="h-display text-white mb-4 position-relative" style="font-size:24px; z-index:2;">Check your points before you apply</h2>
                <div class="d-flex flex-wrap gap-2 position-relative" style="z-index:2;">
                    @foreach ($calculators as $c)
                        <a href="{{ $c['href'] }}" target="_blank" rel="noopener noreferrer" class="chip chip-glass" style="font-size:14px; font-family:'Instrument Sans',sans-serif; text-transform:none; letter-spacing:0; padding:10px 20px; text-decoration:none;">
                            <i data-lucide="calculator" style="width:16px;height:16px;"></i>
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
