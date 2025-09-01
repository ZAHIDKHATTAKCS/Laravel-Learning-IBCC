<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function save(){
        $student= new Student();
        $student->name='Zahid khattak';
        $student->email='zahidkhattak@gmail.com';
        $student->phone='3348854074';
        $student->save();
        if($student){
            echo 'a new student added';
        }
    }
}