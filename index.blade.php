@extends('layouts.master')
@section('container')
<div class="container">
    <h1>Lockers</h1>
    <a href="/lockers/create">Add Locker</a>
    <br />
    <br />
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Building Name</th>
                <th>Locker Floor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lockers as $locker)
            <tr>
                <td>{{ $locker->id }}</td>
                <td>{{ $locker->building_name }}</td>
                <td>{{ $locker->locker_floor }}</td>           
                <td>
                    <a href="/lockers/{{ $locker->id }}/edit">Edit</a>
                    |
                    <a href="/lockers/{{ $locker->id }}/delete">Delete</a>
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection