<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\newController;

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
    return view('welcome');
});

// get method to send data
// Route::get('/user',[UserController::class,'getRoute']);

// post method 
// Route::post('/user',[UserController::class,'postRoute']);

// put method 
// Route::put('/user',[UserController::class,'putRoute']);

// delete method
// Route::delete('/user',[UserController::class,'deleteRoute']);

// calling any function
// Route::Any('/user',[UserController::class,'Any']);

// match method is used here
Route::match(['post','get'],'/user', [UserController::class, 'Group1']);

// match method is used here for calling Group2 when put and delete method is used
Route::match(['put','delete'],'/user', [UserController::class, 'Group2']);


// view called here
Route::view('/userForm','user');


// new view Route
Route::post('/newView',[newController::class,'newOne']);
Route::view('/newView',[newController::class,'newview']);