<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
    Route::get('/courses/create', function () {
        return Inertia::render('Course/Create');
    })->name('courses.create');
    Route::get('/courses', function () {
        return Inertia::render('Course/Index');
    })->name('courses.index');

    Route::get('/enrollments', function () {
        return Inertia::render('Enrollment/Index');
    })->name('enrollments.index');
    Route::get('/enrollments/create', function () {
        return Inertia::render('Enrollment/Create');
    })->name('enrollments.create');
    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
    Route::get('/student', [StudentController::class, 'index'])->name('student.index');
});

require __DIR__.'/auth.php';
