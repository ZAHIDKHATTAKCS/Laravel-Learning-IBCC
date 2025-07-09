<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //
    function queries(){


        // $response=User::get(); // this will fetch all the data from the user table in the database and you can see it on UI
        // return view('user',['users'=>$response]);


        // filter out data using where clause
        // $response=User::where('name','user 2')->get();


        // insert data
        // $response = User::insert([
        //     'name'=>'user 4',
        //     'email'=>'user4@gmail.com',
        //     'password'=>'user 4 password'
        // ]);


        // now update data
        // $response = User::where('id','1')->update([
        //     'password'=>'khattak sahab',
        // ]);


        // delete a record now 
        // $response = User::where('id','3')->delete();
        // return $response;
    }
}
