<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\DB;


Route::get('/example', [MyController::class, 'index']);

Route::post('/users', [UserController::class, 'store']);
Route::get('/get-users', [UserController::class, 'index']);
Route::get('/db-check', function () {
    try {
        DB::connection()->getPdo();
        return 'Database is connected.';
    } catch (\Exception $e) {
        return 'Database connection error: ' . $e->getMessage();
    }
});