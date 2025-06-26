<?php

use Illuminate\Support\Facades\Route;

// Import the addUser controller
use App\Http\Controllers\addUser;

// Import the formPartTwo
use App\Http\Controllers\formTwo;

// now call the addUser function
Route::post('user-form',[addUser::class, 'addUser']);

Route::get('/', function () {
    return view('welcome');
});

// route for add user form
Route::view('/userForm','user-form');


// now route and path for form 2
Route::view('/twoform','formPartTwo');
Route::post('form2',[formTwo::class,'form2']);