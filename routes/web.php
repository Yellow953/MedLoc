<?php

use App\Http\Controllers\MedController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Meds Routes
Route::prefix('meds')->group(function () {
    Route::get('/', [MedController::class, 'index'])->name('meds');
    Route::get('/new', [MedController::class, 'new'])->name('meds.new');
    Route::post('/create', [MedController::class, 'create'])->name('meds.create');
    Route::get('/{med}/edit', [MedController::class, 'edit'])->name('meds.edit');
    Route::post('/{med}/update', [MedController::class, 'update'])->name('meds.update');
    Route::get('/{med}/delete', [MedController::class, 'destroy'])->name('meds.destroy');
});

Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'profile']);
Route::post('/profile/{id}/save', [App\Http\Controllers\HomeController::class, 'profile_save']);

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
