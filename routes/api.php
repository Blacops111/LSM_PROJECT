<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Course Management Routes
Route::apiResource('courses', CourseController::class);

// Assignment Management Routes
Route::apiResource('assignments', AssignmentController::class);

// User Management Routes
Route::get('/students', [UserController::class, 'index']);
Route::get('/teachers', [UserController::class, 'index']);
