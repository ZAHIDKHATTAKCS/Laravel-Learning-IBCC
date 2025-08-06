<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// add students view
Route::view('/addstudent','addstudents');

// insert student get method controller
Route::post('/addstudent',[StudentController::class,'InsertStudent']);

// get student get method controller
Route::get('/getstudents',[StudentController::class,'GetData']);

// Route For edit data
Route::get('edit/{id}',[StudentController::class,'EditData']);

// Route For update data
Route::put('update/{id}',[StudentController::class,'UpdateData']);

// Route for deletion of data
Route::get('delete/{id}',[StudentController::class,'DeleteData']);