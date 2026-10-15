@php
$enquirySuccess = session('enquiry_success');
$brochureSuccess = session('brochure_success');
$openEnquiryOnLoad = $enquirySuccess || $errors->enquiry->any();
$universities = ['Amity University', 'DY Patil Pune', 'Manipal University Jaipur', 'Sikkim Manipal University', 'Jain University', 'Not sure yet — need guidance'];
$inputBase = 'form-control';
@endphp

{{-- ============ ENQUIRY MODAL ============ --}}
<div id="enquiry-modal" data-testid="enquiry-modal" class="overlay-modal">
    <div class="modal-overlay position-absolute" data-close-modal style="inset:0;"></div>
    <div class="modal-panel-c" data-testid="enquiry-modal-panel">
        <span class="modal-accent"></span>
        <button type="button" data-close-modal data-testid="enquiry-modal-close-btn" aria-label="Close" class="btn-close-c">
            <i data-lucide="x"></i>
        </button>

        @if ($enquirySuccess)
            <div class="text-center py-5" data-testid="enquiry-success">
                <i data-lucide="check-circle-2" class="c-orange mx-auto d-block mb-4" style="width:56px;height:56px;"></i>
                <p class="font-display fw-bolder c-ink mb-1" style="font-size:20px;">Slot booked!</p>
                <p class="c-body m-0" style="font-size:14px;">{{ $enquirySuccess }}</p>
            </div>
        @else
            <h3 class="font-display fw-bolder c-ink pe-5 m-0" style="font-size:24px; letter-spacing:-0.02em;">Book Your Free Consultation Slot</h3>
            <p class="c-body mt-2 mb-4" style="font-size:14px; line-height:1.65;">Get expert guidance on UGC-approved online degree selection, EMI options and the admission procedure.</p>

            @if ($errors->enquiry->any())
                <div class="error-note" data-testid="enquiry-errors">{{ $errors->enquiry->first() }}</div>
            @endif

            <form method="POST" action="{{ route('enquiries.store') }}" data-testid="enquiry-form" class="d-flex flex-column gap-3">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <input type="text" name="name" value="{{ old('name') }}" data-testid="enquiry-name-input" placeholder="Full Name *" class="form-control w-100">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="phone" value="{{ old('phone') }}" data-testid="enquiry-phone-input" placeholder="Phone Number *" class="form-control w-100">
                    </div>
                </div>
                <input type="email" name="email" value="{{ old('email') }}" data-testid="enquiry-email-input" placeholder="Email Address *" class="form-control">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <select name="university" data-testid="enquiry-university-select" class="form-select w-100">
                            <option value="">Preferred University</option>
                            @foreach ($universities as $u)
                                <option value="{{ $u }}" @if (old('university') === $u) selected @endif>{{ $u }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="course" value="{{ old('course') }}" data-enquiry-course-input data-testid="enquiry-course-input" placeholder="Interested Course / Degree" class="form-control">
                    </div>
                </div>
                <textarea name="background" rows="2" data-testid="enquiry-background-input" placeholder="Education background / work experience (optional)" class="form-control" style="resize:none;">{{ old('background') }}</textarea>
                <button type="submit" data-testid="enquiry-submit-btn" class="btn-brand w-100" style="border-radius:10px; padding:14px;">
                    <span>Confirm Free Slot</span>
                </button>
                <p class="text-center c-body m-0" style="font-size:11px;">No spam, ever. One call, zero obligation.</p>
            </form>
        @endif
    </div>
</div>

{{-- ============ BROCHURE MODAL ============ --}}
<div id="brochure-modal" data-testid="brochure-modal" class="overlay-modal">
    <div class="modal-overlay position-absolute" data-close-modal style="inset:0;"></div>
    <div class="modal-panel-c" data-testid="brochure-modal-panel">
        <span class="modal-accent"></span>
        <button type="button" data-close-modal data-testid="brochure-modal-close-btn" aria-label="Close" class="btn-close-c">
            <i data-lucide="x"></i>
        </button>

        <h3 class="font-display fw-bolder c-ink pe-5 m-0" style="font-size:24px; letter-spacing:-0.02em;">Download Official Brochure</h3>
        <p data-brochure-subtitle class="c-body mt-2 mb-4" style="font-size:14px; line-height:1.65;">The complete 2026 catalogue: every UGC-recognized program, university, fee and duration.</p>

        @if ($errors->brochure->any())
            <div class="error-note" data-testid="brochure-errors">{{ $errors->brochure->first() }}</div>
        @endif

        <form method="POST" action="{{ route('brochure.lead') }}" data-testid="brochure-form" class="d-flex flex-column gap-3">
            @csrf
            <input type="hidden" name="course_id" value="all" data-brochure-course-id>
            <input type="text" name="name" value="{{ old('name') }}" data-testid="brochure-name-input" placeholder="Full Name *" class="form-control">
            <input type="text" name="phone" value="{{ old('phone') }}" data-testid="brochure-phone-input" placeholder="WhatsApp Mobile Number *" class="form-control">
            <input type="email" name="email" value="{{ old('email') }}" data-testid="brochure-email-input" placeholder="Email Address *" class="form-control">
            <button type="submit" data-testid="brochure-submit-btn" class="btn-brand w-100" style="border-radius:10px; padding:14px;">
                <i data-lucide="download" style="width:16px;height:16px;"></i>
                <span>Get Instant PDF Download</span>
            </button>
        </form>
    </div>
</div>
