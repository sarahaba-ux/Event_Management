<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;

Route::get('/home', [HomeController::class, 'home'] )->name('homepage');
//calling controller HomeController para ma view yung function na home na maga call sa view na homepage
Route::get('/form', [HomeController::class, 'form'] )->name('form');

Route::get('/', function () {
    return view('user_role');
})->name('role');

Route::post('/user/admin', [RoleController::class, 'adminLogin'])->name('login.admin');
Route::post('/user/organizer', [RoleController::class, 'organizerLogin'])->name('login.organizer');


// Protected routes for Admin (using 'auth.admin' middleware)
Route::middleware(['auth.admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admindashboard');
    });
});

// Protected routes for Organizer (using 'auth.organizer' middleware)
Route::middleware(['auth.organizer'])->group(function () {
    Route::get('/organizer/home', function () {
        return view('homepage');
    });
});
=======
// routes/web.php
Route::get('/', function () {
    return view('homepage'); // This serves homepage.blade.php
})->name('homepage');


// Wedding route
Route::get('/form', function () {
    return view('form'); // This should point to wedding.blade.php
})->name('form'); // Naming the route 'wedding'

>>>>>>> c63adb82e0ab0ecb3d27747508dd28fdfdf81fd7
