<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
// Home page
Route::get('/', function () {
    return view('home');
});

// Hello route
Route::get('/hello/{your_name}', function ($your_name) {
    return "Hello, " . $your_name;
});

// About route using controller
Route::get('/about', [AboutController::class, 'index']);
Route::resource('students', StudentController::class);
Route::get('/roll/{your_roll}', function (App\Models\Student $student) {
    return view('students.show', compact('student'));
});