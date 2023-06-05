<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

class PrintController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()) {
            $user = Users::findOrFail(auth()->id());
            return view('pages.opcpage.officepcPrint', compact('user'));
        }else {
            return redirect()->route('login');
        }
    }    
}
