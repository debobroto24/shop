<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Product;

class AdminCon extends Controller
{
    //
    function admin()
    {
        return view("admin");
    }
    function addproduct(Request $req)
    {
        if ($req->hasFile('img')) {
            $img = $req->file('img');
            $imgEx = $img->getClientOriginalExtension();
            $imgName = time() . "." . $imgEx;
            $img->move(public_path('/img'), $imgName);
        }
        $product = new Product();
        $product->name = $req->name;
        $product->brand = $req->brand;
        $product->price = $req->price;
        $product->catagory = $req->catagory;
        $product->detail = $req->detail;
        $product->img = $imgName;
        $respose = $product->save();
        if ($respose) {
            $data = "product uploaded successfully";
        } else {
            $data = "product upload failed";
        }
        return response()->json($data);
    }
    function adminShowProduct()
    {
        $product = Product::all();
        return response()->json($product);
    }
    function adminProductDelete(Request $req)
    {
        $response =  Product::where('id', $req->id)->delete();
        if ($response) {
            $msg = "delete successfull";
        } else {
            $msg = "Not deleted";
        }
        return response()->json($msg);
    }
    function editdata(Request $req)
    {
        $product = Product::find($req->id);
        return response()->json($product);
    }
    function update(Request $req)
    {
        if ($req->hasFile('img')) {
            $img = $req->file('img');
            $imgEx = $img->getClientOriginalExtension();
            $imgName = time() . "." . $imgEx;
            $img->move(public_path('/img'), $imgName);
        }
        $product = Product::find($req->id);
        $product->name = $req->name;
        $product->brand = $req->brand;
        $product->price = $req->price;
        $product->catagory = $req->catagory;
        $product->detail = $req->detail;
        $product->img = $imgName;
        $response = $product->update();
        // $data = $req->input();
        if ($response) {
            $data = "product update successfully";
        } else {
            $data = "product update failed";
        }
        $product = $req->id;
        return response()->json($product);
    }
}
