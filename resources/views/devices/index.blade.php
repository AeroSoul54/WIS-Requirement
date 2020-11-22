@extends('layouts.master')
@section('container')
<div class="container">
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
                 <td>{{ $device->id }}</td>
                <td>{{ $device->name }}</td>
                <td>{{ $device->serial_number }}</td>            
                <td>
                    <a href="/devices/{{ $device->id }}">Show</a>
                |
                    <a href="/devices/{{ $device->id }}/edit">Edit</a>
                |
                      <a href="/devices/{{ $device->id }}/delete">Delete</a>
                    
                   
              {{-- <form method='POST' action='/devices/{{ $device->id }}'>
                    @method('DELETE')
                  @csrf
                    <button type="submit">Delete </button> --}}
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection