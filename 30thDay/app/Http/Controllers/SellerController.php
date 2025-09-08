<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    function manyRelation(){
        $sellerData=Seller::find(1)->ProductManyData;
        return $sellerData;
    }
}