<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    public function create()
    {
       return view('students.create');
    }


    public function store( StudentRequest $request )
    {

        $model = new Student();
        $model->name = $request->name;
        $model->father_name = $request->father_name;
        $model->address = $request->address;
        $model->email = $request->email;
        $model->phone_number = $request->phone_number;
        $model->class = $request->class;
        $model->save();
        flash()->addSuccess('student saved succuesfuly');
        return back();
    }

    public function show(  )
    {
        $students = Student::all();
        return view('students.index',compact('students'));
    }

    public function delete( $id )
    {
        $student = Student::find($id);
        $student->delete();
        flash()->addDeleted();
        return back();
    }

    public function Edite( $id )
    {
        $student = Student::find($id);
        return view('students.update',compact('student'));

        return back();

    }

    public function update( $id , Request $request )
    {

        $model = Student::find($id);
        $model->name = $request->name;
        $model->father_name = $request->father_name;
        $model->address = $request->address;
        $model->email = $request->email;
        $model->phone_number = $request->phone_number;
        $model->class = $request->class;
        $model->save();
        flash()->addSuccess('student update succuesfuly');
        return redirect(route('show.students'));
    }


    public function dkdkdkd()
    {
        kjasdfklj asdlkfjaskl;
    }
}
