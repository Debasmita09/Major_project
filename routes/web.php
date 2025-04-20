
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/details', function () {
    return view('Details');
});

Route::get('/terms', function () {
    return view('TermsAndCondition');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/register', function () {
    return view('Register');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('postJob', function () {
    return view('postJob');
});

Route::get('/myJob', function () {
    return view('myJob');
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