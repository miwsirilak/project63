<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    //
    public function product($productId)
    {
        echo 'Product id is ' . $productId;
    }
}
