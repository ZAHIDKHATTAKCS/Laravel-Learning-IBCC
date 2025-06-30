<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AgeChecker;

Route::get('/', function () {
    return view('welcome');
});

// for Example if we are going to create a collage app so the view should be sperate for the student and sperate for the teachers etc
Route::view('student/home', 'home');


// now path for the route
// route::get('student/show', [HomeController::class, 'show']);
// route::get('student/add', [HomeController::class, 'add']);


// now path for the route with applying student prefix in a prefix function
Route::prefix('student')->group(function () {
    route::get('/show', [HomeController::class, 'show']);
    route::get('/add', [HomeController::class, 'add']);
});



// now route for StudentController
// Route::get('/StudentController',[StudentController::class,'show']);
// Route::get('/StudentController/add',[StudentController::class,'add']);
// Route::get('/StudentController/delete',[StudentController::class,'delete']);


Route::controller(StudentController::class)->group(function(){
    Route::get('/StudentController','show');
Route::get('/StudentController/add','add');
Route::get('/StudentController/delete','delete');
});


Route::view('/newone','newone')->middleware('check');
Route::view('/newtwo','newtwo')->middleware('check');



// Routes for last topic fo middleware
Route::view('lastmiddleware','last')->middleware(AgeChecker::class);
Route::view('finallast','finallast');