@extends('layouts.master')
@section('container')
<div class="container">
    <h4>Devices</h4>
<h5>Name of the Device : {{ $device->name}}</h5>
<h5>Serial Number : {{ $device->serial_number}}</h5>
</div>
    
@endsection