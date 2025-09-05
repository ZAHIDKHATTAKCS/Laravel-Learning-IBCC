<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Model
{
    //
    use HasFactory;
    function product(){
        return $this->hasOne('App\Models\Product');
    }
}