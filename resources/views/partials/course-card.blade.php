<article data-testid="course-card" class="group h-full flex flex-col rounded-[14px] bg-white border border-[#878787]/50 overflow-hidden transition-all duration-300 hover:border-[#FE570F]/70 hover:shadow-[0_16px_40px_-12px_rgba(194,194,194,0.5)] hover:-translate-y-1">
    <a href="{{ route('course.details', $course) }}" data-testid="course-card-image-link" class="relative h-44 overflow-hidden bg-gradient-to-br from-[#FE570F] to-[#125D5F] block">
        <img src="{{ $course->image }}" alt="{{ $course->label() }}" loading="lazy" data-testid="course-card-image" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.07] group-hover:rotate-1">
        <span class="absolute inset-0 bg-gradient-to-t from-[#0F0F11]/70 via-transparent to-transparent"></span>
        <div class="absolute top-3 left-3 flex gap-2">
            <span class="bg-[#FE570F] text-white rounded px-3 py-1 font-mono-brand text-[10px] uppercase tracking-[0.14em] font-semibold">{{ $course->degree_type }}</span>
            <span class="bg-white/95 text-[#0F0F11] rounded px-3 py-1 font-mono-brand text-[10px] uppercase tracking-[0.14em] font-semibold">{{ $course->level }}</span>
        </div>
    </a>

    <div class="flex flex-col flex-1 p-6">
        <p class="flex items-center gap-1.5 font-mono-brand text-[10.5px] uppercase tracking-[0.16em] text-[#696969] font-semibold mb-2.5">
            <span class="w-1.5 h-1.5 rounded-full bg-[#FE570F]"></span>
            {{ $course->university }}
        </p>
        <a href="{{ route('course.details', $course) }}" data-testid="course-title" class="font-display text-lg font-bold tracking-tight leading-snug text-[#26787C] mb-4 min-h-[3.2rem] hover:text-[#FE570F] transition-colors">
            {{ $course->label() }}
        </a>

        <div class="flex items-end justify-between gap-3 mb-5">
            <div data-testid="course-price">
                <span class="font-mono-brand text-xl font-bold text-[#FE570F]">₹{{ number_format($course->fee_per_semester) }}</span>
                <span class="block text-[11px] text-[#696969] font-medium">per semester</span>
            </div>
            <span class="flex items-center gap-1.5 font-mono-brand text-xs text-[#717171] bg-[#F6F6F6] rounded-full px-3 py-1.5">
                <i data-lucide="clock" class="w-3.5 h-3.5 text-[#FE570F]"></i>
                {{ $course->duration }}
            </span>
        </div>

        <div class="mt-auto flex items-center gap-2">
            <a href="{{ route('course.details', $course) }}" data-testid="course-details-link" class="flex-1 inline-flex items-center justify-center gap-1.5 rounded-lg bg-[#E8E8E8] px-4 py-2.5 text-[13px] font-semibold text-[#393939] transition-all duration-300 hover:bg-[#26787C] hover:text-white">
                View Details
                <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
            </a>
            <button type="button" data-open-brochure data-course-id="{{ $course->id }}" data-testid="course-brochure-btn" aria-label="Download brochure for {{ $course->label() }}" title="Download Brochure" class="grid place-items-center w-10 h-10 rounded-lg bg-[#E8E8E8] text-[#393939] transition-all duration-300 hover:bg-[#26787C] hover:text-white">
                <i data-lucide="download" class="w-4 h-4"></i>
            </button>
            <button type="button" data-open-enquiry data-course-label="{{ $course->label() }}" data-testid="course-enquire-btn" class="btn-brand flex-1 inline-flex items-center justify-center rounded-lg px-4 py-2.5 text-[13px] font-semibold">
                <span>Enquire Now</span>
            </button>
        </div>
    </div>
</article>
