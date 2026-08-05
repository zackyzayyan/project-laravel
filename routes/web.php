<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/profile', [PortfolioController::class, 'profile'])->name('profile');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');