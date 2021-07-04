<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
    //
    function signup(Request $req)
    {
        $count = DB::table('users')->where('email', $req->email)->count();
        if ($count > 0) {
            Session::flash('msg', 'This email is alwready used');
            return back();
        } else {
            DB::table('users')->insert(
                [
                    'name' => $req->name,
                    'email' => $req->email,
                    'password' => Hash::make($req->password)
                ]
            );
            return back();
        }
    }
    function login(Request $req)
    {
        $data = DB::table('users')->where('email', $req->email)->first();
        if (!$data || !Hash::check($req->password, $data->password)) {
            Session::flash('msg', 'Email or Password did not matched!');
            return back();
        } else {
            return redirect("home");
        }
    }
}
