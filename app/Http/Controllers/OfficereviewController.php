<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Personnel;


class OfficereviewController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()) {
            return view('pages.opcrpage.officepcr');
        }else {
            return redirect()->route('login');
        }
    }   
}
