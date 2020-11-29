@extends('layouts.master')
@section('container')
<div class="container">
  <h5>Edit Borrowed Devices</h5>
  <form method="POST" action="/rental_history/books/{{ $borrowedBook->id }}">
    @method('PUT')    
    @csrf


    <div class="form-group" >
      <label>Book ID</label>
      <input type="number" class="form-control" name="book_id"
      value="{{$borrowedBook->id}}" required>

      <div class="form-group" >
       <label>Student ID</label>
       <input type="text" class="form-control" name="student_id"
       value="{{$borrowedBook->student_id}}" required>
     </div>
     <div class="form-group" >
      <label>Date and Time Borrowed</label>
      <input type="" class="form-control" name="dateTime_borrowed"
      value="{{$borrowedBook->dateTime_borrowed}}" required>
    </div>
    <div class="form-group">
      <label>Return Due Date</label>
      <input type="date"  class="form-control" name="due_date"
      value="{{$borrowedBook->due_date}}" required>
    </div>
    <div class="form-group">
      <label>Date Returned</label>
      <input type="date" class="form-control" name="date_returned"
      value="{{$borrowedBook->date_returned}}" required>
    </div>
    <div class="form-group">
      <label>Penalty</label>
      <input type="" class="form-control" name="Penalty_in_Peso"
      value="{{$borrowedBook->Penalty_in_Peso}}" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>

@endsection