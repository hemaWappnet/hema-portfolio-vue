<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Main portfolio routes
Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

// Contact form submission
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
