<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/aboutUs', function () {
    return view('about');
});


Route::view('/welcome','welcome');
Route::view('/abc','abc');