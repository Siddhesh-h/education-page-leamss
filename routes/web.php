<?php

use App\Http\Controllers\BrochureController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'hub'])->name('hub');

Route::get('/education', [HomeController::class, 'education'])->name('education');
Route::get('/education/domestic', [HomeController::class, 'domestic'])->name('education.domestic');
Route::get('/education/international', [HomeController::class, 'international'])->name('education.international');

Route::get('/migration', [HomeController::class, 'migration'])->name('migration');

Route::get('/course-details/{course}', [CourseController::class, 'show'])->name('course.details');

Route::post('/enquiries', [EnquiryController::class, 'store'])->name('enquiries.store');

Route::post('/brochure-request', [BrochureController::class, 'lead'])->name('brochure.lead');
Route::get('/brochure/{course}/download', [BrochureController::class, 'download'])->name('brochure.download');
Route::get('/brochure/download-all', [BrochureController::class, 'downloadAll'])->name('brochure.downloadAll');
