<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BinController;

Route::get('/', function () {
    return view('welcome');
});

// Regular user dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin dashboard route
Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
})->middleware(['auth'])->name('dashboardadmin');

// Grouped routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin login routes
Route::get('/loginadmin', function () {
    return view('loginadmin');
})->name('loginadmin');

Route::post('/loginadmin', [AuthenticatedSessionController::class, 'store'])->name('loginadmin');

// Regular user login routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

// About Us page route
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

// Analysis page route
Route::get('/analysis', function () {
    return view('analysis');
})->name('analysis');

// Notifications page route
Route::get('/notifications', function () {
    return view('notifications');
})->name('notifications');

// Add new bin page route
Route::get('/addnewbin', function () {
    return view('addnewbin');
})->name('addnewbin');

Route::post('/bins', [BinController::class, 'store'])->name('bins.store');

Route::get('/dashboardadmin', [BinController::class, 'index'])->middleware(['auth'])->name('dashboardadmin');

require __DIR__.'/auth.php';
