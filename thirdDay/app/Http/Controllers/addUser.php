<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addUser extends Controller
{
    //
    function addUser(Request $req){

        $req->validate([
            'userName'=>'required |min:5|max:20',
            'userEmail'=>'required',
            'userCity'=>'required',

        ],[
            'userName.required'=>"user name shouldn't be empty",
            'userName.min'=>"user name shouldn't be minimum than 5 characters",
            'userEmail.required'=>"you must have enter the email ",
        ]);

        return $req;
        // echo "User Name is " , $req->userName;
        // echo '<br>';
        // echo "User Email is " , $req->userEmail;
        // echo '<br>';
        // echo "User City is " , $req->userCity;
    }
}
