<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::prefix('vendor')->group(function () {
        Route::name('vendor.')->group(function () {
            Route::middleware('guest:web')->group(function () {
                Route::view('login', 'vendor.auth.login')->name('login');
                Route::view('register', 'vendor.auth.register')->name('register');
            });
        });
    });
});