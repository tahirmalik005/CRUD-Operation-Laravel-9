<?php

namespace App\Http\Controllers;

use App\Models\school;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\SchoolRequest;

class schoolController extends Controller
{
    public function  create()
    {
        return view('schools.create_school');
    }


public function store( SchoolRequest $request )
{
    $model = new school();
//    $model->name = $request->name;
    $model->school_name = $request->school_name;
    $model->school_address = $request->school_address;
    $model->email = $request->email;
    $model->school_phone_number = $request->school_Phone_number;
    $model->save();
    flash()->addSuccess('School Data saved succuesfuly');
    return back();

}

    public function show(  )
    {
        $schools = school::all();
        return view('schools.index',compact('schools'));
}
    public function delete( $id )
    {
        $school = School::find($id);
        $school->delete();
        flash()->addDeleted();
        return back();
    }
    public function Edite( $id )
    {
        $school = school::find($id);
        return view('schools.update',compact('school'));


    }
    public function update( $id , Request $request )

    {
        $model = school::find($id);
        $model->name = $request->name;
        $model->school_name = $request->school_name;
        $model->school_address = $request->school_address;
        $model->email = $request->email;
        $model->school_phone_number = $request->school_Phone_number;
        $model->save();
        flash()->addSuccess('student update succuesfuly');
        return redirect(route('show.school'));
    }

}
