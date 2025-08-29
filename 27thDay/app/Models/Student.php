<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // function for make the first letter capital of each Name
    function getNameAttribute($val){
        return ucfirst($val);
    }

    // function for make the first letter capital of each Email
    function getEmailAttribute($val){
        return ucfirst($val);
    }

    // function for adding the country code at the start of each phone number
    function getPhoneAttribute($val){
        return '+92-'.$val;
    }
}