<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Login route
Route::post('/login', [AuthController::class, 'login']);

// Register route
Route::post('/register', [AuthController::class, 'register']);

// Get current user (protected)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
