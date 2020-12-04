@extends('layouts.master')
@section('container')
<div class="container">
<h4>List of Student</h4>
<h5>Student ID : {{ $student->id_number}}</h5>
<h5>First Name : {{ $student->first_name}}</h5>
<h5>Last Name : {{ $student->last_name}}</h5>
<h5>College Department: {{ $student->college_department}}</h5>

</div>
<a href="/students" class="btn btn-danger">Back</a>
    
@endsection