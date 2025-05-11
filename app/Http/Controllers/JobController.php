<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->take(3)->get();
        return view('home', compact('jobs'));
    }
    public function myJob()
    {
        return view('myJob');
    }

    public function appliedJob()
    {
        return view('appliedJob');
    }

    public function postJob()
    {
        return view('postJob');
    }

    public function savedJob()
    {
        // Retrieve the saved jobs posted by the logged-in employer
        $savedJobs = Job::where('user_id', Auth::id())->get();


        // Check if there are no jobs posted and pass a message to the view if needed
        if ($savedJobs->isEmpty()) {
            $message = 'No jobs have been posted yet.';
        } else {
            $message = null;
        }

        // Pass savedJobs and message to the view
        return view('savedJob', compact('savedJobs', 'message'));
    }

    public function search(Request $request)
    {
        $query = Job::query();

        if ($request->filled('keyword')) {
            $query->where('job_title', 'like', '%' . $request->keyword . '%')
                ->orWhere('job_description', 'like', '%' . $request->keyword . '%');
        }

        if ($request->filled('location')) {
            $query->where('location', $request->location);
        }

        if ($request->filled('category')) {
            $query->where('job_category', $request->category);
        }

        if ($request->filled('type')) {
            $query->where('job_type', $request->type);
        }

        $jobs = $query->latest()->get();

        return view('home', compact('jobs'));
    }

    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('details', compact('job'));
    }

    public function applyForm($id)
    {
        $job = Job::findOrFail($id);
        return view('apply', compact('job'));
    }
}
