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

<footer class="grain overflow-hidden" style="background: var(--green);" data-testid="footer">
    <div class="wrap position-relative" style="z-index: 2; padding-top: 3rem; padding-bottom: 2rem;">
        <div class="footer-cta-strip" data-testid="footer-consultation-strip">
            <div>
                <p class="kicker kicker-cream kicker-sm mb-2">Have a Thought?</p>
                <p class="h-display c-white mb-0" style="color:#fff; font-size: clamp(24px, 2.4vw, 30px);">We Make Consultation <span class="font-serif-accent c-peach" style="font-weight:400;">Simple</span></p>
            </div>
            <button data-open-enquiry data-testid="footer-book-slot-btn" class="btn-brand" style="border-radius:999px; padding: 1rem 2rem; flex-shrink: 0;">
                <i data-lucide="graduation-cap" style="width:18px;height:18px;"></i>
                <span>Book Your Slot</span>
            </button>
        </div>

        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4 pb-4 pt-5" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
            <div class="d-flex align-items-center gap-3">
                <span class="logo-circle">
                    <span class="brand-mark brand-mark-lg">
                        <svg viewBox="0 0 64 64" fill="none" aria-hidden="true">
                            <path d="M32 17 10 27l22 10 18-8.2V40h4V27L32 17z" fill="#fff"/>
                            <path d="M20 34.5V43c0 3.6 5.6 7 12 7s12-3.4 12-7v-8.5l-12 5.6-12-5.6z" fill="#fff" opacity="0.82"/>
                        </svg>
                    </span>
                </span>
                <div>
                    <p class="font-display fw-bolder m-0" style="font-size:24px; letter-spacing:-0.02em; color:#fff;">Leamss<span class="c-peach">.</span></p>
                    <p class="font-serif-accent m-0" style="font-size:15px; color:rgba(255,255,255,0.85);">Ladhani Education &amp; Migration Services (OPC) Pvt. Ltd</p>
                </div>
            </div>
            <div>
                <p class="footer-heading">Let's Connect</p>
                <div class="d-flex align-items-center gap-2">
                    @foreach ($socials as $s)
                        <a href="{{ $s['href'] }}" target="_blank" rel="noopener noreferrer" aria-label="LEAMSS {{ $s['label'] }}" class="social-circle social-circle-lg">
                            @if ($s['label'] === 'LinkedIn')
                                <i data-lucide="linkedin" style="width:16px;height:16px;color:#125D5F;"></i>
                            @else
                                <img src="https://cdn.simpleicons.org/{{ $s['icon'] }}/125D5F" alt="LEAMSS {{ $s['label'] }}">
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="footer-grid">
            <div>
                <h4 class="footer-heading">Immigration</h4>
                <p class="footer-sub">Permanent Residency:</p>
                <ul class="footer-links mb-4">
                    @foreach ($immigration['pr'] as $l)
                        <li><a href="{{ $l['href'] }}">{{ $l['label'] }}</a></li>
                    @endforeach
                </ul>
                <p class="footer-sub">Temporary Residency:</p>
                <ul class="footer-links">
                    @foreach ($immigration['temp'] as $l)
                        <li><a href="{{ $l['href'] }}">{{ $l['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="footer-heading">Study Abroad</h4>
                <ul class="footer-links">
                    @foreach ($studyAbroad as $l)
                        <li><a href="{{ $l['href'] }}">{{ $l['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="d-flex flex-column gap-4">
                <div>
                    <h4 class="footer-heading">Coaching</h4>
                    <ul class="footer-links">
                        @foreach ($coaching as $l)
                            <li><a href="{{ $l['href'] }}">{{ $l['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h4 class="footer-heading">Courses</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('education.domestic') }}" style="color: var(--peach); font-weight: 600;">Online Degree Courses</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-heading">Legal</h4>
                    <ul class="footer-links">
                        @foreach ($legal as $l)
                            <li><a href="{{ $l['href'] }}">{{ $l['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div>
                <h4 class="footer-heading">Office Locations</h4>
                <div class="d-flex gap-3 mb-4">
                    <i data-lucide="map-pin" class="c-peach flex-shrink-0" style="width:18px;height:18px;margin-top:3px;"></i>
                    <p class="m-0" style="font-size:14px; color:rgba(255,255,255,0.85); line-height:1.65;">Thane: Office no 10, Londhe compound, Laxmi chambers, Near goandevi Maidan, Opposite Dmart Ready, Thane West — 400602</p>
                </div>
                <a href="tel:+917718882427" class="d-flex align-items-center gap-3 mb-3 text-decoration-none" data-testid="footer-phone-link">
                    <i data-lucide="phone" class="c-peach" style="width:18px;height:18px;"></i>
                    <span class="font-mono-brand fw-bold text-white" style="font-size:16px;">+91 77188 82427</span>
                </a>
                <a href="mailto:info@leamss.com" class="d-flex align-items-center gap-3 mb-4 text-decoration-none" data-testid="footer-email-link">
                    <i data-lucide="mail" class="c-peach" style="width:18px;height:18px;"></i>
                    <span style="font-size:14px; color:rgba(255,255,255,0.85);">info@leamss.com</span>
                </a>
                <h4 class="footer-heading">Free Calculators</h4>
                <ul class="footer-links">
                    @foreach ($calculators as $c)
                        <li><a href="{{ $c['href'] }}" style="font-size:13px;">{{ $c['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2026 Ladhani Education &amp; Migration Services (OPC) Pvt. Ltd. All rights reserved.</p>
            <div class="d-flex align-items-center gap-4">
                <a href="https://leamss.com/Our-Services">Our Services</a>
                <a href="https://leamss.com/UKIQ">UKIQ</a>
            </div>
        </div>
    </div>
</footer>
