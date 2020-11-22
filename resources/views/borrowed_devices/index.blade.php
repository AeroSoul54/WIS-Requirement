@extends('layouts.master')
@section('container')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Device ID</th>
                <th>Student ID</th>
                <th>Date and Time Borrowed</th>
                <th>Return Due date</th>
                <th>Date Returned</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrowed_devices as $borrowed_device)
            <tr>
                 <td>{{ $borrowed_device->id }}</td>
                <td>{{ $borrowed_device->device_id }}</td>
                <td>{{ $borrowed_device->student_id }}</td>     
                <td>{{ $borrowed_device->date_time_borrowed }}</td>     
                <td>{{ $borrowed_device->return_due_date }}</td>     
                <td>{{ $borrowed_device->date_returned }}</td>         
                <td>
                    <a href="/borrowed_devices/{{ $borrowed_device->id }}">Show</a>
                |
                  <a href="/borrowed_devices/{{ $borrowed_device->id }}/edit">Edit</a>
                |
                @csrf
                 <a href="/borrowed_devices/{{ $borrowed_device->id }}/delete">Delete</a> 
                    
                   
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection