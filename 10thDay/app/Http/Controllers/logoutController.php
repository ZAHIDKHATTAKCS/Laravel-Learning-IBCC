<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    // 
    function Logoutfnct(){
        session()->pull('user');
        return redirect('profile');
    }
}