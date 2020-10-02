<?php

namespace App\Http\Controllers;

use App\Academic;
use App\Hostel;
use App\Repeat;
use Illuminate\Http\Request;

class AdminUnApprovedController extends Controller
{
    public function repeat()
    {
        $repeats = Repeat::all();

        return view('admin.unApprovedSubs.repeatExam.index',compact('repeats'));
    }

    public function academic()
    {
        $academics = Academic::all();

        return view('admin.unApprovedSubs.academicForm.index',compact('academics'));
    }

    public function boysHostel()
    {
        $hostels = Hostel::all();

        return view('admin.unApprovedSubs.hostelForm.male',compact('hostels'));
    }

    public function girlsHostel()
    {
        $hostels = Hostel::all();

        return view('admin.unApprovedSubs.hostelForm.female',compact('hostels'));
    }
}
