<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobNameCreateRequest;
use App\Http\Requests\JobNameEditRequest;
use App\Job;
use Illuminate\Support\Facades\Session;

class AdminJobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();

        return view('admin.jobNames.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobNameCreateRequest $request)
    {
        $input = $request->all();

        Job::create($input);

        Session::flash('flash_message', 'Job Name created successfully!');
	    Session::flash('flash_type', 'alert-success');

        return redirect('/admin/jobs');
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
        $job = Job::findOrFail($id);

        return view('admin.jobNames.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobNameEditRequest $request, $id)
    {
        $job = Job::findOrFail($id);

        $input = $request->all();

        $job->update($input);

        Session::flash('flash_message', 'Job Name Edited successfully!');
        Session::flash('flash_type', 'alert-info');

        return redirect('/admin/jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);

        $job->delete();

        Session::flash('flash_message', 'Job deleted successfully!');
	    Session::flash('flash_type', 'alert-warning');

        return redirect('/admin/jobs');
    }
}
