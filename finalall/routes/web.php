<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/addworker','addworker');

Route::post('/addworker',[WorkerController::class,'AddWorker']);

Route::view('/getworker','getwroker');

Route::get('/getworker',[WorkerController::class,'GetWorkers']);

// Route for Edit functionality
Route::get('edit/{id}',[WorkerController::class,'EditWorker']);

// Route for update worker
Route::put('update/{id}',[WorkerController::class,'Update']);

// Route for Deleting worker
Route::get('delete/{id}',[WorkerController::class,'DeleteWorker']);