<?php

use Illuminate\Support\Facades\Route;

// here we call controller like 
use App\Http\Controllers\UserController;

// now route for controller 
Route::get('user',[UserController::class,'getUser']);

// now route for the 2nd function
Route::get('userTwo',[UserController::class,'UserTwo']);

// now route for the 3rd function with parameter passed
Route::get('Username/{name}',[UserController::class,'getUserName']);

// now route for call view from the controller

Route::get('view',[UserController::class,'getView']);





Route::get('/', function () {
    return view('home');
});


Route::get('/aboutUs', function () {
    return view('about');
});


Route::view('/welcome','welcome');
Route::view('/inner','common.inner');
Route::view('/abc','abc');


// Route for the Zahid khattak that is created by the using command

Route::view('/zahid','Zahid');


// nested view created by using command and now call in controller 
Route::get('login/{name}',[UserController::class,'loginView']);