<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

class GenderDevelopmentController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()) {
            $user = Users::findOrFail(auth()->id());
            return view('pages.gadpage.gadar',compact('user'));
        }else {
            return redirect()->route('login');
        }
    }    
}
