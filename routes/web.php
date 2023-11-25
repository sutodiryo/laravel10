<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Dashboard as dashboards;


Route::middleware('guest')->group(function () {
    Volt::route('/', 'pages.auth.login')
        ->name('login');
});
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', dashboards::class)->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
});

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

require __DIR__ . '/auth.php';
