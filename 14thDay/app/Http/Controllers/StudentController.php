<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    //
    function addStudent(Request $request){
        $student = new student(); // this is a new object 
        $student->name=$request->name; // this will take value from the $request and store it in the object student
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        if($student){
            return 'new student added';
        }
        
    }

    function list(){
        // return "student list";
        $studentData= Student::all(); 
        return view('liststudent',['data'=>$studentData]);
    }
}