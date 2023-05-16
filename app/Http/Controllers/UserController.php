<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()) {
            // $user = User::findOrFail($id);
            return view('pages.userlist');
        }else {
            return redirect()->route('login');
        }
    }
}
