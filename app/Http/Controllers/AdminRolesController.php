<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolesCreateRequest;
use App\Http\Requests\RolesEditRequest;
use App\Role;
use Illuminate\Support\Facades\Session;

class AdminRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('admin.roles.index', compact('roles'));
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
    public function store(RolesCreateRequest $request)
    {
        
        $input = $request->all();

        Role::create($input);

        Session::flash('flash_message', 'Role created successfully!');
	    Session::flash('flash_type', 'alert-success');

        return redirect('/admin/roles');

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
        $role = Role::findOrFail($id);

        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RolesEditRequest $request, $id)
    {
        $role = Role::findOrFail($id);

        $input = $request->all();

        $role->update($input);

        Session::flash('flash_message', 'Role Edited successfully!');
        Session::flash('flash_type', 'alert-info');

        return redirect('/admin/roles');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        Session::flash('flash_message', 'Role deleted successfully!');
	    Session::flash('flash_type', 'alert-warning');

        return redirect('/admin/roles');
    }
}
