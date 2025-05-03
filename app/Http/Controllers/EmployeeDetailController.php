<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = \App\Models\EmployeeDetail::where('user_id', auth()->id())->get();
    return view('employee_details.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'class_10_school_name' => 'required',
        'class_10_board_name' => 'required',
        'class_10_percentage_cgpa' => 'required',
        'class_12_school_name' => 'required',
        'class_12_board_name' => 'required',
        'class_12_percentage_cgpa' => 'required',
        'graduation_college_name' => 'required',
        'graduation_specialization' => 'required',
        'graduation_cgpa' => 'required',
        'post_graduation_college_name' => 'required',
        'post_graduation_specialization' => 'required',
        'post_graduation_cgpa' => 'required',
        'skills' => 'required',
        'organization_name' => 'required',
        'experience_duration_years' => 'required',
        'resume_path' => 'nullable|file|mimes:pdf,doc,docx',
        'certificate_links' => 'nullable|file|mimes:pdf,doc,docx',
    ]);

    // Handle file uploads
    if ($request->hasFile('resume_path')) {
        $validated['resume_path'] = $request->file('resume_path')->store('resumes', 'public');
    }

    if ($request->hasFile('certificate_links')) {
        $validated['certificate_links'] = $request->file('certificate_links')->store('certificates', 'public');
    }

    // Assuming user is authenticated
    $validated['user_id'] = auth()->id();

    \App\Models\EmployeeDetail::create($validated);

    return redirect()->route('employee-details.index')->with('success', 'Details saved successfully!');
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = \App\Models\EmployeeDetail::findOrFail($id);
        return view('employee_details.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detail = \App\Models\EmployeeDetail::findOrFail($id);
        return view('employee_details.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $detail = \App\Models\EmployeeDetail::findOrFail($id);

    $validated = $request->validate([
        'class_10_school_name' => 'required',
        'class_10_board_name' => 'required',
        'class_10_percentage_cgpa' => 'required',
        'class_12_school_name' => 'required',
        'class_12_board_name' => 'required',
        'class_12_percentage_cgpa' => 'required',
        'graduation_college_name' => 'required',
        'graduation_specialization' => 'required',
        'graduation_cgpa' => 'required',
        'post_graduation_college_name' => 'required',
        'post_graduation_specialization' => 'required',
        'post_graduation_cgpa' => 'required',
        'skills' => 'required',
        'organization_name' => 'required',
        'experience_duration_years' => 'required',
        'resume_path' => 'nullable|file|mimes:pdf,doc,docx',
        'certificate_links' => 'nullable|file|mimes:pdf,doc,docx',
    ]);

    // File uploads
    if ($request->hasFile('resume_path')) {
        $validated['resume_path'] = $request->file('resume_path')->store('resumes', 'public');
    }

    if ($request->hasFile('certificate_links')) {
        $validated['certificate_links'] = $request->file('certificate_links')->store('certificates', 'public');
    }

    $detail->update($validated);

    return redirect()->route('employee-details.index')->with('success', 'Details updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail = \App\Models\EmployeeDetail::findOrFail($id);
    $detail->delete();

    return redirect()->route('employee-details.index')->with('success', 'Details deleted successfully!');
    }
}
