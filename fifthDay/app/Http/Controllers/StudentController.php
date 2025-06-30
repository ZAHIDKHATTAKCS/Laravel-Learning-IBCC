<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show()
    {
        return '<h1>show all the students</h1>';
    }
    function add()
    {
        return '<h1>add a new student</h1>';
    }
    function delete()
    {
        return '<h1>delete a student</h1>';
    }
}
