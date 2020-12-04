@extends('layouts.master')
@section('container')
<div class="container">
      <table class="table">
      <h3>Borrowed Devices Details</h3>
        <thead>
            <tr>
                <th>Device ID</th>
                <th>Name of the Device</th>
                <th>Serial Number</th>
           
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $borrowed_device->device->id }}</td>
                <td>{{ $borrowed_device->device->name }}</td>
                <td>{{ $borrowed_device->device->serial_number }}</td>
            </tr>
        </tbody>
    </table>
    <a href="/borrowed_devices" class="btn btn-danger">Back</a>
</div> 

    
@endsection