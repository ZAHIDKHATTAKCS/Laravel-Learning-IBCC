<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function users(){
        $Users=  DB::select('select * from users');
        return view('users',['users'=>$Users]);
    }
}