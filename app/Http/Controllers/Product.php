<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product extends Controller
{
    //
    function product()
    {
        $products = DB::table('product')->get();
        return view("product", compact("products"));
    }
    function detail($id)
    {
        $product = DB::table('product')->where('id', $id)->first();
        return view("detail", compact("product"));
    }
}
