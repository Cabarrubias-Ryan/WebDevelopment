<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contents.welcome');
});

Route::get('/services', function () {
    return view('contents.services');
});

