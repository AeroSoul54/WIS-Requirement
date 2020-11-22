@extends('layouts.master')
@section('container')
<div class="container">
    <h5>Edit Student Information</h5>
    <form method="POST" action="/students/{{ $student->id }}">
      @method('PUT')    
      @csrf
        <div class="form-group" >
            <label for="inputIDofStudent">Student ID</label>
            <input type="number" class="form-control" id="inputIDofStudent" name="student_id">
          </div>
          <div class="form-group" >
            <label for="inputFirstNameOfStudent">First Name</label>
            <input type="text" class="form-control" id="inputFirstNameOfStudent" name="first_name">
          </div>
          <div class="form-group" >
            <label for="inputLastNameOfStudent">Last Name</label>
            <input type="text" class="form-control" id="inputLastNameOfStudent" name="last_name">
          </div>
          <div class="form-group" >
            <label for="inputCollegeDepartmentOfStudent">College Department</label>
            <input type="text"  class="form-control" id="inputCollegeDepartmentOfStudent" name="college_department">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> 
</div>
    
@endsection