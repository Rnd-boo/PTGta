<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/conveying-system', function () {
    return view('convey');
});

Route::get('/services', function () {
    return view('services');
});