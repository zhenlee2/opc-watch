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
            $data = $UserAccount->execute();
            return view('pages.userlist', compact('data'));
        }else {
            return redirect()->route('login');
        }
    }
}
