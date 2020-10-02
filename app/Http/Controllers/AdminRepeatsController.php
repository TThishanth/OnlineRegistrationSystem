<?php

namespace App\Http\Controllers;

use App\Http\Requests\RepeatsCreateRequest;
use App\Photo;
use App\Repeat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminRepeatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repeats = Repeat::all();

        return view('admin.repeatExam.index',compact('repeats'));
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
    public function store(RepeatsCreateRequest $request)
    {  
        $input = $request->all();

        $user = Auth::user();

        $subjects = $input['course'] ;

        $subjects = implode(",\n ", $subjects);

        $input['course'] = $subjects;

        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id; 

        }

        $user->repeat()->create($input);

        Session::flash('flash_message', 'Repeat Examination Form Submitted successfully!');
	    Session::flash('flash_type', 'alert-success');

        return redirect('home'); 
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
        Repeat::findOrFail($id)->update($request->all());

        Session::flash('flash_message', 'Repeat Examination Form Approved/Un-approved successfully!');
        Session::flash('flash_type', 'alert-info');

        return redirect('/admin/repeats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $repeat = Repeat::findOrFail($id);

        (!empty($repeat->photo) ? unlink(public_path() . $repeat->photo->file) : '');

        $repeat->delete();

        Session::flash('flash_message', 'Repeat Examination Form deleted successfully!');
	    Session::flash('flash_type', 'alert-warning');

        return redirect()->back();
    }
}
