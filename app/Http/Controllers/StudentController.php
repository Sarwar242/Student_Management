<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    public function index()
    {
        $students = student::all();
        return view('index')->with('students', $students);
    }
    public function create()
    {
        return view('create');
    }
    public function edit($id)
    {
        $student=student::find($id);
        return view('edit')->with('student', $student);
    }
    public function store(Request $request)
    {

        //validation
        $this->validate(
            $request,
            [
            'name' => 'required',
            'reg_id' => 'required|integer'
            ]
        );

        //insert data
        $student= new student;
        $student->name=$request->name;
        $student->reg_id=$request->reg_id;
        $student->department_name=$request->department_name;
        $student->info=$request->info;
        $student->save();
        return redirect() -> route('index');
        dd('Submitted');
    }
    public function update(Request $request, $id)
    {
        $student=student::find($id);
        $student->id=$request->id;

        $student->name=$request->name;
        $student->reg_id=$request->reg_id;
        $student->department_name=$request->department_name;
        $student->info=$request->info;


        $student->save();

        return redirect() -> route('index');
        dd('Submitted');
    }
    public function delete($id)
    {
        $student=student::find($id);
        $student->delete();
        return redirect() -> route('index');
    }
}
