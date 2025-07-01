<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function getUsers(){
        // return "users get function";
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response= $response->body();
        return view('UserView',['data'=>json_decode($response)]);
    }
}
