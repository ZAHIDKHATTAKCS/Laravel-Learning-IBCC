<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class AddStudents extends Controller
{
    function AddStudent(Request $request){
        $student = new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();

        if($student){
            echo 'a new student added';
            return redirect ('/addstudent');
        }else{
            return "there is an error in insertion";
        }
    }

    function getList(){
        $data = Student::all(); // this will get all the data from the database and store it in the student variable
        return view('studentslist',['data'=>$data]);
    }

    function Delete($id){
        $isDeleted = Student::destroy($id);
        if($isDeleted){
            return redirect('/getdata');
        }
    }

}