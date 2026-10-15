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
        ['label' => 'Online Degree Courses', 'href' => '#catalog'],
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

<header data-header data-testid="nav-header" class="fixed top-0 inset-x-0 z-50 bg-white transition-shadow duration-300" style="box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
    <div data-header-top class="overflow-hidden transition-all duration-300 max-h-24 opacity-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 pt-3 pb-2 flex items-center justify-between gap-6">
            <a href="{{ url('/') }}" data-testid="brand-logo" class="flex items-center gap-2.5">
                <span class="grid place-items-center w-9 h-9 rounded-xl bg-gradient-to-br from-[#FE570F] to-[#DD4909] shadow-md shadow-[#FE570F]/30 shrink-0">
                    <svg viewBox="0 0 64 64" class="w-5 h-5" fill="none" aria-hidden="true">
                        <path d="M32 17 10 27l22 10 18-8.2V40h4V27L32 17z" fill="#fff"/>
                        <path d="M20 34.5V43c0 3.6 5.6 7 12 7s12-3.4 12-7v-8.5l-12 5.6-12-5.6z" fill="#fff" opacity="0.82"/>
                    </svg>
                </span>
                <span class="font-display text-[22px] font-extrabold tracking-tight leading-none text-[#0F0F11]">
                    Leamss<span class="text-[#FE570F]">.</span>
                    <span class="block text-[8.5px] font-mono-brand tracking-[0.32em] uppercase mt-0.5 text-[#696969]">Education</span>
                </span>
            </a>
            <p class="hidden md:block font-serif-accent text-lg text-[#696969] text-center leading-tight max-w-md">
                Ladhani Education &amp; Migration Services (OPC) Pvt. Ltd
            </p>
            <div class="flex items-center gap-4 xl:gap-6">
                <div class="hidden lg:flex items-center gap-4">
                    <a href="tel:+917718882427" data-testid="header-phone-link" class="flex items-center gap-1.5 text-[13px] font-semibold text-[#0F0F11] hover:text-[#FE570F] transition-colors">
                        <i data-lucide="phone" class="w-4 h-4 text-[#FE570F]"></i>
                        +91 77188 82427
                    </a>
                    <a href="mailto:info@leamss.com" class="hidden xl:flex items-center gap-1.5 text-[13px] font-semibold text-[#0F0F11] hover:text-[#FE570F] transition-colors">
                        <i data-lucide="mail" class="w-4 h-4 text-[#FE570F]"></i>
                        info@leamss.com
                    </a>
                </div>
                <div class="hidden md:flex items-center gap-1.5">
                    @foreach ($socials as $s)
                        <a href="{{ $s['href'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $s['label'] }}" class="grid place-items-center w-6 h-6 rounded-full bg-[#125D5F] text-white transition-transform duration-300 hover:scale-110">
                            <img src="https://cdn.simpleicons.org/{{ $s['icon'] }}/ffffff" class="w-3 h-3" alt="{{ $s['label'] }}">
                        </a>
                    @endforeach
                </div>
                <a href="https://www.google.com/maps?cid=12131558180084854671" target="_blank" rel="noopener noreferrer" class="hidden xl:flex items-center gap-1 text-[13px] font-semibold text-[#0F0F11] hover:text-[#FE570F] transition-colors">
                    <i data-lucide="map-pin" class="w-4 h-4 text-[#FE570F]"></i>
                    Thane
                </a>
            </div>
        </div>
    </div>

    <nav class="max-w-7xl mx-auto px-4 sm:px-8 py-2.5 flex items-center justify-between gap-6">
        <button class="lg:hidden flex items-center gap-2.5 h-9 px-3.5 rounded-md bg-[#FE570F] text-white" data-menu-toggle data-testid="header-mobile-menu-btn" aria-label="Toggle menu">
            <span class="text-[15px] font-medium" data-menu-label>Menu</span>
            <i data-lucide="menu" class="w-4 h-4" data-menu-icon-open></i>
            <i data-lucide="x" class="w-4 h-4 hidden" data-menu-icon-close></i>
        </button>

        <div class="hidden lg:flex items-center justify-center flex-1 gap-4 xl:gap-5">
            @foreach ($nav as $item)
                @if (!empty($item['dropdown']))
                    <div class="relative group">
                        <a href="{{ $item['href'] }}" @if (!empty($item['active'])) onclick="event.preventDefault(); document.getElementById('catalog')?.scrollIntoView({behavior:'smooth'});" @else onclick="event.preventDefault();" @endif
                           class="relative flex items-center gap-1 py-2 text-[13.5px] font-semibold transition-colors after:absolute after:left-0 after:bottom-0 after:h-[3px] after:bg-[#FE570F] after:transition-all after:duration-300 {{ !empty($item['active']) ? 'text-[#FE570F] after:w-full' : 'text-[#173D4A] hover:text-[#125D5F]' }}">
                            {{ $item['label'] }}
                            <i data-lucide="chevron-down" class="w-3.5 h-3.5 mt-0.5"></i>
                        </a>
                        <div class="absolute left-1/2 -translate-x-1/2 top-full pt-1 hidden group-hover:block z-10">
                            <ul class="w-56 bg-white rounded-lg py-2 shadow-[0_5px_20px_rgba(0,0,0,0.15)]">
                                @foreach ($item['dropdown'] as $d)
                                    <li>
                                        @if (isset($d['children']))
                                            <span class="block px-5 pt-2.5 pb-1 text-[11px] font-bold uppercase tracking-wider text-[#FE570F]">{{ $d['label'] }}</span>
                                            @foreach ($d['children'] as $c)
                                                <a href="{{ $c['href'] }}" class="block pl-8 pr-5 py-2 text-[13px] font-medium text-[#333333] hover:bg-[#F5F5F5] hover:text-[#125D5F] transition-colors">{{ $c['label'] }}</a>
                                            @endforeach
                                        @else
                                            <a href="{{ $d['href'] }}" @if (str_starts_with($d['href'], '#')) onclick="event.preventDefault(); document.getElementById('catalog')?.scrollIntoView({behavior:'smooth'});" @endif
                                               class="block px-5 py-2.5 text-[13px] font-medium text-[#333333] hover:bg-[#F5F5F5] hover:text-[#125D5F] transition-colors">{{ $d['label'] }}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @else
                    <a href="{{ $item['href'] }}" @if (str_starts_with($item['href'], '#')) onclick="event.preventDefault(); document.getElementById('catalog')?.scrollIntoView({behavior:'smooth'});" @endif
                       class="relative py-2 text-[13.5px] font-semibold transition-colors after:absolute after:left-0 after:bottom-0 after:h-[3px] after:bg-[#FE570F] after:transition-all after:duration-300 {{ !empty($item['active']) ? 'text-[#FE570F] after:w-full' : 'text-[#173D4A] hover:text-[#125D5F] after:w-0 hover:after:w-full' }}">
                        {{ $item['label'] }}
                    </a>
                @endif
            @endforeach
        </div>

        <div class="flex items-center gap-2.5 shrink-0">
            <button data-open-enquiry data-testid="header-book-slot-btn" class="hidden sm:inline-flex items-center gap-2 h-9 px-4 rounded-full bg-[#FE570F] border border-[#FE570F] text-white text-[12.5px] font-semibold transition-opacity hover:opacity-90">
                <span class="animate-blink">Book a Consultation</span>
            </button>
            <a href="https://leamss.com/pay-now" data-testid="header-pay-now-btn" class="btn-green hidden md:inline-flex items-center h-9 px-4 rounded-full text-[12.5px] font-semibold">
                <span>Pay Now</span>
            </a>
        </div>
    </nav>

    <nav data-mobile-menu class="lg:hidden overflow-hidden bg-white border-b border-[#E8E8E8] hidden">
        <div class="px-6 py-4 flex flex-col">
            @foreach ($nav as $item)
                <div class="border-b border-[#F1F1F1] last:border-0">
                    @if (!empty($item['dropdown']))
                        <div class="py-2.5">
                            <span class="text-sm font-semibold {{ !empty($item['active']) ? 'text-[#FE570F]' : 'text-[#173D4A]' }}">{{ $item['label'] }}</span>
                            <div class="pl-4 pt-1 pb-1 flex flex-col">
                                @foreach ($item['dropdown'] as $d)
                                    @if (isset($d['children']))
                                        <div class="py-1">
                                            <span class="text-[11px] font-bold uppercase tracking-wider text-[#FE570F]">{{ $d['label'] }}</span>
                                            @foreach ($d['children'] as $c)
                                                <a href="{{ $c['href'] }}" class="block py-1 pl-3 text-[13px] text-[#696969]">{{ $c['label'] }}</a>
                                            @endforeach
                                        </div>
                                    @else
                                        <a href="{{ $d['href'] }}" class="py-1.5 text-[13px] text-[#696969]">{{ $d['label'] }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @else
                        <a href="{{ $item['href'] }}" class="block py-2.5 text-sm font-medium {{ !empty($item['active']) ? 'text-[#FE570F]' : 'text-[#173D4A]' }}">{{ $item['label'] }}</a>
                    @endif
                </div>
            @endforeach
            <div class="flex gap-3 py-4">
                <button data-open-enquiry class="btn-brand flex-1 rounded-full py-3 text-sm font-semibold"><span>Book a Consultation</span></button>
                <a href="https://leamss.com/pay-now" class="btn-green flex-1 rounded-full py-3 text-sm font-semibold text-center"><span>Pay Now</span></a>
            </div>
        </div>
    </nav>
</header>
