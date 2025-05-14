<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    public function store(Request $request, $jobId)
    {
        // if (!Auth::check()) {
        //     return redirect('/login')->with('error', 'You need to be logged in to apply.');
        // }

        $user = Auth::user();

        // Prevent duplicate application
        $existing = JobApplication::where('user_id', $user->id)
            ->where('job_id', $jobId)->first();

        if ($existing) {
            return redirect()->back()->with('message', 'You already applied for this job.');
        }

        try {
            JobApplication::create([
                'user_id' => $user->id,
                'job_id' => $jobId,
                'status' => 'Applied'
            ]);

            return redirect('apply')->with('success', 'Application submitted!');
        } catch (\Exception $e) {
            // Log::error('Error creating job application: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an issue submitting your application.');
        }
    }

    public function showUserApplications()
    {
        $user = Auth::user();
        $applications = JobApplication::with('job')
            ->where('user_id', $user->id)
            ->latest()
            ->get();

        return view('appliedjob', compact('applications'));
    }
}
