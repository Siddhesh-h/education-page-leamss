@extends('layouts.app')

@section('title', 'Education | Leamss — Online Degrees & Study Abroad')

@section('content')
<section data-testid="education-hub-section" class="relative grain overflow-hidden bg-[#FBFBFB] min-h-[100svh] flex flex-col justify-center pt-36 pb-16">
    <div class="hero-grid absolute inset-0"></div>
    <div class="absolute -top-32 -right-32 w-[520px] h-[520px] rounded-full bg-[#FFE9E0] blur-[140px] pointer-events-none"></div>
    <div class="absolute bottom-0 -left-32 w-[480px] h-[480px] rounded-full bg-[#D2F9FB]/80 blur-[130px] pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto w-full px-4 sm:px-8">
        <div class="flex items-center gap-2 font-mono-brand text-[11px] uppercase tracking-[0.16em] text-[#696969] mb-8" data-testid="education-breadcrumb">
            <a href="{{ route('hub') }}" class="hover:text-[#FE570F] transition-colors">Home</a>
            <span class="text-[#B7B7B7]">/</span>
            <span class="text-[#FE570F]">Education</span>
        </div>

        <div class="max-w-3xl">
            <h1 data-testid="education-main-title" class="font-display text-[42px] leading-[1.04] sm:text-6xl lg:text-[64px] font-extrabold tracking-tight text-[#0F0F11]">
                <span class="mask-line"><span style="animation-delay:.15s">Your education.</span></span>
                <span class="mask-line"><span style="animation-delay:.28s">Your <span class="font-serif-accent font-normal text-gradient-brand">way.</span></span></span>
            </h1>

            <p class="mt-7 text-[#696969] text-base sm:text-lg leading-relaxed max-w-xl" data-reveal data-testid="education-subtitle">
                Stay home and earn a UGC-recognized online degree, or fly out and study at a global
                campus. Pick your route — the search is the same, the opportunity is yours.
            </p>
        </div>

        <div class="mt-12 grid md:grid-cols-2 gap-6" data-testid="education-options">
            {{-- Domestic --}}
            <a href="{{ route('education.domestic') }}" data-reveal data-testid="education-option-domestic"
               class="group relative grain overflow-hidden rounded-[14px] bg-[#FE570F] p-8 sm:p-12 block transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_40px_80px_-30px_rgba(254,87,15,0.7)]">
                <span class="absolute inset-0" style="background: radial-gradient(circle at 85% 15%, rgba(15,15,17,0.22), transparent 55%);"></span>
                <div class="relative z-10">
                    <span class="grid place-items-center w-14 h-14 rounded-2xl bg-white/15 border border-white/25 mb-8 transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-6">
                        <i data-lucide="home" class="w-7 h-7 text-white"></i>
                    </span>
                    <p class="font-mono-brand text-[11px] uppercase tracking-[0.25em] text-[#FFE9E0] font-semibold mb-3">Route 01 · Learn From India</p>
                    <h2 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-white flex items-center gap-3">
                        Domestic
                        <i data-lucide="arrow-right" class="w-6 h-6 transition-transform duration-300 group-hover:translate-x-2"></i>
                    </h2>
                    <p class="text-white/90 mt-4 text-[15px] leading-relaxed max-w-sm">
                        {{ $count }}+ UGC-DEB entitled online MBA, MCA, BBA, BCA, M.Com, MA &amp; BA degrees —
                        live + recorded classes, EMI options, 100% online.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-2">
                        @foreach (['Search ' . $count . '+ Courses', '5 University Partners', 'From ₹' . number_format($minFee) . ' / Sem'] as $chip)
                            <span class="rounded-full bg-white/15 border border-white/25 px-4 py-1.5 font-mono-brand text-[11px] uppercase tracking-[0.14em] font-semibold text-white">{{ $chip }}</span>
                        @endforeach
                    </div>
                </div>
            </a>

            {{-- International --}}
            <a href="{{ route('education.international') }}" data-reveal data-testid="education-option-international" style="transition-delay:100ms"
               class="group relative grain overflow-hidden rounded-[14px] bg-[#26787C] p-8 sm:p-12 block transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_40px_80px_-30px_rgba(38,120,124,0.7)]">
                <span class="absolute top-0 left-0 w-56 h-56 pointer-events-none" style="clip-path: polygon(0 0, 0% 100%, 100% 0); background-color: #146668;"></span>
                <div class="absolute -bottom-20 -right-20 w-72 h-72 rounded-full bg-[#14666A]/70 blur-[90px] pointer-events-none"></div>
                <div class="relative z-10">
                    <span class="grid place-items-center w-14 h-14 rounded-2xl bg-white/10 border border-white/20 mb-8 transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-6">
                        <i data-lucide="globe" class="w-7 h-7 text-white"></i>
                    </span>
                    <p class="font-mono-brand text-[11px] uppercase tracking-[0.25em] text-[#FFE9E0] font-semibold mb-3">Route 02 · Learn Abroad</p>
                    <h2 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-white flex items-center gap-3">
                        International
                        <i data-lucide="arrow-right" class="w-6 h-6 transition-transform duration-300 group-hover:translate-x-2"></i>
                    </h2>
                    <p class="text-white/85 mt-4 text-[15px] leading-relaxed max-w-sm">
                        Explore study abroad across the UK, USA, Canada, Australia, New Zealand and
                        Europe — with end-to-end admission &amp; visa support.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-2">
                        @foreach (['6 Destinations', 'University Shortlisting', 'Visa Support'] as $chip)
                            <span class="rounded-full bg-white/10 border border-white/20 px-4 py-1.5 font-mono-brand text-[11px] uppercase tracking-[0.14em] font-semibold text-white">{{ $chip }}</span>
                        @endforeach
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<section data-testid="education-marquee-section" class="relative z-10 bg-[#FBFBFB] py-8 overflow-hidden">
    <div class="-rotate-[0.6deg] scale-[1.03] bg-[#FE570F] py-5 overflow-hidden marquee-hover shadow-[0_20px_60px_-20px_rgba(254,87,15,0.55)]">
        <div class="flex w-max animate-marquee">
            @foreach ([1, 2] as $half)
                <div class="flex items-center gap-12 pr-12 shrink-0" @if ($half === 2) aria-hidden="true" @endif>
                    @foreach (['Amity University Online — NAAC A+', 'Manipal University Jaipur — UGC DEB Entitled', 'Jain University Online — NIRF Ranked', 'DY Patil University Pune — NAAC A++', 'Sikkim Manipal University — AICTE Approved', 'UK · USA · Canada · Australia · NZ · Europe'] as $item)
                        <span class="flex items-center gap-12 shrink-0">
                            <span class="font-display text-lg sm:text-xl font-bold tracking-tight text-white whitespace-nowrap">{{ $item }}</span>
                            <i data-lucide="graduation-cap" class="w-5 h-5 text-white/70 shrink-0"></i>
                        </span>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.cta')
@endsection
