<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = student::get();
        return view ('students.index',compact('students'));
    }
    public function show(Student $student)
    {
   
        return view('students.show', compact('student'));

    }
    public function create()
    {
        
        return view('students.create', compact('student'));

    }
    public function store()
    {
        $student = new Student;
        $student->first_name = request()->first_name;
        $student->last_name = request()->last_name;
        $student->college_dept = request()->college_department;
        $student->save();
        return redirect('/students');

    }
    public function edit (Student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Student $student)
    {
        $student->first_name = request()->first_name;
        $student->last_name = request()->last_name;
        $student->college_dept = request()->college_department;
        $student->save();
        return redirect('/students');

    }
    public function delete(Student $student)
    {
        $student->delete();
        return redirect('/students');

    }

}
