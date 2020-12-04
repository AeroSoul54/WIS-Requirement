@extends('layouts.master')
@section('container')
<div class="container col-md-6">
    <h5>Create Device Form</h5>
    @include('layouts.errors')
    <form method="POST" action="/equipments">
      @csrf
      <div class="form-group" >
        <label for="inputNameOfEquipment">Name of the Equipment</label>
        <input type="text" class="form-control" id="inputNameOfEquipment" name="name">
      </div>
      <div class="form-group" >
        <label for="inputModelName">Model or Type Name</label>
        <input type="text" class="form-control" id="inputModelName" name="model">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
       <a href="/equipments" class="btn btn-danger">Cancel</a>
    </form> 
</div>

@endsection