<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Division;

class DivisionController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()) {
            return view('pages.dpcpage.divisionpc');
        }else {
            return redirect()->route('login');
        }
    }
    
}
