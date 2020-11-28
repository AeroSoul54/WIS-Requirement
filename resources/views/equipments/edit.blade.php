@extends('layouts.master')
@section('container')
<div class="container col-md-6">
  <h5>Edit Equipment Form</h5>
  @include('layouts.errors')
  <form method="POST" action="/equipments/{{ $equipment->id }}">
    @method('PUT')    
    @csrf
    <div class="form-group" >
      <label for="inputNameOfEquipment">Name of the Equipment</label>
      <input type="text" class="form-control" id="inputNameOfEquipment" name="name"
      value="{{$equipment->name}}">
    </div>
    <div class="form-group" >
      <label for="inputModelName">Model or Type</label>
      <input type="text" class="form-control" id="inputModelName" name="model" 
      value="{{$equipment->model}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>

@endsection