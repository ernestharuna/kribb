<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/user/auth.php';
require __DIR__ . '/user/user.php';

require __DIR__ . '/vendor/auth.php';
