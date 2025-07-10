<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AboutController::class, 'index'])->name('about');
Route::get('resume', [ResumeController::class, 'index'])->name('resume');
Route::get('services', [ServicesController::class, 'index'])->name('services');
Route::get('project', [ProjectController::class, 'index'])->name('project');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('contact/confirmation', [ContactController::class, 'showConfirmation'])->name('contact.confirmation');