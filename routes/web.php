<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
use App\Http\Controllers\User;

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
    return view('welcome');
});
Route::get("home", [Product::class, "product"]);
Route::post("signup", [User::class, "signup"]);
Route::view("signup", "signup");
Route::view("login", "login"); // for calling view in link
Route::post("login", [User::class, "login"]); // for go to funtion in class
