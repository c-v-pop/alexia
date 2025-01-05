<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/policies', [PageController::class, 'policies'])->name('policies');
Route::get('/pricelist', [PageController::class, 'pricelist'])->name('pricelist');
Route::get('/treatments', [PageController::class, 'treatments'])->name('treatments');

// Authenticated and Verified User Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Management Routes (Requires Authentication)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes
require __DIR__ . '/auth.php';
