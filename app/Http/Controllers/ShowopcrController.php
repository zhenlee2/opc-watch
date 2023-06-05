<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Indicator;
use App\Models\Category;
use App\Models\Users;

class ShowopcrController extends Controller
{
    public function index(Request $request)
    {

        if(Auth::check()) {
            $category = Category::all();
            // $data = $showPerformanceContract->execute();
            $indicator = Indicator::select('sort')->groupBy('sort')->get();
            $user = Users::findOrFail(auth()->id());
            return view('pages.opcrpage.showopcr', compact('category', 'indicator', 'user'));
        }else {
            return redirect()->route('login');
        }
    }
}
