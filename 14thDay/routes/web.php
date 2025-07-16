<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('addstudent','addstudent');

Route::post('addstudent',[StudentController::class,'addStudent']);


Route::get('liststudent',[StudentController::class,'list']);