<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

use App\Services\User\UserAccount;

class UserController extends Controller
{
    public function index(UserAccount $UserAccount)
    {
        if(Auth::check()) {
            // $users = auth()->user();
            $data = $UserAccount->execute();
            return view('pages.userlist', compact('data'));
        }else {
            return redirect()->route('login');
        }
    }

    // public function index1()
    // {
    //     if(Auth::check()) {
    //         $users = auth()->user();
    //         return view('layouts.simple.header', compact('users'));
    //     }else {
    //         return redirect()->route('login');
    //     }
    // }

}
