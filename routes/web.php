<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts/app');
// });

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

// for test

Route::get('/', function () {
    return view('test/home');
});

Route::get('/about', function () {
    return view('/test/about');
});

Route::view('/contact', 'test/contact');

Route::view('/', 'home');

Route::view('/about', 'about');

Route::view('/contact', 'contact');

Route::view('/welcome', 'welcome', [
    "name" => request("person"),
    "greeting" => "Welcome, ",
]);

Route::get('/welcome', function () {
    return view('welcome', [
        "name" => request('person', 'Guest'),
        "greeting" => 'Welcome, '
    ]);
});