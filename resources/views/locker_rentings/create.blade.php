@extends('layouts.master')
@section('container')
<div class="container">
	<h5>Create Locker Form</h5>
	<form method="POST" action="/locker_rents">
		@csrf
    <div class="form-group">
      <label for="exampleInputPassword1">Rent Start Date</label>
      <input type="date" class="form-control" id="exampleInputPassword1" name="rent_start_date">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Rent End Date</label>
      <input type="date" class="form-control" id="exampleInputPassword1" name="rent_end_date">
    </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Reservation Status</label>
    <select class="custom-select" name='reservation_status'>
      @foreach($reservation_status as $reservation)
      <option value="{{ $reservation }}">{{ $reservation}}</option>
      @endforeach   
    </select>
  </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection