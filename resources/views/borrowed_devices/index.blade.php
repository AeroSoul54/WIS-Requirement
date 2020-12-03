@extends('layouts.master')
@section('container')
<div class="container">
    <h1> Devices</h1>
    <a href="/borrowed_devices/create"> Create Form</a>

    <table class="table">
        <thead>
            
            <tr>
                <th>Transaction ID</th>
                <th>Date and Time Borrowed</th>
                <th>Return Due date</th>
                <th>Date Returned</th>
                <th>Device ID</th>
                <th>Device name</th>
                <th>Student ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrowed_devices as $borrowed_device)
            <tr>
               <td>{{ $borrowed_device->id }}</td>  
               <td>{{ $borrowed_device->date_time_borrowed }}</td>     
               <td>{{ $borrowed_device->return_due_date }}</td>     
             <td>  <a href="/borrowed_devices/{{ $borrowed_device->id }}/edit">Edit</a> | {{ $borrowed_device->date_returned }}</td>

               <td><a href="/borrowed_devices/{{ $borrowed_device->id }}">{{ $borrowed_device->device->id }}</a></td>     
               
               <td>{{ $borrowed_device->device->name }}</td>
               <td>
                @foreach($borrowed_device->students as $student)
                <a href="/students/{{ $student->id }}">{{ $student->id_number }}</a>
                @endforeach
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>
</div>

@endsection