<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            return view('dashboard.dashboard-02');
        }else {
            return redirect()->route('login');
        }
    }    

    public function useraccount()
    {
        if(Auth::check()) {
            $users = Users::all();
            // $data = $showPerformanceContract->execute();
            // $indicator = Indicator::select('sort')->groupBy('sort')->get();
            return view('dashboard.dashboard-02', compact( 'users'));
        }else {
            return redirect()->route('login');
        }
    }    
}
