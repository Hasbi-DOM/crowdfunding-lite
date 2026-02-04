<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/donations', function () {
    return view('donation');
});

Route::get('/campaign', function () {
    return view('campaign');
});
