<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('show',[HomeController::class,'show']);

Route::get('/', function () {
    return view('welcome');
});



// Route for about view
Route::view('/about','about');


// Route for home view
Route::view('/home','home');

// Route for NamedRouting home view
Route::view('/NamedRouting/homePage','NamedRouting.home')->name('hm');