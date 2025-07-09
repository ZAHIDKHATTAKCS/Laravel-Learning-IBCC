<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    // here the HTTP request that is passed as a parameter
    function newOne(Request $req){
        // return 'new one function called';

        // this will return the proper url of the page from where the request is send
        // return $req->url();

        // this will return the proper path from where the request is send 
        // return $req->path();

        // this will provide the input field name value that is entered by the user in the name field
        // return $req->input('name');

        // this will provide the input field password value that is entered by the user in the password field

        // note these are all possible because of http request class Request that we passed as a parameter in the function
        return $req->input('password');
    }
}