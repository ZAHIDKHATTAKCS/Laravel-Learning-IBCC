<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for home page 
Route::view('/Home','home');

// Route for About Page
Route::view('/About','about');

// Route for Login page
Route::view('/Login','login');