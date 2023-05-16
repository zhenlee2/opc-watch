<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Indicator;
use App\Models\Category;

class ShowopcrController extends Controller
{
    public function index(Request $request)
    {

        if(Auth::check()) {
            $category = Category::all();
            // $data = $showPerformanceContract->execute();
            $indicator = Indicator::select('sort')->groupBy('sort')->get();
            return view('pages.opcrpage.showopcr', compact('category', 'indicator'));
        }else {
            return redirect()->route('login');
        }
    }
}
