<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Personnel;
use App\Models\Users;


class OfficereviewController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()) {
            $user = Users::findOrFail(auth()->id());
            return view('pages.opcrpage.officepcr', compact('user'));
        }else {
            return redirect()->route('login');
        }
    }   
}
