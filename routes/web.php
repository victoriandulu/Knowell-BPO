<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Use your custom view here
});

// You can still define the /consultation route if needed
Route::get('/consultation', function () {
    return view('consultation');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/services', function () {
    return view('services'); // This should match your blade file name
});
