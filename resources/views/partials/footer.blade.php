@php
$immigration = [
    'pr' => [
        ['label' => 'Canada', 'href' => 'https://leamss.com/immigration/permanent-residency/canada'],
        ['label' => 'Australia', 'href' => 'https://leamss.com/immigration/permanent-residency/australia'],
    ],
    'temp' => [
        ['label' => 'Canada', 'href' => 'https://leamss.com/immigration/temporary-residency/canada'],
        ['label' => 'Australia', 'href' => 'https://leamss.com/immigration/temporary-residency/australia'],
    ],
];
$studyAbroad = [
    ['label' => 'UK', 'href' => 'https://leamss.com/study-abroad/study-in-uk'],
    ['label' => 'USA', 'href' => 'https://leamss.com/study-abroad/study-in-usa'],
    ['label' => 'Canada', 'href' => 'https://leamss.com/study-abroad/study-in-canada'],
    ['label' => 'Australia', 'href' => 'https://leamss.com/study-abroad/study-in-australia'],
    ['label' => 'New Zealand', 'href' => 'https://leamss.com/study-abroad/study-in-new-zealand'],
    ['label' => 'European Countries', 'href' => 'https://leamss.com/study-abroad/study-in-european-countries'],
];
$coaching = [
    ['label' => 'PTE Coaching', 'href' => 'https://leamss.com/coaching/pte-coaching'],
    ['label' => 'IELTS Coaching', 'href' => 'https://leamss.com/coaching/ielts-english'],
    ['label' => 'Spoken English', 'href' => 'https://leamss.com/coaching/spoken-english'],
];
$legal = [
    ['label' => 'Terms & Conditions', 'href' => 'https://leamss.com/terms-and-conditions'],
    ['label' => 'Privacy Policy', 'href' => 'https://leamss.com/privacy-policy'],
    ['label' => 'Protection Policy', 'href' => 'https://leamss.com/protection-policy'],
];
$calculators = [
    ['label' => 'Canada 67 Points Calculator', 'href' => 'https://leamss.com/canada-67-points-calculator'],
    ['label' => 'Canadian CRS Calculator', 'href' => 'https://leamss.com/canada-crs-calculator'],
    ['label' => 'Australia PR Points Calculator', 'href' => 'https://leamss.com/australia-pr-points-calculator'],
];
$socials = [
    ['icon' => 'facebook', 'href' => 'https://www.facebook.com/profile.php?id=61557479040888', 'label' => 'Facebook'],
    ['icon' => 'linkedin', 'href' => 'https://www.linkedin.com/company/leamss/', 'label' => 'LinkedIn'],
    ['icon' => 'instagram', 'href' => 'https://www.instagram.com/leamss_official/', 'label' => 'Instagram'],
    ['icon' => 'youtube', 'href' => 'https://www.youtube.com/@LEAMSS_Dinkum', 'label' => 'YouTube'],
];
@endphp

<footer class="relative grain overflow-hidden bg-[#26787C] text-white" data-testid="footer">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 pt-12 pb-8 relative z-10">
        <div class="rounded-[14px] bg-[#14666A] px-6 sm:px-10 py-8 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <p class="font-mono-brand text-[10px] uppercase tracking-[0.25em] text-[#FFE9E0] font-semibold mb-2">Have a Thought?</p>
                <p class="font-display text-2xl sm:text-3xl font-extrabold tracking-tight">We Make Consultation <span class="font-serif-accent font-normal text-[#FFE9E0]">Simple</span></p>
            </div>
            <button data-open-enquiry data-testid="footer-book-slot-btn" class="shrink-0 inline-flex items-center justify-center gap-2 rounded-full bg-[#FE570F] px-8 py-4 text-sm font-bold text-white transition-transform duration-300 hover:scale-[1.04] active:scale-95">
                <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                <span>Book Your Slot</span>
            </button>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-8 pt-6 pb-8 relative z-10">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 pb-10 border-b border-white/20">
            <div class="flex items-center gap-4">
                <span class="grid place-items-center w-16 h-16 rounded-full bg-white shrink-0">
                    <span class="grid place-items-center w-11 h-11 rounded-xl bg-gradient-to-br from-[#FE570F] to-[#DD4909]">
                        <i data-lucide="graduation-cap" class="w-6 h-6 text-white"></i>
                    </span>
                </span>
                <div>
                    <p class="font-display text-2xl font-extrabold tracking-tight leading-none">Leamss<span class="text-[#FFE9E0]">.</span></p>
                    <p class="font-serif-accent text-[15px] text-white/85 mt-1">Ladhani Education &amp; Migration Services (OPC) Pvt. Ltd</p>
                </div>
            </div>
            <div>
                <p class="font-display text-base font-bold text-white mb-3">Let's Connect</p>
                <div class="flex items-center gap-2">
                    @foreach ($socials as $s)
                        <a href="{{ $s['href'] }}" target="_blank" rel="noopener noreferrer" aria-label="LEAMSS {{ $s['label'] }}" class="grid place-items-center w-8 h-8 rounded-full bg-white text-[#125D5F] transition-transform duration-300 hover:scale-110">
                            <img src="https://cdn.simpleicons.org/{{ $s['icon'] }}/125D5F" class="w-4 h-4" alt="LEAMSS {{ $s['label'] }}">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-10 py-12">
            <div>
                <h4 class="font-display text-base font-bold text-white mb-4">Immigration</h4>
                <p class="text-[13px] font-semibold text-[#FFE9E0] mb-2">Permanent Residency:</p>
                <ul class="space-y-2 mb-5">
                    @foreach ($immigration['pr'] as $l)
                        <li><a href="{{ $l['href'] }}" class="text-sm text-white/85 hover:text-[#FFE9E0] transition-colors">{{ $l['label'] }}</a></li>
                    @endforeach
                </ul>
                <p class="text-[13px] font-semibold text-[#FFE9E0] mb-2">Temporary Residency:</p>
                <ul class="space-y-2">
                    @foreach ($immigration['temp'] as $l)
                        <li><a href="{{ $l['href'] }}" class="text-sm text-white/85 hover:text-[#FFE9E0] transition-colors">{{ $l['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="font-display text-base font-bold text-white mb-4">Study Abroad</h4>
                <ul class="space-y-2">
                    @foreach ($studyAbroad as $l)
                        <li><a href="{{ $l['href'] }}" class="text-sm text-white/85 hover:text-[#FFE9E0] transition-colors">{{ $l['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="space-y-8">
                <div>
                    <h4 class="font-display text-base font-bold text-white mb-4">Coaching</h4>
                    <ul class="space-y-2">
                        @foreach ($coaching as $l)
                            <li><a href="{{ $l['href'] }}" class="text-sm text-white/85 hover:text-[#FFE9E0] transition-colors">{{ $l['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h4 class="font-display text-base font-bold text-white mb-4">Courses</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ url('/') }}" class="text-sm text-[#FFE9E0] font-semibold">Online Degree Courses</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-display text-base font-bold text-white mb-4">Legal</h4>
                    <ul class="space-y-2">
                        @foreach ($legal as $l)
                            <li><a href="{{ $l['href'] }}" class="text-sm text-white/85 hover:text-[#FFE9E0] transition-colors">{{ $l['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div>
                <h4 class="font-display text-base font-bold text-white mb-4">Office Locations</h4>
                <div class="flex gap-3 mb-6">
                    <i data-lucide="map-pin" class="w-4 h-4 text-[#FFE9E0] shrink-0 mt-0.5"></i>
                    <p class="text-sm text-white/85 leading-relaxed">Thane: Office no 10, Londhe compound, Laxmi chambers, Near goandevi Maidan, Opposite Dmart Ready, Thane West — 400602</p>
                </div>
                <a href="tel:+917718882427" class="flex items-center gap-3 group mb-3" data-testid="footer-phone-link">
                    <i data-lucide="phone" class="w-4 h-4 text-[#FFE9E0]"></i>
                    <span class="font-mono-brand text-base font-bold text-white group-hover:text-[#FFE9E0] transition-colors">+91 77188 82427</span>
                </a>
                <a href="mailto:info@leamss.com" class="flex items-center gap-3 group mb-6" data-testid="footer-email-link">
                    <i data-lucide="mail" class="w-4 h-4 text-[#FFE9E0]"></i>
                    <span class="text-sm text-white/85 group-hover:text-[#FFE9E0] transition-colors">info@leamss.com</span>
                </a>
                <h4 class="font-display text-base font-bold text-white mb-3">Free Calculators</h4>
                <ul class="space-y-2">
                    @foreach ($calculators as $c)
                        <li><a href="{{ $c['href'] }}" class="text-[13px] text-white/85 hover:text-[#FFE9E0] transition-colors">{{ $c['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="pt-6 border-t border-white/20 flex flex-col sm:flex-row items-center justify-between gap-3 bg-[#14666A]/60 rounded-lg px-5 py-4">
            <p class="text-xs text-white/90">© 2026 Ladhani Education &amp; Migration Services (OPC) Pvt. Ltd. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <a href="https://leamss.com/Our-Services" class="text-xs text-white/90 hover:text-[#FFE9E0] transition-colors">Our Services</a>
                <a href="https://leamss.com/UKIQ" class="text-xs text-white/90 hover:text-[#FFE9E0] transition-colors">UKIQ</a>
            </div>
        </div>
    </div>
</footer>
