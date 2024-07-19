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
    return view('home');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/ongoing', function () {
    return view('ongoing');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/maps', function () {
    return view('maps');
});
