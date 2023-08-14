<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Indicator;
use App\Models\Category;
use App\Models\Users;

use App\Services\OfficePerformanceContract\ShowPerformanceContract;

class ShowopcrController extends Controller
{
    public function index(Request $request, ShowPerformanceContract $showPerformanceContract)
    {

        if(Auth::check()) {
            $year = $request->year;
            $semester = $request->semester;
            $category = Category::all();
            $data = $showPerformanceContract->execute($year, $semester);
            // $data = $showPerformanceContract->execute();
            $indicator = Indicator::select('sort')->groupBy('sort')->get();
            $user = Users::findOrFail(auth()->id());
            return view('pages.opcrpage.showopcr', compact('category', 'indicator', 'data', 'user', 'year', 'semester'));
        }else {
            return redirect()->route('login');
        }
    }
}
