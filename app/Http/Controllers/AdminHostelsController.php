<?php

namespace App\Http\Controllers;

use App\Hostel;
use App\Http\Requests\HostelsCreateRequest;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminHostelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostels = Hostel::all();

        return view('admin.hostelForm.index', compact('hostels'));
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
    public function store(HostelsCreateRequest $request)
    {
        $input = $request->all();

        $user = Auth::user();

        if ($user->role_id == 2) {
            if ($file = $request->file('photo_id')) {

                $name = time() . $file->getClientOriginalName();

                $file->move('images', $name);

                $photo = Photo::create(['file' => $name]);

                $input['photo_id'] = $photo->id;
            }

            $user->hostel()->create($input);

            Session::flash('flash_message', 'Hostel Registration Form Submitted successfully!');
            Session::flash('flash_type', 'alert-success');

            return redirect('home');
        } else {
            return redirect('/notAllowed');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hostel = Hostel::findOrFail($id);

        $hostel->update($request->all());

        Session::flash('flash_message', 'Hostel Registration Form Approved/Un-approved successfully!');
        Session::flash('flash_type', 'alert-info');

        if ($hostel->sex == 'Male') {
            return redirect('/admin/boysHostel');
        } elseif ($hostel->sex == 'Female') {
            return redirect('/admin/girlsHostel');
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
        $hostel = Hostel::findOrFail($id);

        (!empty($hostel->photo) ? unlink(public_path() . $hostel->photo->file) : '');

        $hostel->delete();

        Session::flash('flash_message', 'Hostel Registration Form deleted successfully!');
        Session::flash('flash_type', 'alert-warning');

        return redirect()->back();
    }
}
