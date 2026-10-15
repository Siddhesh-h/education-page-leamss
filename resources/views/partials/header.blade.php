@php
$nav = [
    ['label' => 'Home', 'href' => 'https://leamss.com/'],
    ['label' => 'About Us', 'href' => 'https://leamss.com/about-us'],
    ['label' => 'Immigration', 'href' => '#', 'dropdown' => [
        ['label' => 'Permanent Residency', 'children' => [
            ['label' => 'Canada', 'href' => 'https://leamss.com/immigration/permanent-residency/canada'],
            ['label' => 'Australia', 'href' => 'https://leamss.com/immigration/permanent-residency/australia'],
        ]],
        ['label' => 'Temporary Residency', 'children' => [
            ['label' => 'Canada', 'href' => 'https://leamss.com/immigration/temporary-residency/canada'],
            ['label' => 'Australia', 'href' => 'https://leamss.com/immigration/temporary-residency/australia'],
        ]],
    ]],
    ['label' => 'Study Abroad', 'href' => 'https://leamss.com/study-abroad'],
    ['label' => 'Coaching', 'href' => '#', 'dropdown' => [
        ['label' => 'PTE Coaching', 'href' => 'https://leamss.com/coaching/pte-coaching'],
        ['label' => 'IELTS Coaching', 'href' => 'https://leamss.com/coaching/ielts-english'],
        ['label' => 'Spoken English', 'href' => 'https://leamss.com/coaching/spoken-english'],
    ]],
    ['label' => 'Courses', 'href' => request()->routeIs('education.domestic') ? '#catalog' : route('education.domestic').'#catalog', 'active' => true, 'dropdown' => [
        ['label' => 'Online Degree Courses', 'href' => request()->routeIs('education.domestic') ? '#catalog' : route('education.domestic').'#catalog'],
    ]],
    ['label' => 'Migrate', 'href' => 'https://leamss.com/migrate'],
    ['label' => 'UKIQ', 'href' => 'https://leamss.com/UKIQ'],
    ['label' => 'Blog', 'href' => 'https://leamss.com/blogs-v2'],
    ['label' => 'Contact Us', 'href' => 'https://leamss.com/contactus'],
];
$socials = [
    ['icon' => 'facebook', 'href' => 'https://www.facebook.com/profile.php?id=61557479040888', 'label' => 'LEAMSS Facebook'],
    ['icon' => 'linkedin', 'href' => 'https://www.linkedin.com/company/leamss/', 'label' => 'LEAMSS LinkedIn'],
    ['icon' => 'instagram', 'href' => 'https://www.instagram.com/leamss_official/', 'label' => 'LEAMSS Instagram'],
    ['icon' => 'youtube', 'href' => 'https://www.youtube.com/@LEAMSS_Dinkum', 'label' => 'LEAMSS YouTube'],
];
@endphp

<header class="site-header" data-header data-testid="nav-header">
    <div class="header-top">
        <div class="wrap header-top-inner">
            <a href="{{ url('/') }}" data-testid="brand-logo" class="d-flex align-items-center gap-2 text-decoration-none">
                <span class="brand-mark">
                    <svg viewBox="0 0 64 64" fill="none" aria-hidden="true">
                        <path d="M32 17 10 27l22 10 18-8.2V40h4V27L32 17z" fill="#fff"/>
                        <path d="M20 34.5V43c0 3.6 5.6 7 12 7s12-3.4 12-7v-8.5l-12 5.6-12-5.6z" fill="#fff" opacity="0.82"/>
                    </svg>
                </span>
                <span class="font-display fw-bolder c-ink" style="font-size:22px; letter-spacing:-0.02em; line-height:1;">
                    Leamss<span class="c-orange">.</span>
                    <span class="d-block font-mono-brand text-uppercase c-body" style="font-size:8.5px; letter-spacing:0.32em; margin-top:2px;">Education</span>
                </span>
            </a>
            <p class="company-name font-serif-accent d-none d-md-block">Ladhani Education &amp; Migration Services (OPC) Pvt. Ltd</p>
            <div class="header-contact">
                <div class="d-none d-lg-flex align-items-center gap-3">
                    <a href="tel:+917718882427" data-testid="header-phone-link" class="d-flex align-items-center gap-1 c-ink fw-semibold text-decoration-none" style="font-size:13px;" onmouseover="" >
                        <i data-lucide="phone" class="c-orange" style="width:16px;height:16px;"></i>
                        +91 77188 82427
                    </a>
                    <a href="mailto:info@leamss.com" class="d-none d-xl-flex align-items-center gap-1 c-ink fw-semibold text-decoration-none" style="font-size:13px;">
                        <i data-lucide="mail" class="c-orange" style="width:16px;height:16px;"></i>
                        info@leamss.com
                    </a>
                </div>
                <div class="d-none d-md-flex align-items-center gap-1">
                    @foreach ($socials as $s)
                        <a href="{{ $s['href'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $s['label'] }}" class="social-circle social-circle-sm">
                            <img src="https://cdn.simpleicons.org/{{ $s['icon'] }}/ffffff" alt="{{ $s['label'] }}">
                        </a>
                    @endforeach
                </div>
                <a href="https://www.google.com/maps?cid=12131558180084854671" target="_blank" rel="noopener noreferrer" class="d-none d-xl-flex align-items-center gap-1 c-ink fw-semibold text-decoration-none" style="font-size:13px;">
                    <i data-lucide="map-pin" class="c-orange" style="width:16px;height:16px;"></i>
                    Thane
                </a>
            </div>
        </div>
    </div>

    <nav class="wrap main-nav">
        <button class="btn-menu btn-brand" style="border-radius:6px; padding:8px 14px; font-size:15px; font-weight:500; gap:10px;" data-menu-toggle data-testid="header-mobile-menu-btn" aria-label="Toggle menu">
            <span data-menu-label>Menu</span>
            <i data-lucide="menu" data-menu-icon-open style="width:16px;height:16px;"></i>
            <i data-lucide="x" data-menu-icon-close class="hidden" style="width:16px;height:16px;"></i>
        </button>

        <div class="nav-links">
            @foreach ($nav as $item)
                @if (!empty($item['dropdown']))
                    <div class="nav-item-c">
                        <a href="{{ $item['href'] }}" @if (!empty($item['active'])) onclick="document.getElementById('catalog')?.scrollIntoView({behavior:'smooth'}); return false;" @elseif (str_starts_with($item['href'], '#')) onclick="return false;" @endif
                           class="nav-link-c {{ !empty($item['active']) ? 'active' : '' }}">
                            {{ $item['label'] }}
                            <i data-lucide="chevron-down"></i>
                        </a>
                        <div class="nav-drop">
                            <ul class="nav-drop-panel">
                                @foreach ($item['dropdown'] as $d)
                                    <li>
                                        @if (isset($d['children']))
                                            <span class="nav-drop-heading">{{ $d['label'] }}</span>
                                            <div class="indent">
                                                @foreach ($d['children'] as $c)
                                                    <a href="{{ $c['href'] }}">{{ $c['label'] }}</a>
                                                @endforeach
                                            </div>
                                        @else
                                            <a href="{{ $d['href'] }}" @if (str_starts_with($d['href'], '#')) onclick="document.getElementById('catalog')?.scrollIntoView({behavior:'smooth'}); return false;" @endif>{{ $d['label'] }}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @else
                    <a href="{{ $item['href'] }}" @if (str_starts_with($item['href'], '#')) onclick="document.getElementById('catalog')?.scrollIntoView({behavior:'smooth'}); return false;" @endif
                       class="nav-link-c {{ !empty($item['active']) ? 'active' : '' }}">{{ $item['label'] }}</a>
                @endif
            @endforeach
        </div>

        <div class="nav-actions">
            <button data-open-enquiry data-testid="header-book-slot-btn" class="btn-consultation">
                <span class="animate-blink">Book a Consultation</span>
            </button>
            <a href="https://leamss.com/pay-now" data-testid="header-pay-now-btn" class="btn-paynow btn-green" style="border-radius:999px;">
                <span>Pay Now</span>
            </a>
        </div>
    </nav>

    <nav class="mobile-menu hidden" data-mobile-menu data-testid="mobile-menu">
        <div class="mobile-menu-inner">
            @foreach ($nav as $item)
                <div class="mobile-menu-item">
                    @if (!empty($item['dropdown']))
                        <span class="{{ !empty($item['active']) ? 'active' : '' }}">{{ $item['label'] }}</span>
                        <div class="mobile-sub">
                            @foreach ($item['dropdown'] as $d)
                                @if (isset($d['children']))
                                    <span class="nav-drop-heading">{{ $d['label'] }}</span>
                                    @foreach ($d['children'] as $c)
                                        <a href="{{ $c['href'] }}" style="padding-left:12px;">{{ $c['label'] }}</a>
                                    @endforeach
                                @else
                                    <a href="{{ $d['href'] }}">{{ $d['label'] }}</a>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <a href="{{ $item['href'] }}" class="{{ !empty($item['active']) ? 'active' : '' }}">{{ $item['label'] }}</a>
                    @endif
                </div>
            @endforeach
            <div class="mobile-actions">
                <button data-open-enquiry class="btn-brand" data-testid="mobile-book-slot-btn"><span>Book a Consultation</span></button>
                <a href="https://leamss.com/pay-now" class="btn-green"><span>Pay Now</span></a>
            </div>
        </div>
    </nav>
</header>
