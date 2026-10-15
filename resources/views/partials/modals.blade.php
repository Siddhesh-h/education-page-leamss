@php
$enquirySuccess = session('enquiry_success');
$brochureSuccess = session('brochure_success');
$openEnquiryOnLoad = $enquirySuccess || $errors->enquiry->any();
$universities = ['Amity University', 'DY Patil Pune', 'Manipal University Jaipur', 'Sikkim Manipal University', 'Jain University', 'Not sure yet — need guidance'];
@endphp

{{-- ============ ENQUIRY MODAL ============ --}}
<div id="enquiry-modal" data-testid="enquiry-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-6 bg-[#0F0F11]/60 backdrop-blur-md overflow-y-auto modal">
    <div class="modal-overlay absolute inset-0" data-close-modal></div>
    <div class="modal-panel relative w-full max-w-lg rounded-[14px] border border-[#E8E8E8] bg-white p-7 sm:p-9 shadow-[0_40px_100px_-30px_rgba(15,15,17,0.45)] my-6" data-testid="enquiry-modal-panel">
        <span class="absolute top-0 left-0 h-1.5 w-24 bg-[#FE570F]" style="border-radius:0 0 30px 0"></span>
        <button type="button" data-close-modal data-testid="enquiry-modal-close-btn" aria-label="Close" class="absolute top-4 right-4 grid place-items-center w-9 h-9 rounded-lg border border-[#E8E8E8] text-[#696969] transition-colors hover:border-[#FE570F] hover:text-[#FE570F]">
            <i data-lucide="x" class="w-4 h-4"></i>
        </button>

        @if ($enquirySuccess)
            <div class="text-center py-8" data-testid="enquiry-success">
                <i data-lucide="check-circle-2" class="w-14 h-14 text-[#FE570F] mx-auto mb-4"></i>
                <p class="font-display text-xl font-bold text-[#0F0F11]">Slot booked!</p>
                <p class="text-[#696969] text-sm mt-2">{{ $enquirySuccess }}</p>
            </div>
        @else
            <h3 class="font-display text-2xl font-extrabold tracking-tight text-[#0F0F11] pr-10">Book Your Free Consultation Slot</h3>
            <p class="text-[#696969] text-sm mt-2 mb-7 leading-relaxed">Get expert guidance on UGC-approved online degree selection, EMI options and the admission procedure.</p>

            @if ($errors->enquiry->any())
                <div class="mb-4 rounded-lg border border-[#E02735]/40 bg-[#E02735]/5 px-4 py-3 text-[13px] text-[#E02735] font-medium" data-testid="enquiry-errors">
                    {{ $errors->enquiry->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('enquiries.store') }}" data-testid="enquiry-form" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <input type="text" name="name" value="{{ old('name') }}" data-testid="enquiry-name-input" placeholder="Full Name *" class="w-full rounded-lg border border-[#B7B7B7] bg-white px-4 py-3 text-sm text-[#0F0F11] placeholder:text-[#9A9A9A] focus:border-[#FE570F] focus:ring-2 focus:ring-[#FE570F]/20 transition outline-none">
                    <input type="text" name="phone" value="{{ old('phone') }}" data-testid="enquiry-phone-input" placeholder="Phone Number *" class="w-full rounded-lg border border-[#B7B7B7] bg-white px-4 py-3 text-sm text-[#0F0F11] placeholder:text-[#9A9A9A] focus:border-[#FE570F] focus:ring-2 focus:ring-[#FE570F]/20 transition outline-none">
                </div>
                <input type="email" name="email" value="{{ old('email') }}" data-testid="enquiry-email-input" placeholder="Email Address *" class="w-full rounded-lg border border-[#B7B7B7] bg-white px-4 py-3 text-sm text-[#0F0F11] placeholder:text-[#9A9A9A] focus:border-[#FE570F] focus:ring-2 focus:ring-[#FE570F]/20 transition outline-none">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <select name="university" data-testid="enquiry-university-select" class="w-full rounded-lg border border-[#B7B7B7] bg-white px-4 py-3 text-sm text-[#0F0F11] focus:border-[#FE570F] focus:ring-2 focus:ring-[#FE570F]/20 transition outline-none cursor-pointer">
                        <option value="">Preferred University</option>
                        @foreach ($universities as $u)
                            <option value="{{ $u }}" @if (old('university') === $u) selected @endif>{{ $u }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="course" value="{{ old('course') }}" data-enquiry-course-input data-testid="enquiry-course-input" placeholder="Interested Course / Degree" class="w-full rounded-lg border border-[#B7B7B7] bg-white px-4 py-3 text-sm text-[#0F0F11] placeholder:text-[#9A9A9A] focus:border-[#FE570F] focus:ring-2 focus:ring-[#FE570F]/20 transition outline-none">
                </div>
                <textarea name="background" rows="2" data-testid="enquiry-background-input" placeholder="Education background / work experience (optional)" class="w-full rounded-lg border border-[#B7B7B7] bg-white px-4 py-3 text-sm text-[#0F0F11] placeholder:text-[#9A9A9A] focus:border-[#FE570F] focus:ring-2 focus:ring-[#FE570F]/20 transition outline-none resize-none">{{ old('background') }}</textarea>
                <button type="submit" data-testid="enquiry-submit-btn" class="btn-brand w-full inline-flex items-center justify-center gap-2 rounded-lg py-3.5 text-sm font-bold transition-transform duration-300 hover:scale-[1.02] active:scale-95">
                    <span>Confirm Free Slot</span>
                </button>
                <p class="text-center text-[11px] text-[#696969]">No spam, ever. One call, zero obligation.</p>
            </form>
        @endif
    </div>
</div>

{{-- ============ BROCHURE MODAL ============ --}}
<div id="brochure-modal" data-testid="brochure-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-6 bg-[#0F0F11]/60 backdrop-blur-md overflow-y-auto modal">
    <div class="modal-overlay absolute inset-0" data-close-modal></div>
    <div class="modal-panel relative w-full max-w-lg rounded-[14px] border border-[#E8E8E8] bg-white p-7 sm:p-9 shadow-[0_40px_100px_-30px_rgba(15,15,17,0.45)] my-6" data-testid="brochure-modal-panel">
        <span class="absolute top-0 left-0 h-1.5 w-24 bg-[#FE570F]" style="border-radius:0 0 30px 0"></span>
        <button type="button" data-close-modal data-testid="brochure-modal-close-btn" aria-label="Close" class="absolute top-4 right-4 grid place-items-center w-9 h-9 rounded-lg border border-[#E8E8E8] text-[#696969] transition-colors hover:border-[#FE570F] hover:text-[#FE570F]">
            <i data-lucide="x" class="w-4 h-4"></i>
        </button>

        <h3 class="font-display text-2xl font-extrabold tracking-tight text-[#0F0F11] pr-10">Download Official Brochure</h3>
        <p data-brochure-subtitle class="text-[#696969] text-sm mt-2 mb-7 leading-relaxed">The complete 2026 catalogue: every UGC-recognized program, university, fee and duration.</p>

        @if ($errors->brochure->any())
            <div class="mb-4 rounded-lg border border-[#E02735]/40 bg-[#E02735]/5 px-4 py-3 text-[13px] text-[#E02735] font-medium" data-testid="brochure-errors">
                {{ $errors->brochure->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('brochure.lead') }}" data-testid="brochure-form" class="space-y-4">
            @csrf
            <input type="hidden" name="course_id" value="all" data-brochure-course-id>
            <input type="text" name="name" value="{{ old('name') }}" data-testid="brochure-name-input" placeholder="Full Name *" class="w-full rounded-lg border border-[#B7B7B7] bg-white px-4 py-3 text-sm text-[#0F0F11] placeholder:text-[#9A9A9A] focus:border-[#FE570F] focus:ring-2 focus:ring-[#FE570F]/20 transition outline-none">
            <input type="text" name="phone" value="{{ old('phone') }}" data-testid="brochure-phone-input" placeholder="WhatsApp Mobile Number *" class="w-full rounded-lg border border-[#B7B7B7] bg-white px-4 py-3 text-sm text-[#0F0F11] placeholder:text-[#9A9A9A] focus:border-[#FE570F] focus:ring-2 focus:ring-[#FE570F]/20 transition outline-none">
            <input type="email" name="email" value="{{ old('email') }}" data-testid="brochure-email-input" placeholder="Email Address *" class="w-full rounded-lg border border-[#B7B7B7] bg-white px-4 py-3 text-sm text-[#0F0F11] placeholder:text-[#9A9A9A] focus:border-[#FE570F] focus:ring-2 focus:ring-[#FE570F]/20 transition outline-none">
            <button type="submit" data-testid="brochure-submit-btn" class="btn-brand w-full inline-flex items-center justify-center gap-2 rounded-lg py-3.5 text-sm font-bold transition-transform duration-300 hover:scale-[1.02] active:scale-95">
                <i data-lucide="download" class="w-4 h-4"></i>
                <span>Get Instant PDF Download</span>
            </button>
        </form>
    </div>
</div>
