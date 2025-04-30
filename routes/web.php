<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index')->with("title", "Home");
});

Route::get('/about', function () {
    return view('about_us')->with("title", "About Us");
});

Route::get('/contact', function () {
    return view('contact')->with("title", "Contact");
});

Route::get('/partners', function () {
    return view('partners')->with("title", "Partners");
});

Route::redirect('/terms_of_use', '/terms-of-use', 301);

Route::get('/terms-of-use', function () {
    return view('terms_of_use')->with("title", "Terms of Use");
});

Route::get('/privacy', function () {
    return view('privacy')->with("title", "Privacy");
});
