<?php

use App\Http\Controllers\Employees;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/students',[StudentController::class,'getStudents']);

Route::get('UserView',action: [UserController::class,'getUsers']);

// get employees route
Route::get('employees',[Employees::class,'getEmployees']);