<?php

namespace App\Http\Controllers;

use App\Academic;
use App\Http\Requests\AcademicsCreateRequest;
use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminAcademicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academics = Academic::all();

        return view('admin.academicForm.index', compact('academics'));
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
    public function store(AcademicsCreateRequest $request)
    {
        $input = $request->all();

        $user = Auth::user();

        if ($user->role_id == 2) {
            $Fsem = $input['Fsemcourse'];

            $Fsem = implode(",\n ", $Fsem);

            $input['Fsemcourse'] = $Fsem;


            $Ssem = $input['Ssemcourse'];

            $Ssem = implode(",\n ", $Ssem);

            $input['Ssemcourse'] = $Ssem;


            $year = $input['Exyear'];

            $year = implode(" \n ", $year);

            $input['Exyear'] = $year;


            $index = $input['indexNo'];

            $index = implode(" \n ", $index);

            $input['indexNo'] = $index;


            $exam = $input['Examination'];

            $exam = implode(" \n ", $exam);

            $input['Examination'] = $exam;


            $medium = $input['medium'];

            $medium = implode(" \n ", $medium);

            $input['medium'] = $medium;


            $result = $input['Results'];

            $result = implode(" \n ", $result);

            $input['Results'] = $result;



            if ($file = $request->file('photo_id')) {

                $name = time() . $file->getClientOriginalName();

                $file->move('images', $name);

                $photo = Photo::create(['file' => $name]);

                $input['photo_id'] = $photo->id;
            }

            $user->academic()->create($input);

            Session::flash('flash_message', 'Academic Registration Form Submitted successfully!');
            Session::flash('flash_type', 'alert-success');

            return redirect('home');
        }
        else {
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
        Academic::findOrFail($id)->update($request->all());

        Session::flash('flash_message', 'Academic Registration Form Approved/Un-approved successfully!');
        Session::flash('flash_type', 'alert-info');

        return redirect('/admin/academics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academic = Academic::findOrFail($id);

        (!empty($academic->photo) ? unlink(public_path() . $academic->photo->file) : '');

        $academic->delete();

        Session::flash('flash_message', 'Academic Registration Form deleted successfully!');
        Session::flash('flash_type', 'alert-warning');

        return redirect()->back();
    }
}
