<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formTwo extends Controller
{
    //
    function form2(Request $result){
        // return $result;

        echo $result->city;
        echo '<br/>';
        print_r($result->Skill);
        echo '<br/>';
        echo $result->Gender;
        echo '<br/>';
        echo $result->age;

        
    }
}
