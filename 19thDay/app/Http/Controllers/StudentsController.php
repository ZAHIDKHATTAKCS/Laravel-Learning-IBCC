<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentsController extends Controller
{
    // function for insertion of student
    function insertion(Request $request){
        $student= new Student;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password=$request->password;
        $student->save();
        if($student){
            return redirect('/getstudents');
        }
    }
    // function for getting all the data form the database
    function GetData(){
        $StudentData = Student::paginate(3);
        return view('/getstudents',['AllData'=>$StudentData]);
    }

    // function for editing data
    function EditData($id){ 
        $GetStudent = Student::find($id);
        return view('/editdata',['getData'=>$GetStudent]);
    }
    

    // function for updating data
    function UpdateData(Request $request , $id){
        $student = Student::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password=$request->password;
        $student->save();
        if($student){
            return redirect('/getstudents');
        }
    }

    // function for deletion
    function Deletion($id){
        $StudentDelete = Student::destroy($id);
        return redirect('/getstudents');
    }

    // function for searching 
    function Search(Request $request){
        $Search = Student::where('name','like',"%$request->search%")->paginate(3);
        return view('getstudents',['AllData'=>$Search,'Search'=>$request->search]);
    }
}