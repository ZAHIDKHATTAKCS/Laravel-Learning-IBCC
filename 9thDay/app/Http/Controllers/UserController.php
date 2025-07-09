<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getRoute(Request $req){
        return $req;
    }

    // post method function
    function postRoute(){
        return "post request method";
    }

    // put method function
    function putRoute(){
        return "Put request method";
    }
    
    // put method function
    function deleteRoute(){
        return "delete request method";
    }
    
    // any method function
    function Any(){
        return "Any the method that is run in all the routes ";
    }

    // function group 1 for any function
    function Group1(){
        return 'Group 1 called ';
    }

    // function group 2 for 
    function Group2(){
        return 'Group 2 called from match method in route';
    }
}