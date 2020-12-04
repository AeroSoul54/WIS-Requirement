@extends('layouts.master')
@section('container')
<div class="container">
	<h5>Edit Locker Form</h5>
	<form method="POST" action="/locker_rents/{{ $locker_renting->id }}">
    @method('PUT')
    @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Rent Start Date</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="rent_start_date" value="{{ $locker_renting->rent_start_date}} ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Rent Edate</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="rent_end_date"value="{{ $locker_renting->rent_end_date}} ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Reservation Status</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name= "reservation_status" value="{{ $locker_renting->reservation_status}} ">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/locker_rents" class="btn btn-danger">Cancel</a> 
</form>
</div>
@endsection