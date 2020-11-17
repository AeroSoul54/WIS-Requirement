@extends('layouts.master')
@section('content')
<div class="container">
	<h5>Create Locker Form</h5>
	<form method="POST" action="/lockers">
		@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Building Name  </label>
    <select class="custom-select" name='building_name'>
    	@foreach($buildings name as building name)
    	<option value="{{ $building}}">{{ $building name }}</option>
    	@endforeach
         
    </select>
  </div>
      <div class="form-group">
    <label for="exampleInputPassword1">Locker Floor</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="locker_floor">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Rent Sdate</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="rent_sdate">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Rent Edate</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="rent_edate">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Reservation Status</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name= "reservation_status">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
       </form>
</div>
@endsection