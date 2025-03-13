<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Auth;


// Enable Authentication & Registration
Auth::routes(['register' => true]);

// Home Route (Redirect Users Based on Role)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin (Teacher) Routes
Route::middleware(['auth', 'role:teacher'])->group(function () {
    Route::resource('courses', CourseController::class);
    Route::resource('assignments', AssignmentController::class);
    Route::get('/admin', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::post('notifications/send', [NotificationController::class, 'send'])->name('notifications.send');
});

// Student Routes
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('courses/enroll/{course}', [CourseController::class, 'enroll'])->name('courses.enroll');
    Route::post('assignments/submit/{assignment}', [AssignmentController::class, 'submit'])->name('assignments.submit');
    Route::get('/dashboard', [HomeController::class, 'studentDashboard'])->name('student.dashboard');
});

// Discussion Routes (Accessible to both Students and Teachers)
Route::middleware('auth')->group(function () {
    Route::resource('discussions', DiscussionController::class);
});

// Guest Routes
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/instructors', [HomeController::class, 'instructors'])->name('instructors');

// Redirect After Login Based on Role
Route::get('/home', function () {
    if (auth()->check()) {
        return auth()->user()->role === 'teacher' ? redirect()->route('admin.dashboard') : redirect()->route('student.dashboard');
    }
    return redirect('/');
})->middleware('auth');

