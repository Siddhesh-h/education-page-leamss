<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Contracts\View\View;

class CourseController extends Controller
{
    public function show(Course $course): View
    {
        $allCourses = Course::orderBy('sort')->get();

        $related = $allCourses
            ->filter(fn (Course $c) => $c->id !== $course->id
                && ($c->university === $course->university || $c->degree_type === $course->degree_type))
            ->take(3)
            ->values();

        return view('course.details', [
            'course' => $course,
            'label' => $course->label(),
            'semesters' => $course->semesters(),
            'fullFee' => $course->fullFee(),
            'emi' => $course->emi(),
            'related' => $related,
            'highlights' => config('leamss.highlights')[$course->degree_type] ?? [],
            'accreditations' => config('leamss.accreditations')[$course->university] ?? ['UGC-DEB Entitled', 'Globally Recognized'],
            'careerImpact' => config('leamss.career_impact'),
            'uniAdvantages' => config('leamss.uni_advantages'),
            'admissionSteps' => config('leamss.admission_steps'),
            'jobRoles' => config('leamss.job_roles')[$course->degree_type] ?? [],
            'foreignEligibility' => config('leamss.foreign_eligibility'),
            'hiringLogos' => config('leamss.hiring_logos'),
            'faqs' => $this->faqs($course),
        ]);
    }

    private function faqs(Course $course): array
    {
        return [
            [
                'q' => "What is an online {$course->degree_type} course?",
                'a' => "An online {$course->degree_type} is a UGC-DEB entitled degree you can complete through online learning. It covers the same concepts as an on-campus program while offering the flexibility to study from anywhere — perfect for working professionals and students alike.",
            ],
            [
                'q' => 'Are these online degrees valid and UGC-approved?',
                'a' => 'Yes. All programs listed are offered by UGC-DEB entitled universities, and the degrees hold the same value as regular on-campus degrees for jobs and higher education in India and abroad.',
            ],
            [
                'q' => 'Do online programs include exams and assignments?',
                'a' => 'Yes, online programs include regular assignments, quizzes, and online exams to assess your understanding. These are conducted in a flexible and student-friendly format, allowing you to complete them from home.',
            ],
            [
                'q' => 'Can I study while working full-time?',
                'a' => "Absolutely — that's the biggest advantage of flexible distance learning. Attend live weekend lectures or catch up with recorded archives on the 24/7 LMS, so you never miss a class while managing your job.",
            ],
            [
                'q' => 'Are EMI and scholarship options available?',
                'a' => 'Yes. Universities offer scholarships, financial aid and easy interest-free EMI options on program fees, making online education highly affordable compared to studying abroad.',
            ],
        ];
    }
}
