<?php

namespace App\Http\Controllers;

use App\Hostel;
use Illuminate\Http\Request;

class AdminHostelGendersController extends Controller
{
    public function boysHostel()
    {
        $hostels = Hostel::all();

        return view('admin.hostelForm.male',compact('hostels'));
    }

    public function girlsHostel()
    {
        $hostels = Hostel::all();

        return view('admin.hostelForm.female',compact('hostels'));
    }
}
