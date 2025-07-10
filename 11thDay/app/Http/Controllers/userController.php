<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    // function 
    function AddUser(Request $request){
        // your db code 

        $request->session()->flash('message','user has been added successfully');
        $request->session()->flash('name','zahid');
        return redirect('/userView');
    }
}