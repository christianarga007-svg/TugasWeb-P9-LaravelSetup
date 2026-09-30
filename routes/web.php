<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman utama (Home) yang mengirimkan data dinamis
Route::get('/', function () {
    return view('welcome', [
        'nama' => 'Christian Arga Capah', // Data string
        'courses' => ['HTML', 'CSS', 'PHP Native', 'Laravel 12'] // Data array
    ]);
});

// Route untuk halaman About
Route::get('/about', function () {
    return view('about');
});

// Route untuk halaman Contact
Route::get('/contact', function () {
    return view('contact');
});