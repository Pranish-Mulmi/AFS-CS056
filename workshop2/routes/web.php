<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::middleware('guest')->group(function () {

    Route::get('/login',
        [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login',
        [AuthController::class, 'login']);

    Route::get('/register',
        [AuthController::class, 'showRegister']);

    Route::post('/register',
        [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {

    Route::resource(
        'students',
        StudentController::class
    );

    Route::resource(
        'courses',
        CourseController::class
    );

    Route::post('/logout',
        [AuthController::class, 'logout'])
        ->name('logout');
});