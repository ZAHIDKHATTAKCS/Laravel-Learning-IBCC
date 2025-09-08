<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Seller extends Model
{
    //
    function ProductManyData(){
        return $this->hasMany('App\Models\Product');
    }
}