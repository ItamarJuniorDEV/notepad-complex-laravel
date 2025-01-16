<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// auth routes
Route::get('/login', action: [AuthController::class, 'login']);
Route::get('/logout', action: [AuthController::class, 'logout']);