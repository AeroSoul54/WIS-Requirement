@extends('layouts.master')
@section('container')
<div class="container">
    <h5>Book Rent Form</h5>
    @include('layouts.errors')
    <form method="POST" action="/rental_history/books">
        @csrf
        
            <div class="form-group" >
            <label for="inputNameOfDevice">Book ID</label>
            <input type="number" class="form-control" id="nputNameOfDevice" name="book_id">
          </div>

          <div class="form-group" >
            <label for="inputStudentId">Student ID Number</label>
            <input type="text" class="form-control" id="inputStudentId" name="student_id">
          </div>
          <div class="form-group" >
            <label for="inputDTborrowed">Date and Time Borrowed</label>
            <input type="datetime-local" value="2011-08-19T13:45:00" class="form-control" id="inputDTborrowed" name="dateTime_borrowed">
          </div>
          <div class="form-group" >
            <label for="inputReturnDue">Return Due Date</label>
            <input type="date"  class="form-control" id="inputReturnDue" name="due_date">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


      <p><a href="/rental_history/books">Back</a></p> 
</div>


    
@endsection