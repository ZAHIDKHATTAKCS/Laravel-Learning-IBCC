<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    function setNameAttribute($val){
        $this->attributes['name']=ucfirst($val);
    }

    function setEmailAttribute($val){
        $this->attributes['email']=ucfirst($val);
    }
    
    function setPhoneAttribute($val){
        $this->attributes['phone']='+92-'.$val;
    }
}