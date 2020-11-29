@extends('layouts.master')
@section('container')
<div class="container">
    <h1> Devices</h1>
    <a href="/devices/create">Borrow a Devices</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name of the Device</th>
                <th>Serial Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devices as $device)
            <tr>
                <td><a href="/devices/{{ $device->id }}"> {{ $device->id }} </a></td>
                <td>{{ $device->name }}</td>
                <td>{{ $device->serial_number }}</td>            
                <td>
                    <a href="/devices/{{ $device->id }}/edit">Edit</a>
                |
                      <a href="/devices/{{ $device->id }}/delete">Delete</a>
                    
                   
              
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection