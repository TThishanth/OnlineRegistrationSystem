<?php

namespace App\Http\Controllers;

use App\User;

class AdminYearsController extends Controller
{
    public function firstYear()
    {
        $users = User::all();

        return view('admin.users.firstYear',compact('users'));
    }

    public function secondYear()
    {
        $users = User::all();

        return view('admin.users.secondYear',compact('users'));
    }

    public function thirdYear()
    {
        $users = User::all();

        return view('admin.users.thirdYear',compact('users'));
    }

    public function fourthYear()
    {
        $users = User::all();

        return view('admin.users.fourthYear',compact('users'));
    }
}
