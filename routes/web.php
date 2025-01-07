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