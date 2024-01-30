<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing.home');
})->name('home');

Route::get('/contact', function () {
    return view('landing.home');
})->name('contact');

Route::get('/about', function () {
    return view('landing.home');
})->name('about');

Route::get('/products', function () {
    return view('landing.home');
})->name('products');
