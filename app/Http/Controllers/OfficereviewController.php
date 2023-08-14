<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Personnel;
use App\Models\Users;
use App\Models\Indicator;
use App\Models\Category;

use App\Services\OfficePerformanceContract\ShowPerformanceContract;

class OfficereviewController extends Controller
{
    public function index(ShowPerformanceContract $showPerformanceContract)
    {
        if(Auth::check()) {
            $user = Users::findOrFail(auth()->id());
            $category = Category::all();
            $data = $showPerformanceContract->execute();
            $indicator = Indicator::select('sort')->groupBy('sort')->get();
            $list = DB::select('SELECT pc1.*, CONCAT(users.fname, " ", users.lname) AS fullname FROM (SELECT MAX(pc.id) AS true_id, pc.year, pc.semester, COUNT(pci.indicator_id) AS total_indicator, pc.created_at FROM pc LEFT JOIN pc_indicator AS pci ON pci.pc_id = pc.id GROUP BY pc.year, pc.semester) AS pc1 JOIN pc AS pc2 ON pc2.id = pc1.true_id JOIN users ON users.id = pc2.user_id;');
            return view('pages.opcrpage.officepcr', compact('category', 'indicator', 'user', 'list', 'data'));
        }else {
            return redirect()->route('login');
        }
    }   
}
