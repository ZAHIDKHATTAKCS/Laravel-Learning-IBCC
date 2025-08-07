<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Function for adding data into the database
    function InsertStudent(Request $request){
        $Student= new Student;
        $Student->name=$request->name;
        $Student->phone=$request->phone;
        $Student->email=$request->email;
        $Student->save();
        if($Student){
            return redirect('/getstudents');
        }else{
            return 'student not added';
        }
    }

    // Get all the data from database
    function GetData(){
        $StudentData = Student::all();
        return view('/getstudents',['Data'=>$StudentData]);
    }

    // Function for edit data
    function EditData($id){
        $Student=Student::find($id);
        return view('editstudents',['data'=>$Student]);
    }

    // function for update data
    function UpdateData(Request $req, $id){
        $Student = Student::find($id);
        $Student->name=$req->name;
        $Student->phone=$req->phone;
        $Student->email=$req->email;
        $Student->save();
        if($Student){
            return 'student data updated';
        }
    }

    // function for deletion of data
    function DeleteData($id){
        $Student = Student::destroy($id);
        return redirect('/getstudents');
    }
    

    // function for search 
    function search(Request $request){
        $StudentData = Student::where('name','like',"%$request->search%")->get();
        return view('/getstudents',['Data'=>$StudentData,'search'=>$request->search]);
    }
}