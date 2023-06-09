<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Indicator;
use App\Models\Category;

use App\Models\Users;


use App\Services\OfficePerformanceContract\CreatePerformanceContract;
use App\Services\OfficePerformanceContract\ShowPerformanceContract;
use App\Services\OfficePerformanceContract\UpdatePerformanceContract;

class ShowopcController extends Controller
{
    // public function index(Request $request)
    // {

    //     if(Auth::check()) {
    //         $category = Category::all();
    //         $data = $showPerformanceContract->execute();
    //         $indicator = Indicator::select('sort')->groupBy('sort')->get();
    //         return view('pages.opcpage.showopc', compact('category', 'indicator', 'data'));
    //     }else {
    //         return redirect()->route('login');
    //     }
    // }
    public function index(ShowPerformanceContract $showPerformanceContract)
    {
        if(Auth::check()) {
            $user = Users::findOrFail(auth()->id());
            $category = Category::all();
            $data = $showPerformanceContract->execute();
            $indicator = Indicator::select('sort')->groupBy('sort')->get();
            // return dd($category);
            return view('pages.opcpage.showopc', compact('category', 'indicator', 'data', 'user'));
        }else {
            return redirect()->route('login');
        }
    }

    public function save_indicator(Request $request, CreatePerformanceContract $createPerformanceContract)
    {
        $response = $createPerformanceContract->execute($request);

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

        // $Performancecontract = PerformanceContract::make($request->all(),[
        //     'activity_id' => 'required',
        //     'code' => 'required'

        // ]);

        // if ($Performancecontract->passes()){
        //     // save values in DB
        // }else{
        //     // return error

        //     return response()->json([
        //         'status' => 0,
        //         'errors' => $Performancecontract->errors()
        //     ]);
        // }
    }

    public function update_indicator(Request $request, UpdatePerformanceContract $updatePerformanceContract)
    {
        $response = $updatePerformanceContract->execute($request);

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

        // $Performancecontract = PerformanceContract::make($request->all(),[
        //     'activity_id' => 'required',
        //     'code' => 'required'

        // ]);

        // if ($Performancecontract->passes()){
        //     // save values in DB
        // }else{
        //     // return error

        //     return response()->json([
        //         'status' => 0,
        //         'errors' => $Performancecontract->errors()
        //     ]);
        // }
    }
    
}
