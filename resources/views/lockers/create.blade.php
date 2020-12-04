@extends('layouts.master')
@section('container')
<div class="container col-md-6">
  <h5>Create Device Form</h5>
  @include('layouts.errors')
  <form method="POST" action="/lockers">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Building Name </label>
      <select class="custom-select" name='building_name'>
        @foreach($buildings as $building)
        <option value="{{ $building}}">{{ $building }}</option>
        @endforeach   
      </select>
    </div>
    <div class="form-group" >
      <label for="inputLockerFloorName">Locker Floor</label>
      <input type="number" class="form-control" name="locker_floor">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
     <a href="/" class="btn btn-danger">Cancel</a>
  </form> 
</div>

@endsection