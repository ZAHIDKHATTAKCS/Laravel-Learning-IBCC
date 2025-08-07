<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

// Route for add Employees view
Route::view('/addemployees','addemployees');

// Route for post data to database
Route::post('/addemployees',[EmployeeController::class,'Insertion']);

// Route for get employees
Route::get('/getemployees',[EmployeeController::class,'GetData']);

// Route for EditEmployees
Route::get('/editemployees/{id}',[EmployeeController::class,'EditEmployee']);

// Route for update data
Route::put('/editemployees/{id}',[EmployeeController::class,'UpdateEmployee']);

// Route for deletion of Employees
Route::get('/delete/{id}',[EmployeeController::class,'DeleteEmployee']);

// Route for search data in table
Route::get('/search',[EmployeeController::class,'Search']);