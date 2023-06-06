<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PerformanceContract;
use App\Models\Offices;
use App\Models\Indicator;
use App\Models\Category;
use App\Models\Users;
use App\Models\PCIndicator;
use DB;

use App\Services\OfficePerformanceContract\CreatePerformanceContract;
use App\Services\OfficePerformanceContract\ShowPerformanceContract;


class CreateofficeController extends Controller
{

    public function createpc(ShowPerformanceContract $showPerformanceContract)
    {

        if(Auth::check()) {
            $user = Users::findOrFail(auth()->id());
            $category = Category::all();
            $data = $showPerformanceContract->execute();
            $indicator = Indicator::select('sort')->groupBy('sort')->get();
            return view('pages.opcpage.officepc', compact('category', 'indicator', 'data', 'user'));
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

    
    public function showpc($year, $semester, ShowPerformanceContract $showPerformanceContract)
    {
        $data = $showPerformanceContract->execute();
        $user = Users::findOrFail(auth()->id());
        return view('pages.opcpage.showopc', compact('data', 'user'));
    }

    public function showpcr($year, $semester, ShowPerformanceContract $showPerformanceContract)
    {
        $data = $showPerformanceContract->execute();
        $user = Users::findOrFail(auth()->id());
        return view('pages.opcrpage.showopcr', compact('data', 'user'));
    }


}
