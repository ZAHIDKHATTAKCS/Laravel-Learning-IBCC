<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

use App\Http\Controllers\FileUplaodController;

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

// Route::post('/user',[userController::class, 'AddUser']);

// Route::view('/userView','user');

// File upload controller Route
Route::post('FileUpload',[FileUplaodController::class,'FileUpload']);

// File upload view route
Route::view('/FileUploadC','fileUpload');