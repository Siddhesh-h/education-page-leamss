<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $query = Course::query()->orderBy('sort');

        $search = trim((string) request('search', ''));
        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('degree', 'like', "%{$search}%")
                    ->orWhere('spec', 'like', "%{$search}%")
                    ->orWhere('university', 'like', "%{$search}%");
            });
        }

        if ($university = request('university')) {
            $query->where('university', $university);
        }

        if ($degree = request('degree')) {
            $query->where('degree_type', $degree);
        }

        $sort = request('sort', 'featured');
        match ($sort) {
            'price-asc' => $query->orderBy('fee_per_semester'),
            'price-desc' => $query->orderByDesc('fee_per_semester'),
            'duration' => $query->orderByRaw('CAST(duration as DECIMAL(3,1))'),
            default => $query->orderBy('sort'),
        };

        $courses = $query->get();
        $allCourses = Course::orderBy('sort')->get();

        return view('home', [
            'courses' => $courses,
            'allCourses' => $allCourses,
            'count' => $allCourses->count(),
            'minFee' => $allCourses->min('fee_per_semester'),
            'universities' => $allCourses->pluck('university')->unique()->values(),
            'degreeChips' => ['All', 'MBA', 'MCA', 'BBA', 'BCA', 'B.Com', 'M.Com', 'MA', 'BA', 'Integrated'],
            'search' => $search,
            'university' => (string) request('university', ''),
            'degree' => (string) request('degree', 'All'),
            'sort' => $sort,
        ]);
    }
}
