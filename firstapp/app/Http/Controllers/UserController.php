<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "zahid khattak";
    }

    function UserTwo(){
        return "Ahmad Zahid";
    }

    function getUserName($name){
        return "My name is ".$name;
    }

    function getview(){
        return view('about');
    }

    function loginView($name){

        $userSecond = "Zahid Khattak"; 
        $users  = ['hello','ahmad','ali','sami'];
        return view('admin.login',['users' => $users]);
    }
}
