<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Employees extends Controller
{
    //
    function getEmployees()
    {

        // here we will create queries 
        $result = DB::table('employees')->get();
        // return $result;

        // now in order to retrieve it on the ui 
        // return view('employees', ['list'=>$result]);


        // data insert into table
        // $result=DB::table('employees')->insert([
        //     'E_Name'=>'zahid khattak',
        //     'E_Email'=>'zahidkhattakcs@gmail.com',
        //     'E_Phone'=>'1111133232323'
        // ]);


        // if($result){
        //     echo 'data inserted';
        // }else{
        //     echo 'data not inserted';
        // }


        // now data updated in table
        // $result=DB::table('employees')->where('E_Name','zahid khattak')->update(['E_Phone'=>'212121']);
        // if($result){
        //     echo 'data updated';
        // }else{
        //     echo 'data not updated';
        // }


        // now delete data using query builder

        $result=DB::table('employees')->where('id','2')->delete();
        if($result){
            echo 'Data deleted!';
        }else{
            echo 'Data not deleted!';
        }
    }
}
