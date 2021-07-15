<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Models\Orderlist;

class ProductCon extends Controller
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
    function addtocart($product_id)
    {
        if (session()->has('user')) {
            $cart  = new Cart;
            $user_id = json_decode(json_encode(session()->get('user')), true);

            $cart->person_id = $user_id['id'];
            $cart->product_id = $product_id;

            $cart->save();
            return redirect('home');
        } else {
            return view('login');
        }
    }

    function cart()
    {
        $user_data = json_decode(json_encode(session()->get('user')), true);
        $user_id = $user_data['id'];
        $product = DB::table('cart')
            ->join('product', 'cart.product_id', '=', 'product.id')
            ->where('cart.person_id', $user_id)
            ->select('product.*', 'cart.id as idFormCart')->get();
        return view("cart", ['products' => $product]);
    }

    function cart_item_remove($id)
    {
        DB::table('cart')->where('id', $id)->delete();
        return redirect("cart");
    }
    function orderpage()
    {

        $user_data = json_decode(json_encode(session()->get('user')), true);
        $user_id = $user_data['id'];
        $sum = DB::table('cart')
            ->join('product', 'cart.product_id', '=', 'product.id')
            ->where('cart.person_id', $user_id)
            ->sum('product.price');
        return view("orderpage", ['cost' => $sum]);
    }
    function orderNow(Request $req)
    {
        $user_data = json_decode(json_encode(session()->get('user')), true);
        $userid = $user_data['id'];
        $cartTable = DB::table('cart')->where('person_id', $userid)->get();
        $address = $req->address;
        $payment = $req->payment;
        foreach ($cartTable as $item) {
            $product_id = $item->product_id;
            // $product_price = DB::table('products')->where('id', $product_id)->get('price');

            DB::table('orderlist')->insert(
                [
                    'product_id' => $product_id,
                    'user_id' => $userid,
                    'user_address' => $address,
                    'payment_method' => $payment,

                ]
            );
            Cart::where('person_id', $userid)->delete();
        }
        return redirect('/');
    }

    function myOrderList()
    {
        $user_data = json_decode(json_encode(session()->get('user')), true);
        $userid = $user_data['id'];
        $myorderlist =  DB::table('orderlist')
            ->join('product', 'product.id', '=', 'orderlist.product_id')
            ->where('orderlist.user_id', $userid)
            ->get();
        return view("myorderlist", ['myorderlist' => $myorderlist]);
    }
    static function cartCount()
    {
        $user_data = json_decode(json_encode(session()->get('user')), true);
        $user_id = $user_data['id'];
        return Cart::where('person_id', $user_id)->count();
    }
    static function orderlistcount()
    {
        $user_data = json_decode(json_encode(session()->get('user')), true);
        $user_id = $user_data['id'];
        return Orderlist::where('user_id', $user_id)->count();
    }
}
