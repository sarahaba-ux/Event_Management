<?php

// routes/web.php
Route::get('/', function () {
    return view('homepage'); // This serves homepage.blade.php
})->name('homepage');


// Wedding route
Route::get('/form', function () {
    return view('form'); // This should point to wedding.blade.php
})->name('form'); // Naming the route 'wedding'

