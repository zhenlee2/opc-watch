<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PCIndicator;

use DB;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $result = DB::table('pc_indicator')
            ->whereBetween(DB::raw('MONTH(created_at)'), [1, 6])
            ->get();

            $result1 = DB::table('pc_indicator')
            ->whereBetween(DB::raw('MONTH(created_at)'), [7, 12])
            ->get();

            $results = count($result);
            $results2 = count($result1);
            // $data = [
            //     "count" => count($result),
            //     "results" => $result
            // ];
            return view('dashboard.dashboard-02', compact('results', 'results2'));
        }else {
            return redirect()->route('login');
        }
    }    

}
