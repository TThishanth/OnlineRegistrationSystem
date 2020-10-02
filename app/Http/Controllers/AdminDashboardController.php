<?php

namespace App\Http\Controllers;

use App\Academic;
use App\Hostel;
use App\Repeat;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $academicsCount = Academic::where('is_active',0)->count();

        $boysHostelCount = Hostel::where(['sex'=>'Male','is_active'=> 0])->count();;

        $girlsHostelCount = Hostel::where(['sex'=>'Female','is_active'=> 0])->count();;

        $repeatsCount = Repeat::where('is_active',0)->count();

        return view('admin.index',compact('academicsCount','boysHostelCount','girlsHostelCount','repeatsCount'));
    }
}
