<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('services', [ServicesController::class, 'index'])->name('services');
Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
