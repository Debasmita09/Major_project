<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Exception;
use Illuminate\Support\Facades\Auth;

class CreateJobController extends Controller
{
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('postJob', compact('job'));
    }
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'job_title'         => 'required|string|max:255',
                'category'          => 'required|string',
                'designation'       => 'required|string',
                'job_type'          => 'required|string',
                'salary'            => 'required|string',
                'city'              => 'required|string',
                'job_description'   => 'required|string',
                'benefits'          => 'nullable|string',
                'qualifications'    => 'nullable|string',
                'organisation_name' => 'required|string|max:255',
                'email'             => 'required|email',
                'location'          => 'required|string|max:255',
                'website'           => 'nullable|url',
                'company_logo'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
            ]);

            if ($request->hasFile('company_logo')) {
                $path = $request->file('company_logo')->store('logos', 'public');
                $validated['company_logo'] = $path;
            }

            // Add user_id to validated data (logged-in user's ID)
            $validated['user_id'] = Auth::id(); // Set user_id to the logged-in employer's ID
            Job::create($validated);

            return response()->json([
                'message' => 'Job posted successfully.',
                'data' => $validated
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $e->errors()
            ], 422);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'An error occurred while posting the job.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $job = Job::findOrFail($id);

            $validated = $request->validate([
                'job_title'         => 'required|string|max:255',
                'category'          => 'required|string',
                'designation'       => 'required|string',
                'job_type'          => 'required|string',
                'salary'            => 'required|string',
                'city'              => 'required|string',
                'job_description'   => 'required|string',
                'benefits'          => 'nullable|string',
                'qualifications'    => 'nullable|string',
                'organisation_name' => 'required|string|max:255',
                'email'             => 'required|email',
                'location'          => 'required|string|max:255',
                'website'           => 'nullable|url',
                'company_logo'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
            ]);

            // Handle logo update
            if ($request->hasFile('company_logo')) {
                // Delete old logo if exists
                if ($job->company_logo && Storage::disk('public')->exists($job->company_logo)) {
                    Storage::disk('public')->delete($job->company_logo);
                }

                $validated['company_logo'] = $request->file('company_logo')->store('logos', 'public');
            }

            $job->update($validated);

            return response()->json([
                'message' => 'Job updated successfully.',
                'data' => $validated
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $e->errors()
            ], 422);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'An error occurred while updating the job.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
