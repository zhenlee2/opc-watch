<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()) {
            return view('pages.activity');
        }else {
            return redirect()->route('login');
        }
    }

    public function list(Request $request)
    {
        $filterName = $request->name;
        
        // $filterCountry = $request->country == 0 ? NULL : $request->country;
        $result = Category::where('name', 'like', '%' . $filterName . '%')->get();
        // ->where('code', 'like', '%' . $filterCode . '%')->where('created_at', 'like', '%' . $filtercreated . '%')->where('updated_at', 'like', '%' . $filterupdated . '%')->get();
        //->where('address', 'like', '%' . $filterAddress . '%')->where('country', 'like', '%' . $filterCountry . '%')->get();
        $data = [
            "count" => count($result),
            "results" => $result
        ];
        
        return json_encode($data);
    }
    
}
