<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = student::get();
        return view ('students.index',compact('students'));
    }
    public function show(student $student)
    {
   
        return view('students.show', compact('student'));

    }
    public function create()
    {
        
        return view('students.create', compact('student'));

    }
    public function store()
    {
        $student = new student;
        $student->id_number = request()->id_number;
        $student->first_name = request()->first_name;
        $student->last_name = request()->last_name;
        $student->college_department = request()->college_department;
        $student->save();
        return redirect('/students');

    }
    public function edit (student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(student $student)
    {
        $student->id_number = request()->id_number;
        $student->first_name = request()->first_name;
        $student->last_name = request()->last_name;
        $student->college_department = request()->college_department;
        $student->save();
        return redirect('/students');

    }
    public function delete(student $student)
    {
        $student->delete();
        return redirect('/students');

    }

}
