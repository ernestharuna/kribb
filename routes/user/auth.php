<?php

use App\Http\Controllers\User\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {
    Route::name('user.')->group(function () {
        Route::middleware('guest:web')->group(function () {
            Route::view('login', 'user.auth.login')->name('login');
            Route::view('register', 'user.auth.register')->name('register');

            Route::post('login', [AuthenticationController::class, 'login'])->name('login.request');
            Route::post('register', [AuthenticationController::class, 'register'])->name('register.request');
        });
        
        Route::get('logout', [AuthenticationController::class, 'logout'])
            ->name('logout')->middleware('auth');
    });
});
