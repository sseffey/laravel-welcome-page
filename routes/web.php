<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// GET /  -> show the page
Route::get('/', [WelcomeController::class, 'index']);

// POST /greet -> handle the form submission
Route::post('/greet', [WelcomeController::class, 'greet']);
