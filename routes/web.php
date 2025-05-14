
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeDetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CreateJobController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Middleware\CheckIfEmployer;
use App\Http\Middleware\CheckIfEmployee;


Route::post('/register-users', [UserController::class, 'store']);
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [JobController::class, 'index']);
Route::get('/search-jobs', [JobController::class, 'search'])->name('search.jobs');

Route::get('/details', function () {
    return view('Details');
});

Route::get('/terms', function () {
    return view('TermsAndCondition');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::get('/register', function () {
        return view('Register');
    });
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/myJob', function () {
    return view('myJob');
});

Route::get('/apply', function () {
    return view('apply');
});
Route::get('/appliedJob', function () {
    return view('appliedJob');
});

Route::get('/savedJob', function () {
    return view('savedJob');
});

Route::get('/Mean', function () {
    return view('Mean');
});

Route::get('/Mern1', function () {
    return view('Mern1');
});

Route::get('/Mern2', function () {
    return view('Mern2');
});

Route::get('/SofDev', function () {
    return view('SoftDev');
});

Route::get('/SofDev2', function () {
    return view('SofDev2');
});

Route::get('/PhpDev', function () {
    return view('PhpDev');
});

Route::get('/Accountant', function () {
    return view('Accountant');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog1', function () {
    return view('blogInterview');
});

Route::get('/blog2', function () {
    return view('blogResume');
});

Route::get('/blog3', function () {
    return view('blogJob');
});

Route::get('/faq', function () {
    return view('FAQ');
});

Route::get('/applied', function () {
    return view('Applied');
});

Route::resource('employee-details', EmployeeDetailController::class);

// Routes for both employee and employer after authentication
Route::middleware('auth')->group(function () {

    // Employee routes
    Route::middleware('employee')->group(function () {
        Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
        Route::get('/myJob', [JobController::class, 'myJob']);
        Route::get('/appliedJob', [JobController::class, 'appliedJob']);
        Route::post('/profile/upload', [ProfileController::class, 'storeOrUpdate'])->name('profile.upload');
    });

    // Employer routes
    Route::middleware('employer')->group(function () {
        Route::get('/postJob', [JobController::class, 'postJob']);
        Route::get('/savedJob', [JobController::class, 'savedJob']);
        Route::post('/postJob', [CreateJobController::class, 'store'])->name('job.store');

        //edit, update, and delete jobs
        Route::get('/job/{id}/edit', [CreateJobController::class, 'edit'])->name('job.edit');
        Route::put('/job/{id}', [CreateJobController::class, 'update'])->name('job.update');
        Route::delete('/job/{id}', [CreateJobController::class, 'destroy'])->name('job.destroy');
    });
});

Route::get('/job/{id}', [JobController::class, 'show']);
// Route::get('/apply/{id}', [JobController::class, 'applyForm']);
Route::middleware('auth')->post('/apply/{job}', [JobApplicationController::class, 'store'])->name('apply.job');
Route::get('/appliedJob', [JobApplicationController::class, 'showUserApplications'])->middleware('auth');

