@extends('layouts.app')

@section('title', 'Leamss | Migration & Education — Your Next Step Starts Here')

@section('content')
<section data-testid="hub-section" class="relative grain overflow-hidden bg-[#FBFBFB] min-h-[100svh] flex flex-col justify-center pt-36 pb-16">
    <div class="hero-grid absolute inset-0"></div>
    <div class="absolute -top-40 -left-40 w-[560px] h-[560px] rounded-full bg-[#FFE9E0] blur-[140px] pointer-events-none"></div>
    <div class="absolute top-1/4 right-0 w-[520px] h-[520px] rounded-full bg-[#D2F9FB]/80 blur-[140px] pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto w-full px-4 sm:px-8">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2.5 rounded-full border border-[#FE570F]/30 bg-[#FFE9E0] px-4 py-2 mb-8" data-reveal data-testid="hub-eyebrow-badge">
                <span class="relative flex w-2 h-2">
                    <span class="animate-ping-dot absolute inline-flex w-full h-full rounded-full bg-[#FE570F]"></span>
                    <span class="relative inline-flex w-2 h-2 rounded-full bg-[#FE570F]"></span>
                </span>
                <span class="font-mono-brand text-[11px] uppercase tracking-[0.22em] font-semibold text-[#DD4909]">Ladhani Education &amp; Migration Services</span>
            </div>

            <h1 data-testid="hub-main-title" class="font-display text-[42px] leading-[1.04] sm:text-6xl lg:text-[64px] xl:text-[70px] font-extrabold tracking-tight text-[#0F0F11]">
                <span class="mask-line"><span style="animation-delay:.15s">Where do you want</span></span>
                <span class="mask-line"><span style="animation-delay:.28s">to go <span class="font-serif-accent font-normal text-gradient-brand">next?</span></span></span>
            </h1>

            <p class="mt-7 text-[#696969] text-base sm:text-lg leading-relaxed max-w-xl" data-reveal data-testid="hub-subtitle">
                Two paths, one trusted partner. Pursue a UGC-recognized online degree, or let our
                experts take you across borders — study abroad, PR and visas, all under one roof.
            </p>
        </div>

        <div class="mt-12 grid md:grid-cols-2 gap-6" data-testid="hub-options">
            {{-- Migration --}}
            <a href="{{ route('migration') }}" data-reveal data-testid="hub-option-migration"
               class="group relative grain overflow-hidden rounded-[14px] bg-[#26787C] p-8 sm:p-12 block transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_40px_80px_-30px_rgba(38,120,124,0.7)]">
                <span class="absolute top-0 left-0 w-56 h-56 pointer-events-none" style="clip-path: polygon(0 0, 0% 100%, 100% 0); background-color: #146668;"></span>
                <div class="absolute -bottom-20 -right-20 w-72 h-72 rounded-full bg-[#14666A]/70 blur-[90px] pointer-events-none"></div>
                <div class="relative z-10">
                    <span class="grid place-items-center w-14 h-14 rounded-2xl bg-white/10 border border-white/20 mb-8 transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-6">
                        <i data-lucide="plane" class="w-7 h-7 text-white"></i>
                    </span>
                    <p class="font-mono-brand text-[11px] uppercase tracking-[0.25em] text-[#FFE9E0] font-semibold mb-3">Path 01 · Borderless</p>
                    <h2 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-white flex items-center gap-3">
                        Migration
                        <i data-lucide="arrow-right" class="w-6 h-6 transition-transform duration-300 group-hover:translate-x-2"></i>
                    </h2>
                    <p class="text-white/85 mt-4 text-[15px] leading-relaxed max-w-sm">
                        Permanent &amp; temporary residency for Canada and Australia — points calculators,
                        visa processing and expert guidance.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-2">
                        @foreach (['Canada PR', 'Australia PR', 'Study Visas'] as $chip)
                            <span class="rounded-full bg-white/10 border border-white/20 px-4 py-1.5 font-mono-brand text-[11px] uppercase tracking-[0.14em] font-semibold text-white">{{ $chip }}</span>
                        @endforeach
                    </div>
                </div>
            </a>

            {{-- Education --}}
            <a href="{{ route('education') }}" data-reveal data-testid="hub-option-education" style="transition-delay:100ms"
               class="group relative grain overflow-hidden rounded-[14px] bg-[#FE570F] p-8 sm:p-12 block transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_40px_80px_-30px_rgba(254,87,15,0.7)]">
                <span class="absolute inset-0" style="background: radial-gradient(circle at 85% 15%, rgba(15,15,17,0.22), transparent 55%);"></span>
                <div class="relative z-10">
                    <span class="grid place-items-center w-14 h-14 rounded-2xl bg-white/15 border border-white/25 mb-8 transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-6">
                        <i data-lucide="graduation-cap" class="w-7 h-7 text-white"></i>
                    </span>
                    <p class="font-mono-brand text-[11px] uppercase tracking-[0.25em] text-[#FFE9E0] font-semibold mb-3">Path 02 · Degree First</p>
                    <h2 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-white flex items-center gap-3">
                        Education
                        <i data-lucide="arrow-right" class="w-6 h-6 transition-transform duration-300 group-hover:translate-x-2"></i>
                    </h2>
                    <p class="text-white/90 mt-4 text-[15px] leading-relaxed max-w-sm">
                        {{ $count }}+ UGC-recognized online degrees from India's top universities — or explore
                        study abroad across 6 global destinations.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-2">
                        @foreach (['Domestic · Online Degrees', 'International · Study Abroad'] as $chip)
                            <span class="rounded-full bg-white/15 border border-white/25 px-4 py-1.5 font-mono-brand text-[11px] uppercase tracking-[0.14em] font-semibold text-white">{{ $chip }}</span>
                        @endforeach
                    </div>
                </div>
            </a>
        </div>

        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6 border-t border-[#E0E0E0] pt-8" data-reveal data-testid="hub-stats">
            <div>
                <p class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-[#26787C]">{{ $count }}+</p>
                <p class="font-mono-brand text-[10px] sm:text-[11px] uppercase tracking-[0.18em] text-[#696969] mt-1.5">Online Degree Programs</p>
            </div>
            <div>
                <p class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-[#26787C]">06</p>
                <p class="font-mono-brand text-[10px] sm:text-[11px] uppercase tracking-[0.18em] text-[#696969] mt-1.5">Study Abroad Destinations</p>
            </div>
            <div>
                <p class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-[#26787C]">04</p>
                <p class="font-mono-brand text-[10px] sm:text-[11px] uppercase tracking-[0.18em] text-[#696969] mt-1.5">Migration Pathways</p>
            </div>
            <div>
                <p class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-[#26787C]">1994</p>
                <p class="font-mono-brand text-[10px] sm:text-[11px] uppercase tracking-[0.18em] text-[#696969] mt-1.5">Group Legacy Since</p>
            </div>
        </div>
    </div>
</section>
@endsection
