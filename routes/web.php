<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
use App\Http\Controllers\User;
use App\Http\Controllers\AdminCon;
use App\Http\Controllers\ProductCon;
use App\Http\Controllers\UserCon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});
Route::get("logout", function () {
    session()->forget('user');
    return view("login");
});
Route::post("signup", [UserCon::class, "signup"]);
Route::view("signup", "signup");
Route::view("login", "login"); // for calling view in link
Route::post("login", [UserCon::class, "login"]); // for go to funtion in class

//  detail collection 
Route::get("detail/{id}", [ProductCon::class, "detail"]); // for go to funtion in class

// product controller 
Route::get("home", [ProductCon::class, "product"]);

// admin 
Route::get("admin", [AdminCon::class, "admin"]);
// admin add produdct 
Route::post("addproduct ", [AdminCon::class, "addproduct"]);
Route::post("adminShowProduct ", [AdminCon::class, "adminShowProduct"]);
Route::post("adminProductDelete", [AdminCon::class, "adminProductDelete"]);
Route::post("editdata", [AdminCon::class, "editdata"]);
Route::get("update", [AdminCon::class, "update"]);

// add to cart 
Route::get("addtocart/{id}", [ProductCon::class, "addtocart"]); // for go to funtion in class      
Route::get("cart", [ProductCon::class, "cart"]); // for go to funtion in class      
Route::get("cart", [ProductCon::class, "cart"]); // for go to funtion in class      
Route::get("cart_item_remove/{id}", [ProductCon::class, "cart_item_remove"]); // cart item remove      
Route::get("orderpage", [ProductCon::class, "orderpage"]); // cart item remove      
Route::post("orderNow", [ProductCon::class, "orderNow"]); // cart item remove      
Route::get("myOrderList", [ProductCon::class, "myOrderList"]); // cart item remove      
