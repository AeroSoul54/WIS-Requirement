@extends('layouts.master')
@section('container')
<div class="container">
    <h1>Lockers</h1>
    <a href="/lockers/create" class="btn btn-light">Add Locker</a>
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
                    <a href="/lockers/{{ $locker->id }}/edit" class="btn btn-success">Edit</a>
                    
                    <a href="/lockers/{{ $locker->id }}/delete" class="btn btn-danger">Delete</a>
                    <a href="/locker_rents/create" class="btn btn-light">Create Borrowed Locker Form</a>
                   
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
    <a href="/dashboard" class="btn btn-danger">Back</a>
</div>
    
@endsection