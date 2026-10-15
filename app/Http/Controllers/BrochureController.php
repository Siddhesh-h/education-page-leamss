<?php

namespace App\Http\Controllers;

use App\Models\BrochureLead;
use App\Models\Course;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class BrochureController extends Controller
{
    public function lead(Request $request): Response
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'course_id' => ['nullable', 'string', 'max:255'],
        ], [], [
            'name' => 'Full Name',
            'email' => 'Email Address',
            'phone' => 'WhatsApp Mobile Number',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator, 'brochure')->withInput();
        }

        $validated = $validator->validated();
        BrochureLead::create($validated + ['course_id' => $validated['course_id'] ?? 'all']);

        return $this->streamPdf($validated['course_id'] ?? 'all');
    }

    public function download(Course $course): Response
    {
        return $this->streamPdf($course->id);
    }

    public function downloadAll(): Response
    {
        return $this->streamPdf('all');
    }

    private function streamPdf(string $courseId): Response
    {
        if ($courseId === 'all') {
            $courses = Course::orderBy('sort')->get();
            $pdf = Pdf::loadView('brochure.master', ['courses' => $courses])
                ->setPaper('a4');

            return $pdf->download('Leamss-Online-Degrees-Brochure-2026.pdf');
        }

        $course = Course::findOrFail($courseId);
        $pdf = Pdf::loadView('brochure.course', [
            'course' => $course,
            'label' => $course->label(),
            'highlights' => config('leamss.highlights')[$course->degree_type] ?? [],
        ])->setPaper('a4');

        return $pdf->download('Leamss-Brochure-'.substr($course->id, 0, 48).'.pdf');
    }
}
