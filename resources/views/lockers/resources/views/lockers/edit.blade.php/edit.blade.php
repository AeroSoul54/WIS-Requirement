@extends('layouts.master')
@section('content')
<div class="container">
	<h5>Edit Locker Form</h5>
	<form method="POST" action="/lockers/{{ $locker->id }}">
    @method('PUT')
		@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Building Name  </label>
    <select class="custom-select" name='building_name'>
    	@foreach($buildings name as building name)
      @if($building name == $locker->building name)
    	<option value="{{ $building}}" selected>{{ $building_name }}</option>
      @else
        <option value="{{ $building}}">{{ $building_name }}</option>
      @endif
    	@endforeach
         
    </select>
  </div>
      <div class="form-group">
    <label for="exampleInputPassword1">Locker Floor</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="locker_floor" value="{{ $locker->floor }}">

  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Rent Sdate</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="rent_sdate" value="{{ $locker->rent_sdate}} ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Rent Edate</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="rent_edate"value="{{ $locker->rent_edate}} ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Reservation Status</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name= "reservation_status" value="{{ $locker->reservation_status}} ">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
       </form>
</div>
@endsection