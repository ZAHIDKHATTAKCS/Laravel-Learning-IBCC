<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    // function List(){
    //     return 'list is returned';
    // }

    function Insertion(Request $request){
        $student= new Student;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        if($student){
            return 'data inserted';
        }else{
            return 'data not inserted';
        }
    }

    function GetData(){
        $student = Student::all();
        return view('/getstudents',['AllData'=>$student]);
    }
}