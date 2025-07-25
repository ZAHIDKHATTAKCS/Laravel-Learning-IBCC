<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddStudents;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/addstudent','addstudents');

Route::post('/addstudent',[AddStudents::class,'AddStudent']);

Route::get('delete/{id}',[AddStudents::class,'Delete']);

// get students data
Route::get('/getdata',[AddStudents::class,'getList']);

Route::view('/Studentslist' , 'studentslist');