@extends('layouts.master')
@section('container')
<div class="container">
    <h4>Borrowed Devices</h4>
<h5>Device ID : {{ $borrowed_device->id}}</h5>
<h5>Student ID : {{ $borrowed_device->studnet_id}}</h5>
<h5>Date and Time Borrowed : {{ $borrowed_device->date_time_borrowed}}</h5>
<h5>Return Due date : {{ $borrowed_device->return_due_date}}</h5>
<h5>Date Returned : {{ $borrowed_device->date_returned}}</h5>

</div>
    
@endsection