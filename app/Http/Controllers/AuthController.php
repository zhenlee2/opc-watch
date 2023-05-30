<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login_request(Request $request)
    {
        // $uname=$request->username;
        // $pword=md5($request->password);
        // $pword=$request->password;
        // //dd($pword);
        $credentials = $request->only('username', 'password');
        // dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }else {
            return redirect()->route('login');
        }
    }

    public function logout_request(Request $request)
    {
        Auth::logout();
        //Session::flush();
        return redirect()->route('login');
    }
 
}

