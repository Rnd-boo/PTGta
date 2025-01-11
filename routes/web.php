<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/conveying-system', function () {
    return view('convey');
});

Route::get('/expertise', function () {
    return view('expertise');
});

Route::get('/case-packer', function () {
    return view('case');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});