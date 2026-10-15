<article class="panel panel-hover course-card" data-testid="course-card">
    <a href="{{ route('course.details', $course) }}" data-testid="course-card-image-link" class="card-media">
        <img src="{{ $course->image }}" alt="{{ $course->label() }}" loading="lazy" data-testid="course-card-image">
        <div class="card-badges">
            <span class="card-badge card-badge-orange">{{ $course->degree_type }}</span>
            <span class="card-badge card-badge-white">{{ $course->level }}</span>
        </div>
    </a>

    <div class="card-body-c">
        <p class="card-uni">
            <span class="dot"></span>
            {{ $course->university }}
        </p>
        <a href="{{ route('course.details', $course) }}" data-testid="course-title" class="card-title-c">{{ $course->label() }}</a>

        <div class="card-meta">
            <div data-testid="course-price">
                <span class="card-price">₹{{ number_format($course->fee_per_semester) }}</span>
                <small>per semester</small>
            </div>
            <span class="card-duration">
                <i data-lucide="clock"></i>
                {{ $course->duration }}
            </span>
        </div>

        <div class="card-actions">
            <a href="{{ route('course.details', $course) }}" data-testid="course-details-link" class="btn-card btn-card-gray">
                View Details
                <i data-lucide="external-link"></i>
            </a>
            <button type="button" data-open-brochure data-course-id="{{ $course->id }}" data-testid="course-brochure-btn" aria-label="Download brochure for {{ $course->label() }}" title="Download Brochure" class="btn-icon-card">
                <i data-lucide="download" style="width:16px;height:16px;"></i>
            </button>
            <button type="button" data-open-enquiry data-course-label="{{ $course->label() }}" data-testid="course-enquire-btn" class="btn-card btn-brand">
                <span>Enquire Now</span>
            </button>
        </div>
    </div>
</article>
