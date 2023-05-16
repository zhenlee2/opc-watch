<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrintController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()) {
            return view('pages.opcpage.officepcPrint');
        }else {
            return redirect()->route('login');
        }
    }    
}
