@extends('layouts.master')
@section('container')
<div class="container col-md-6">
    <h5>Create Device Form</h5>
    @include('layouts.errors')
    <form method="POST" action="/devices">
        @csrf
        
        <div class="form-group" >
            <label for="inputNameOfDevice">Name of the Device</label>
            <input type="text" class="form-control" id="nputNameOfDevice" name="name" >
          </div>
        
        
          <div class="form-group" >
            <label for="inputSerialNumber">Serial Number</label>
            <input type="number" class="form-control" id="inputSerialNumber" name="serial_number">
          </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
         <a href="/devices" class="btn btn-danger">Cancel</a>
      </form> 
</div>
    
@endsection