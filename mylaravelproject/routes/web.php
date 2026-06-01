<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Redirect homepage to students dashboard
Route::get('/', function () {
    return redirect()->route('students.index');
});

// Student Management Routes
Route::resource('students', StudentController::class);
