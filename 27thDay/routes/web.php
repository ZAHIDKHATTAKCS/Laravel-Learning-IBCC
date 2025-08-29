<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/addstudent','addstudent');

Route::post('/addstudent',[StudentController::class,'Insertion']);

Route::get('/StudentsList',[StudentController::class,'List']);

Route::view('/getstudent','getstudents');

Route::get('/getstudent',[StudentController::class,'GetData']);