<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserpageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;

// Grouping routes under a middleware to handle authentication, if needed
Route::middleware('auth:api')->group(function () {
    // Protected routes (require authentication)
    Route::get('/profile', function (Request $request) {
        return $request->user();
    });
});

// Public routes for the API
Route::get('/home', [UserpageController::class, 'index']);
Route::get('/about', [AdminController::class, 'index']);
Route::get('/services', [PostController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// You can also use a POST route for submitting data to the backend
Route::post('/contact', [ContactController::class, 'submit']);
