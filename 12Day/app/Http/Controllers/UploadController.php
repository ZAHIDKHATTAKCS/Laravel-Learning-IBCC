<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    // function to run in controller
    function UploadFile(Request $request){
        $path = $request->file('file')->store('public');
        $FileNameArray = explode('/',$path);

        $FileName = $FileNameArray[1];

        return view('display',['Path'=>$FileName]);
        // return 'file uploaded successfully';
    }
}