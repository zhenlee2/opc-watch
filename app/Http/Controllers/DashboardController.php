<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PCIndicator;
use App\Models\Users;

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
            $user = Users::findOrFail(auth()->id());

            return view('dashboard.dashboard-02', compact('results', 'results2', 'user'));
        }else {
            return redirect()->route('login');
        }
    } 

}
