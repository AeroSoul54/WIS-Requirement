@extends('layouts.master')
@section('container')
<div class="container">
    <h5>Edit Device Form</h5>
<form method="POST" action="/devices/{{ $device->id }}">
    @method('PUT')    
    @csrf
        
        <div class="form-group" >
            <label for="inputNameOfDevice">Name of the Device</label>
            <input type="text" class="form-control" id="nputNameOfDevice" name="name"
            value="{{$device->name}}">
          </div>
        
        
          <div class="form-group" >
            <label for="inputSerialNumber">Serial Number</label>
          <input type="number" class="form-control" id="inputSerialNumber" name="serial_number" 
          value="{{$device->serial_number}}">
          </div>
        
   
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> 
</div>
    
@endsection