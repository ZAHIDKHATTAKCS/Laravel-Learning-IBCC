<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class AddStudent extends Controller
{
    function AddStudent(Request $req){
        // return $req;
        $Student = new Student();
        $Student->name=$req->username;
        $Student->email=$req->email;
        $Student->address=$req->address;
        $Student->save();
        if($Student){
            echo "New Student Added";
        }else{
            echo "Student insertion error";
        }
    }

    // function for getting the data from the database
    function GetList(){
        $StudentData=Student::all(); // all the data that is store in the Student modal so it will be store in variable
        return view('list-student' ,['students'=>$StudentData]);
    }
}