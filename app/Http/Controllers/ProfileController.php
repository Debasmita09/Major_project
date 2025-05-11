<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\EmployeeDetail;
use Illuminate\Support\Facades\Storage;
class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $employeeDetail = $user->employeeDetail; // relationship from User model
        return view('profile', compact('user', 'employeeDetail'));
    }

    public function storeOrUpdate(Request $request)
{
    $user = Auth::user();

    $validated = $request->validate([
        'class_10_school_name' => 'required|string',
        'class_10_board_name' => 'required|string',
        'class_10_percentage_cgpa' => 'required|string',
        'class_12_school_name' => 'required|string',
        'class_12_board_name' => 'required|string',
        'class_12_percentage_cgpa' => 'required|string',
        'graduation_college_name' => 'required|string',
        'graduation_specialization' => 'required|string',
        'graduation_cgpa' => 'required|string',
        'post_graduation_college_name' => 'nullable|string',
        'post_graduation_specialization' => 'nullable|string',
        'post_graduation_cgpa' => 'nullable|string',
        'skills' => 'required|string',
        'organization_name' => 'required|string',
        'experience_duration_years' => 'required|string',
        'certificate_links' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        'resume_path' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
    ]);

    if ($request->hasFile('certificate_links')) {
        $validated['certificate_links'] = $request->file('certificate_links')->store('certificates', 'public');
    }

    if ($request->hasFile('resume_path')) {
        $validated['resume_path'] = $request->file('resume_path')->store('resumes', 'public');
    }

    $validated['user_id'] = $user->id;

    EmployeeDetail::updateOrCreate(
        ['user_id' => $user->id],
        $validated
    );

    return redirect()->back()->with('success', 'Profile updated successfully!');
}
}
