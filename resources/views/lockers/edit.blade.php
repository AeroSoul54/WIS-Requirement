@extends('layouts.master')
@section('container')
<div class="container col-md-6">
  <h5>Edit Locker Form</h5>
  @include('layouts.errors')
  <form method="POST" action="/lockers/{{ $locker->id }}">
    @method('PUT')    
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
      <label for="inputModelName">Locker Floor</label>
      <input type="number" class="form-control"  name="locker_floor" 
      value="{{ $locker->model}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>

@endsection