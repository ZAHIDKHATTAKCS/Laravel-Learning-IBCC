<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    // 
    function Login(Request $request){
        $request->session()->put('user', $request->input('name'));
        // echo session('user');
        return redirect('profile');
    }
}