<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EnquiryController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'university' => ['nullable', 'string', 'max:255'],
            'course' => ['nullable', 'string', 'max:255'],
            'background' => ['nullable', 'string', 'max:2000'],
        ], [], [
            'name' => 'Full Name',
            'email' => 'Email Address',
            'phone' => 'Phone Number',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator, 'enquiry')->withInput();
        }

        Enquiry::create($validator->validated());

        return back()
            ->withInput()
            ->with([
                'enquiry_success' => 'Slot booked! Our counsellor will call you within 24 hours.',
                'open_enquiry' => true,
            ]);
    }
}
