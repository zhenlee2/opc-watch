<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PerformanceContract;
use App\Models\Offices;
use App\Models\Indicator;
use App\Models\Category;
use App\Models\Activity;
use App\Models\PCIndicator;

class ShowopcController extends Controller
{
    public function index(Request $request)
    {

        if(Auth::check()) {
            $category = Category::all();
            // $data = $showPerformanceContract->execute();
            $indicator = Indicator::select('sort')->groupBy('sort')->get();
            return view('pages.opcpage.showopc', compact('category', 'indicator'));
        }else {
            return redirect()->route('login');
        }
    }
}
