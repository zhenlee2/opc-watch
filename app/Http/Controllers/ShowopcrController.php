<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Indicator;
use App\Models\Category;
use App\Models\Users;

use App\Services\OfficePerformanceContractReview\ShowPerformanceContractRating;
use App\Services\OfficePerformanceContractReview\PerformanceContractRating;

class ShowopcrController extends Controller
{
    public function index(Request $request, ShowPerformanceContractRating $showPerformanceContractRating)
    {
       
        if(Auth::check()) {
            $user = Users::findOrFail(auth()->id());
            $category = Category::all();
            $data = $showPerformanceContractRating->execute($request->input('pcindicator_id'));

            $indicator = Indicator::select('sort')->groupBy('sort')->get();
            return view('pages.opcrpage.showopcr', compact('category', 'indicator', 'data', 'user', 'year', 'semester'));
        }else {
            return redirect()->route('login');
        }
    }

    public function save_rating(Request $request, PerformanceContractRating $PerformanceContractRating)
    {
        // dd($request);

        $response = $PerformanceContractRating->execute($request);

        if(!$response){
            return response()->json([                
                'status' => "error",
                'description' => "Error encountered: failed to save",
            ],404);
        }
        
        return response()->json([                
            'status' => "success",
            'description' => "Successfully save indicator",
            'data' => $response
        ],200);


    }

    public function update_rating()
    {

        // if(Auth::check()) {
        //     $year = $request->year;
        //     $semester = $request->semester;
        //     $category = Category::all();
        //     $data = $showPerformanceContract->execute($year, $semester);
        //     // $data = $showPerformanceContract->execute();
        //     $indicator = Indicator::select('sort')->groupBy('sort')->get();
        //     $user = Users::findOrFail(auth()->id());
        //     return view('pages.opcrpage.showopcr', compact('category', 'indicator', 'data', 'user', 'year', 'semester'));
        // }else {
        //     return redirect()->route('login');
        // }
    }
}
