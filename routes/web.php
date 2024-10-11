<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Use your custom view here
});

// Route for consultation page
Route::get('/consultation', function () {
    return view('consultation');
});

// Route for home page
Route::get('/home', function () {
    return view('home');
});

// Route for services page
Route::get('/services', function () {
    return view('services'); // This should match your blade file name
});

// Route for industries page
Route::get('/industries', function () {
    return view('industries'); // Matches your industries.blade.php file
});

// Route for case study page
Route::get('/case', function () {
    return view('case'); // Matches your case.blade.php file
});
// Route for About Us page
Route::get('/about', function () {
    return view('about'); // Matches your case.blade.php file
});

// Route for Contact Us page
Route::get('/contact', function () {
    return view('contact'); // Matches your case.blade.php file
});
