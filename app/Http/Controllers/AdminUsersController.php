<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersCreateRequest;
use App\Http\Requests\UsersEditRequest;
use App\Job;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','id')->all();

        $jobs = Job::pluck('name','id')->all();

        return view('admin.users.create',compact('roles','jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersCreateRequest $request)
    {
        if(trim($request->password == '')){

            $input = $request->except('password');

        }
        else{

            $input = $request->all();
            $input['password'] = bcrypt($request->password);

        }

        $user = User::where('email', '=', $request->email)->first();
        
        if ($user === null) {
        // user doesn't exist
            User::create($input);

            Session::flash('flash_message', 'User created successfully!');
            Session::flash('flash_type', 'alert-success');
        }
        else {
            Session::flash('flash_message', 'User already exists!');
            Session::flash('flash_type', 'alert-info');
        }

        
        $job = Job::findOrFail($input['job_id']);

        if($job->name == 'First Year Students'){
            return redirect('/admin/firstYear');
        }
        elseif($job->name == 'Second Year Students'){
            return redirect('/admin/secondYear');
        }
        elseif($job->name == 'Third Year Students'){
            return redirect('/admin/thirdYear');
        }
        elseif($job->name == 'Fourth Year Students'){
            return redirect('/admin/fourthYear');
        }
        else {
            return redirect('/admin/users');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::pluck('name','id')->all();

        $jobs = Job::pluck('name','id')->all();

        return view('admin.users.edit',compact('user','roles','jobs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        $user = User::findOrFail($id);

        if(trim($request->password == '')){

            $input = $request->except('password');

        }
        else{

            $input = $request->all();
            $input['password'] = bcrypt($request->password);

        }
        $user->update($input);

        Session::flash('flash_message', 'User Updated successfully!');
        Session::flash('flash_type', 'alert-info');

        $job = Job::findOrFail($input['job_id']);

        if($job->name == 'First Year Students'){
            return redirect('/admin/firstYear');
        }
        elseif($job->name == 'Second Year Students'){
            return redirect('/admin/secondYear');
        }
        elseif($job->name == 'Third Year Students'){
            return redirect('/admin/thirdYear');
        }
        elseif($job->name == 'Fourth Year Students'){
            return redirect('/admin/fourthYear');
        }
        else {
            return redirect('/admin/users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if (Auth::user()->id == $id) {

            Session::flash('flash_message', 'You can\'t delete your own account!');
	        Session::flash('flash_type', 'alert-info');
            
        } else {
            $user->delete();

            Session::flash('flash_message', 'User deleted successfully!');
            Session::flash('flash_type', 'alert-warning');
        }

        $job = Job::findOrFail($user->job_id);

        if($job->name == 'First Year Students'){
            return redirect('/admin/firstYear');
        }
        elseif($job->name == 'Second Year Students'){
            return redirect('/admin/secondYear');
        }
        elseif($job->name == 'Third Year Students'){
            return redirect('/admin/thirdYear');
        }
        elseif($job->name == 'Fourth Year Students'){
            return redirect('/admin/fourthYear');
        }
        else {
            return redirect('/admin/users');
        }
    }

}
