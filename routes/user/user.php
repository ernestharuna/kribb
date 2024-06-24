<?php

use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;

Route::name('user.')->group(function () {
    Route::prefix('user')->group(function () {
        Route::middleware('auth')->group(function () {
            Route::prefix('dashboard')->group(function () {
                Route::get('/', DashboardController::class)->name('dashboard');
            });

            Route::view('favourites', 'user.favourites')->name('favourites');
            Route::view('profile', 'user.profile')->name('profile');
            Route::view('latest', 'user.latest')->name('latest');
            Route::view('search', 'user.search')->name('search');
        });
    });
});
