@extends('layouts.master')
@section('container')
<div class="container">
	<h5>Create Locker Form</h5>
  <i>*id number without dash</i>
	<form method="POST" action="/locker_rents">
		@csrf
    <div class="row">
      <div class="form-group col-md-6">
        <label for="inputNameOfDevice">Locker Rent ID</label>
        <input type="number" class="form-control" id="inputNameOfDevice" name="locker_rent_id">
      </div>
      <div class="form-group col-md-6">
        <label for="inputStudentId">Student ID*</label>
        <input type="number" class="form-control" id="inputStudentId" name="student_id">
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Rent Start Date</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="rent_start_date">
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Rent End Date</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="rent_end_date">
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Reservation Status</label>
        <select class="custom-select" name='reservation_status'>
          @foreach($reservation_status as $reservation)
          <option value="{{ $reservation }}">{{ $reservation}}</option>
          @endforeach   
        </select>
      </div>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/locker_rents" class="btn btn-danger">Cancel</a> 
  </form>
</div>
@endsection