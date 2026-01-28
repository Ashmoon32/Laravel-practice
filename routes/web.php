<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/app');
});

Route::get('/home', function () {
    return view('/layouts/home');
});

Route::get('/about', function () {
    return view('/layouts/about');
});

Route::get('/contact', function () {
    return view('/layouts/contact');
});

Route::post('/contact/submit', function () {
    return view('/layouts/contact');
});