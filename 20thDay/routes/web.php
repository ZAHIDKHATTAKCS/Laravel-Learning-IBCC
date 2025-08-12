<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route for about page
Route::view('/About','about');

// Route for home page
Route::view('/Home','home');

// Route for home page
Route::view('/Login','login');