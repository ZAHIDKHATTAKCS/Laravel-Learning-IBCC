<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // function for insertion
    function Insertion(Request $req){
        $Employee = new Employee();
        $Employee->name=$req->name;
        $Employee->email=$req->email;
        $Employee->password=$req->password;
        $Employee->phone=$req->phone;
        $Employee->save();
        if($Employee){
            return redirect('getemployees');
        }else{
            return 'data not inserted to the database';
        }
    }

    // function for getting data
    function GetData(){
        $EmployeesData=Employee::paginate(2);
        return view('getemployees',['Data'=>$EmployeesData]);
    }

    // function for editData
    function EditEmployee($id){
        $EditEmployee=Employee::find($id);
        return view('editemployees',['edit'=>$EditEmployee]);
    }

    // function for update data
    function UpdateEmployee(Request $request ,$id){
        $Employee=Employee::find($id);
        $Employee->name=$request->name;
        $Employee->email=$request->email;
        $Employee->password=$request->password;
        $Employee->phone=$request->phone;
        $Employee->save();
        if($Employee){
            return redirect('getemployees');
        }else{
            return 'data not updated error in update code';
        }
    }

    // function for deletion of employees
    function DeleteEmployee($id){
        $EmployeeDelete=Employee::destroy($id);
        if($EmployeeDelete){
            return redirect('getemployees');
        }
    }

    // function for search employees
    function Search(Request $req){
        $result=Employee::where('name','like',"%$req->search%")->get();
        return view('getemployees',['Data'=>$result,'search'=>$req->search]);
    }
}