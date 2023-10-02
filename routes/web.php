<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Site
Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
});


// Auth admin
Route::middleware('is_admin')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});

 // Auth users
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'users'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// latste update before delete from laptop