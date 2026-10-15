@extends('layouts.app')

@section('title', $course->label().' | Leamss Online Degree Courses 2026')

@section('content')
<section data-testid="detail-hero" class="relative grain overflow-hidden bg-[#FBFBFB] pt-36 pb-16">
    <div class="hero-grid absolute inset-0"></div>
    <div class="absolute -top-24 -left-32 w-[440px] h-[440px] rounded-full bg-[#FFE9E0] blur-[130px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-8 relative z-10">
        <nav class="font-mono-brand text-[11px] uppercase tracking-[0.16em] text-[#696969] mb-8" data-testid="detail-breadcrumb">
            <a href="{{ route('home') }}" class="hover:text-[#FE570F] transition-colors">Home</a>
            <span class="mx-2 text-[#B7B7B7]">/</span>
            <a href="{{ route('home') }}#catalog" class="hover:text-[#FE570F] transition-colors">Courses</a>
            <span class="mx-2 text-[#B7B7B7]">/</span>
            <span class="text-[#FE570F]">{{ $course->degree_type }}</span>
        </nav>

        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-5 relative" data-reveal data-testid="detail-image-frame">
                <span class="absolute inset-0 border border-[#26787C] translate-x-3 translate-y-3" style="border-radius:150px 0 25px 0" aria-hidden="true"></span>
                <div class="relative overflow-hidden bg-gradient-to-br from-[#FE570F] to-[#125D5F] h-[360px] sm:h-[420px]" style="border-radius:150px 0 25px 0">
                    <img src="{{ $course->image }}" alt="{{ $label }}" data-testid="detail-image" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="lg:col-span-7" data-reveal>
                <div class="flex flex-wrap items-center gap-2 mb-5">
                    <span class="bg-[#FE570F] text-white rounded px-3 py-1 font-mono-brand text-[10px] uppercase tracking-[0.14em] font-semibold">{{ $course->degree_type }}</span>
                    <span class="bg-white text-[#0F0F11] border border-[#B7B7B7] rounded px-3 py-1 font-mono-brand text-[10px] uppercase tracking-[0.14em] font-semibold">{{ $course->level }}</span>
                    <span class="font-mono-brand text-[10.5px] uppercase tracking-[0.16em] text-[#696969] font-semibold flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#FE570F]"></span>
                        {{ $course->university }}
                    </span>
                </div>

                <h1 data-testid="detail-title" class="font-display text-3xl sm:text-4xl lg:text-[46px] font-extrabold tracking-tight leading-[1.12] text-[#0F0F11]">
                    {{ $course->degree }}
                    @if ($course->spec)
                        <span class="font-serif-accent font-normal text-[#FE570F]">in {{ $course->spec }}</span>
                    @endif
                </h1>

                <p class="mt-5 text-[#696969] text-base leading-relaxed max-w-2xl" data-testid="detail-overview-short">
                    100% online, UGC-DEB entitled degree — learn at your own pace with live lectures, recorded archives and 24/7 LMS access, without pausing your career or shifting cities.
                </p>

                <div class="mt-7 flex flex-wrap items-center gap-3">
                    <div data-testid="detail-price" class="flex items-baseline gap-2 bg-[#FFE9E0] border border-[#FE570F]/25 rounded-lg px-5 py-3">
                        <span class="font-mono-brand text-2xl font-bold text-[#FE570F]">₹{{ number_format($course->fee_per_semester) }}</span>
                        <span class="text-[11px] text-[#696969] font-medium">per semester</span>
                    </div>
                    <span class="flex items-center gap-1.5 font-mono-brand text-sm text-[#717171] bg-white border border-[#B7B7B7] rounded-lg px-4 py-3">
                        <i data-lucide="clock" class="w-4 h-4 text-[#FE570F]"></i>
                        {{ $course->duration }}
                    </span>
                </div>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <button data-open-enquiry data-course-label="{{ $label }}" data-testid="detail-enquire-btn" class="btn-brand inline-flex items-center justify-center gap-2 rounded-full px-8 py-4 text-sm font-bold">
                        <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                        <span>Book Your Slot</span>
                    </button>
                    <button type="button" data-open-brochure data-course-id="{{ $course->id }}" data-brochure-label="{{ $label }}" data-testid="detail-brochure-btn" class="inline-flex items-center justify-center gap-2 rounded-full px-8 py-4 text-sm font-bold text-[#0F0F11] bg-white border border-[#B7B7B7] transition-all duration-300 hover:border-[#FE570F] hover:text-[#FE570F]">
                        <i data-lucide="download" class="w-4 h-4"></i>
                        Download Brochure
                    </button>
                    <a href="{{ $course->link }}" target="_blank" rel="noreferrer" data-testid="detail-external-link" class="inline-flex items-center justify-center gap-2 rounded-full px-6 py-4 text-sm font-semibold text-[#26787C] transition-colors hover:text-[#FE570F]">
                        View on leamss.com
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#F9F9F9] py-20" data-testid="detail-industry-leader-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">
        <div class="mb-8" data-reveal>
            <p class="font-mono-brand text-xs uppercase tracking-[0.25em] text-[#FE570F] font-semibold mb-3">Your Degree, Your Edge</p>
            <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight leading-[1.12] text-[#0F0F11] flex items-start gap-3">
                <i data-lucide="award" class="w-7 h-7 text-[#26787C] shrink-0 mt-1"></i>
                <span>Become an industry leader with <span class="font-serif-accent font-normal text-[#FE570F]">UGC-recognized {{ $course->degree_type }}</span></span>
            </h2>
        </div>
        <div class="flex flex-wrap gap-3" data-testid="detail-accreditations">
            @foreach ($accreditations as $i => $chip)
                <span data-reveal class="inline-flex items-center gap-2 rounded-full bg-white border border-[#878787]/50 px-5 py-2.5 text-[13px] font-semibold text-[#26787C]" style="transition-delay: {{ $i * 50 }}ms">
                    <i data-lucide="shield-check" class="w-4 h-4 text-[#FE570F]"></i>
                    {{ $chip }}
                </span>
            @endforeach
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
            @foreach ($careerImpact as $i => $card)
                <div data-reveal style="transition-delay: {{ $i * 60 }}ms">
                    <div class="h-full rounded-[14px] bg-white border border-[#878787]/40 p-7 transition-all duration-300 hover:border-[#FE570F]/70 hover:shadow-[0_16px_40px_-12px_rgba(194,194,194,0.5)] hover:-translate-y-1">
                        <div class="w-11 h-11 rounded-full bg-[#26787C] grid place-items-center mb-5">
                            <i data-lucide="{{ $card['icon'] }}" class="w-5 h-5 text-white"></i>
                        </div>
                        <h3 class="font-display text-lg font-bold text-[#26787C] mb-2">{{ $card['title'] }}</h3>
                        <p class="text-sm text-[#696969] leading-relaxed">{{ $card['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-[#FBFBFB] py-20" data-testid="detail-fees-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">
        <div class="mb-8" data-reveal>
            <p class="font-mono-brand text-xs uppercase tracking-[0.25em] text-[#FE570F] font-semibold mb-3">Fees Structure</p>
            <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight leading-[1.12] text-[#0F0F11] flex items-start gap-3">
                <i data-lucide="badge-indian-rupee" class="w-7 h-7 text-[#26787C] shrink-0 mt-1"></i>
                <span>Simple, transparent <span class="font-serif-accent font-normal text-[#FE570F]">fees.</span></span>
            </h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach ([['label' => '24 Months EMI', 'value' => $emi, 'note' => 'Interest free', 'featured' => false], ['label' => 'Per Semester Fee', 'value' => $course->fee_per_semester, 'note' => 'Pay as you learn', 'featured' => true], ['label' => 'Full Program Fee', 'value' => $fullFee, 'note' => 'Total for '.$semesters.' semesters', 'featured' => false]] as $i => $f)
                <div data-reveal style="transition-delay: {{ $i * 70 }}ms">
                    <div data-testid="detail-fee-card-item" class="h-full rounded-[14px] p-8 text-center border transition-all duration-300 {{ $f['featured'] ? 'bg-[#26787C] border-[#26787C] text-white shadow-[0_24px_50px_-20px_rgba(38,120,124,0.6)]' : 'bg-white border-[#878787]/50 hover:border-[#FE570F]/70' }}">
                        <p class="font-mono-brand text-[11px] uppercase tracking-[0.2em] font-semibold mb-3 {{ $f['featured'] ? 'text-[#FFE9E0]' : 'text-[#696969]' }}">{{ $f['label'] }}</p>
                        <p class="font-mono-brand text-4xl font-bold {{ $f['featured'] ? 'text-white' : 'text-[#FE570F]' }}">₹{{ number_format($f['value']) }}<sup class="text-base align-super">*</sup></p>
                        <p class="text-xs mt-3 {{ $f['featured'] ? 'text-white/80' : 'text-[#696969]' }}">{{ $f['note'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-[#F9F9F9] py-20" data-testid="detail-structure-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">
        <div class="mb-8" data-reveal>
            <p class="font-mono-brand text-xs uppercase tracking-[0.25em] text-[#FE570F] font-semibold mb-3">Program Overview &amp; Structure</p>
            <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight leading-[1.12] text-[#0F0F11] flex items-start gap-3">
                <i data-lucide="book-open" class="w-7 h-7 text-[#26787C] shrink-0 mt-1"></i>
                <span>What your <span class="font-serif-accent font-normal text-[#FE570F]">learning journey looks like.</span></span>
            </h2>
        </div>
        <div class="grid lg:grid-cols-12 gap-6">
            <div class="lg:col-span-8 grid sm:grid-cols-2 gap-6">
                @foreach ([['icon' => 'clock', 'k' => 'Duration', 'v' => $course->duration], ['icon' => 'layers', 'k' => 'Structure', 'v' => $semesters.' Semesters'], ['icon' => 'monitor-play', 'k' => 'Delivery', 'v' => 'Live + Recorded Classes'], ['icon' => 'globe', 'k' => 'Learning Mode', 'v' => '100% Online · 24/7 LMS']] as $i => $s)
                    <div data-reveal style="transition-delay: {{ $i * 50 }}ms">
                        <div class="h-full flex items-center gap-4 rounded-[14px] bg-white border border-[#878787]/40 px-6 py-5">
                            <span class="grid place-items-center w-11 h-11 rounded-full bg-[#FFE9E0] shrink-0">
                                <i data-lucide="{{ $s['icon'] }}" class="w-5 h-5 text-[#FE570F]"></i>
                            </span>
                            <div>
                                <p class="font-mono-brand text-[10px] uppercase tracking-[0.18em] text-[#696969] font-semibold">{{ $s['k'] }}</p>
                                <p class="font-display text-lg font-bold text-[#0F0F11]">{{ $s['v'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="lg:col-span-4" data-reveal>
                <div class="h-full rounded-[14px] bg-[#26787C] grain relative overflow-hidden p-8 flex flex-col justify-between" data-testid="detail-curriculum-cta">
                    <div>
                        <h3 class="font-display text-xl font-bold text-white mb-2">Full Semester-wise Curriculum</h3>
                        <p class="text-sm text-white/85 leading-relaxed mb-6">The complete subject list for every semester is included in the official brochure — download it instantly.</p>
                    </div>
                    <a href="{{ route('brochure.download', $course) }}" data-testid="detail-structure-brochure-btn" class="inline-flex items-center justify-center gap-2 rounded-full bg-[#FE570F] px-6 py-3.5 text-sm font-bold text-white transition-transform duration-300 hover:scale-[1.03] active:scale-95">
                        <i data-lucide="download" class="w-4 h-4"></i>
                        <span>Download Brochure</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-12 rounded-[14px] bg-white border border-[#878787]/40 p-8 sm:p-10" data-testid="detail-advantages">
            <h3 class="font-display text-xl sm:text-2xl font-bold text-[#26787C] mb-6">{{ $course->university }} Advantages — Why we're the right fit for you</h3>
            <div class="grid sm:grid-cols-2 gap-6">
                @foreach ($uniAdvantages as $i => $card)
                    <div class="flex gap-4" data-reveal style="transition-delay: {{ $i * 60 }}ms">
                        <span class="grid place-items-center w-11 h-11 rounded-full bg-[#FFE9E0] shrink-0">
                            <i data-lucide="{{ $card['icon'] }}" class="w-5 h-5 text-[#FE570F]"></i>
                        </span>
                        <div>
                            <h4 class="font-display text-base font-bold text-[#0F0F11] mb-1">{{ $card['title'] }}</h4>
                            <p class="text-sm text-[#696969] leading-relaxed">{{ $card['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="bg-[#FBFBFB] py-20" data-testid="detail-eligibility-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">
        <div class="mb-8" data-reveal>
            <p class="font-mono-brand text-xs uppercase tracking-[0.25em] text-[#FE570F] font-semibold mb-3">Eligibility Criteria</p>
            <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight leading-[1.12] text-[#0F0F11] flex items-start gap-3">
                <i data-lucide="check-circle-2" class="w-7 h-7 text-[#26787C] shrink-0 mt-1"></i>
                <span>Who can <span class="font-serif-accent font-normal text-[#FE570F]">apply?</span></span>
            </h2>
        </div>

        @php
            $generalEligibility = $course->level === 'PG' ? [
                "Bachelor's degree (in the relevant field, as specified by the university) from a recognized university.",
                'Applicant must possess sufficient knowledge and understanding of English language & communication.',
                'Candidates whose first language is not English must have done at least past three (3) years of academic qualification under English medium.',
            ] : ($course->level === 'UG+PG' ? [
                '10+2 passed from a recognized board for the undergraduate stage of the integrated program.',
                'Seamless progression to the postgraduate stage as per university norms — no separate application needed.',
                'Applicant must possess sufficient knowledge and understanding of English language & communication.',
            ] : [
                '10+2 passed from a recognized board, or aspirants seeking a career in the respective field.',
                'Applicant must possess sufficient knowledge and understanding of English language & communication.',
                'Candidates whose first language is not English must have done at least past three (3) years of academic qualification under English medium.',
            ]);
        @endphp

        <div class="grid lg:grid-cols-3 gap-6">
            <div data-reveal>
                <div class="h-full rounded-[14px] bg-white border border-[#878787]/50 p-8" data-testid="detail-eligibility-general">
                    <span class="grid place-items-center w-11 h-11 rounded-full bg-[#FFE9E0] mb-5"><i data-lucide="graduation-cap" class="w-5 h-5 text-[#FE570F]"></i></span>
                    <h3 class="font-display text-lg font-bold text-[#26787C] mb-4">General Criteria</h3>
                    <ul class="space-y-3">
                        @foreach ($generalEligibility as $e)
                            <li class="flex items-start gap-2.5 text-sm text-[#424242] leading-relaxed"><span class="mt-1.5 w-2 h-2 rounded-full bg-[#E02735] shrink-0"></span>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div data-reveal style="transition-delay:60ms">
                <div class="h-full rounded-[14px] bg-white border border-[#878787]/50 p-8" data-testid="detail-eligibility-indian">
                    <span class="grid place-items-center w-11 h-11 rounded-full bg-[#FFE9E0] mb-5"><i data-lucide="users" class="w-5 h-5 text-[#FE570F]"></i></span>
                    <h3 class="font-display text-lg font-bold text-[#26787C] mb-4">For Indian Students</h3>
                    <ul class="space-y-3">
                        @foreach ($generalEligibility as $e)
                            <li class="flex items-start gap-2.5 text-sm text-[#424242] leading-relaxed"><span class="mt-1.5 w-2 h-2 rounded-full bg-[#E02735] shrink-0"></span>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div data-reveal style="transition-delay:120ms">
                <div class="h-full rounded-[14px] bg-white border border-[#878787]/50 p-8" data-testid="detail-eligibility-foreign">
                    <span class="grid place-items-center w-11 h-11 rounded-full bg-[#FFE9E0] mb-5"><i data-lucide="globe" class="w-5 h-5 text-[#FE570F]"></i></span>
                    <h3 class="font-display text-lg font-bold text-[#26787C] mb-4">For Foreign Students</h3>
                    <ul class="space-y-3">
                        @foreach ($foreignEligibility as $e)
                            <li class="flex items-start gap-2.5 text-sm text-[#424242] leading-relaxed"><span class="mt-1.5 w-2 h-2 rounded-full bg-[#E02735] shrink-0"></span>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#F9F9F9] py-20" data-testid="detail-admission-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">
        <div class="mb-8" data-reveal>
            <p class="font-mono-brand text-xs uppercase tracking-[0.25em] text-[#FE570F] font-semibold mb-3">Admission Process</p>
            <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight leading-[1.12] text-[#0F0F11] flex items-start gap-3">
                <i data-lucide="send" class="w-7 h-7 text-[#26787C] shrink-0 mt-1"></i>
                <span>From application to enrollment in <span class="font-serif-accent font-normal text-[#FE570F]">5 steps.</span></span>
            </h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-6">
            @foreach ($admissionSteps as $i => $step)
                <div data-reveal style="transition-delay: {{ $i * 60 }}ms">
                    <div class="relative h-full rounded-[14px] bg-white border border-[#878787]/40 p-6 pt-10 transition-all duration-300 hover:border-[#FE570F]/70 hover:-translate-y-1">
                        <span class="absolute top-4 left-6 font-display text-4xl font-extrabold text-[#26787C]/15">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="grid place-items-center w-10 h-10 rounded-full bg-[#26787C] mb-4">
                            <i data-lucide="{{ $step['icon'] }}" class="w-4 h-4 text-white"></i>
                        </span>
                        <h3 class="font-display text-[15px] font-bold text-[#0F0F11] mb-1.5">{{ $step['title'] }}</h3>
                        <p class="text-[13px] text-[#696969] leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-[#FBFBFB] py-20" data-testid="detail-job-roles-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-8">
        <div class="mb-8" data-reveal>
            <p class="font-mono-brand text-xs uppercase tracking-[0.25em] text-[#FE570F] font-semibold mb-3">Career Outcomes</p>
            <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight leading-[1.12] text-[#0F0F11] flex items-start gap-3">
                <i data-lucide="briefcase" class="w-7 h-7 text-[#26787C] shrink-0 mt-1"></i>
                <span>Potential job roles after your <span class="font-serif-accent font-normal text-[#FE570F]">{{ $course->degree_type }}.</span></span>
            </h2>
        </div>
        <div class="flex flex-wrap gap-3" data-testid="detail-job-role-chips">
            @foreach ($jobRoles as $i => $role)
                <span data-reveal class="inline-flex items-center gap-2 rounded-full bg-white border border-[#878787]/50 px-5 py-2.5 text-sm font-semibold text-[#173D4A]" style="transition-delay: {{ $i * 40 }}ms">
                    <span class="w-2 h-2 rounded-full bg-[#FE570F]"></span>
                    {{ $role }}
                </span>
            @endforeach
        </div>

        <div class="mt-14 rounded-[14px] bg-white border border-[#878787]/40 px-6 sm:px-10 py-10" data-reveal data-testid="detail-hiring-partners">
            <p class="font-mono-brand text-[11px] uppercase tracking-[0.22em] text-[#696969] font-semibold text-center mb-8">Top Hiring Partners</p>
            <div class="flex flex-wrap items-center justify-center gap-x-12 gap-y-6">
                @foreach ($hiringLogos as $src)
                    <img src="{{ $src }}" alt="Hiring partner logo" loading="lazy" class="h-10 sm:h-12 w-auto object-contain grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="bg-[#FBFBFB] pb-20 px-4 sm:px-8" data-testid="detail-next-step-section">
    <div data-reveal>
        <div class="max-w-7xl mx-auto relative grain overflow-hidden rounded-[14px] bg-[#FE570F] px-6 py-14 sm:px-14 text-center">
            <span class="absolute inset-0" style="background: radial-gradient(circle at 85% 20%, rgba(15,15,17,0.25), transparent 55%)"></span>
            <div class="relative z-10">
                <h2 class="font-display text-2xl sm:text-4xl font-extrabold tracking-tight text-white max-w-3xl mx-auto leading-[1.15]">
                    Are you ready to take the next step in your <span class="font-serif-accent font-normal">career?</span>
                </h2>
                <button data-open-enquiry data-course-label="{{ $label }}" data-testid="detail-enroll-now-btn" class="mt-8 inline-flex items-center justify-center gap-2 rounded-full bg-[#0F0F11] px-9 py-4 text-sm font-bold text-white transition-transform duration-300 hover:scale-[1.05] active:scale-95">
                    <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                    <span>Enroll Now</span>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#F9F9F9] py-20" data-testid="detail-faq-section">
    <div class="max-w-4xl mx-auto px-4 sm:px-8">
        <div class="mb-8 text-center" data-reveal>
            <p class="font-mono-brand text-xs uppercase tracking-[0.25em] text-[#FE570F] font-semibold mb-3">FAQs</p>
            <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight leading-[1.12] text-[#0F0F11]">
                Frequently asked <span class="font-serif-accent font-normal text-[#FE570F]">questions.</span>
            </h2>
        </div>
        <div class="space-y-4" data-testid="detail-faq-list">
            @foreach ($faqs as $i => $faq)
                <details class="rounded-[14px] bg-white border border-[#878787]/40 group" data-reveal style="transition-delay: {{ $i * 50 }}ms" data-testid="detail-faq-item-{{ $i }}" {{ $i === 0 ? 'open' : '' }}>
                    <summary class="w-full flex items-center justify-between gap-4 px-7 py-5 text-left cursor-pointer list-none font-display text-[15px] sm:text-base font-bold text-[#0F0F11]">
                        {{ $faq['q'] }}
                        <i data-lucide="chevron-down" class="w-5 h-5 text-[#FE570F] shrink-0 transition-transform duration-300 group-open:rotate-180"></i>
                    </summary>
                    <p class="px-7 pb-6 text-sm text-[#696969] leading-relaxed">{{ $faq['a'] }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>

@if ($related->isNotEmpty())
    <section class="bg-[#FBFBFB] py-20" data-testid="detail-related-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-8">
            <div class="mb-10">
                <p class="font-mono-brand text-xs uppercase tracking-[0.25em] text-[#FE570F] font-semibold mb-4">Keep Exploring</p>
                <h2 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight leading-[1.1]">
                    Related <span class="font-serif-accent font-normal text-[#FE570F]">programs.</span>
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($related as $rc)
                    @include('partials.course-card', ['course' => $rc])
                @endforeach
            </div>
        </div>
    </section>
@endif

@include('partials.cta')
@endsection
