<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('welcome');
});

// Route for students add view
Route::view('/addstudents','students');

// Route for insertion of students
Route::post('/addstudents',[StudentsController::class,'insertion']);

// Route for GetStudents
Route::get('/getstudents',[StudentsController::class,'GetData']);

// Route for Editing
Route::get('edit/{id}',[StudentsController::class,'EditData']);

// Route for Updating Data
Route::put('/update/{id}',[StudentsController::class,'UpdateData']);

// Route for Deleting Data
Route::get('/delete/{id}',[StudentsController::class,'Deletion']);

// Route for Searching data
Route::get('search',[StudentsController::class,'Search']);