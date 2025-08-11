<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for About Page
Route::view('/About','about'); // about page 

// Route for Home Page
Route::view('/Home','home'); // home page 