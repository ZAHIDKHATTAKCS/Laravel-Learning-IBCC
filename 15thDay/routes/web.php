<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddStudent;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/addstdform','addstudents');

Route::post('/addstdform',[AddStudent::class,'AddStudent']);

Route::view('/getstudents','list-student');

Route::get('/getdata',[AddStudent::class,'GetList']);