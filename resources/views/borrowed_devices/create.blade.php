@extends('layouts.master')
@section('container')
<div class="container">
    <h5>Create Device Form</h5>
    <form method="POST" action="/borrowed_devices">
        @csrf
        
        <div class="form-group" >
            <label for="inputNameOfDevice">Device ID</label>
            <input type="number" class="form-control" id="nputNameOfDevice" name="device_id">
          </div>
          <div class="form-group" >
            <label for="inputStudentId">Student ID</label>
            <input type="text" class="form-control" id="inputStudentId" name="student_id">
          </div>
          <div class="form-group" >
            <label for="inputDTborrowed">Date and Time Borrowed</label>
            <input type="datetime-local" value="2011-08-19T13:45:00" class="form-control" id="inputDTborrowed" name="date_time_borrowed">
          </div>
          <div class="form-group" >
            <label for="inputReturnDue">Return Due Date</label>
            <input type="date"  class="form-control" id="inputReturnDue" name="return_due_date">
          </div>
          <div class="form-group" >
            <label for="inputdateReturned">Date Returned</label>
            <input type="date" class="form-control" id="inputdateReturned" name="date_returned">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> 
</div>
    
@endsection