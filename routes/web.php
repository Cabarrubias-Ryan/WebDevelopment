<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contents.welcome');
});


Route::get('/about', function () {
    return view('contents.about');
});


Route::get('/contact', function () {
    return view('contents.contact');
});


Route::get('/services', function () {
    return view('contents.services');
});
