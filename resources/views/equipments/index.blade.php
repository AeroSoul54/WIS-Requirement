@extends('layouts.master')
@section('container')
<div class="container">
    <h1>Equipments</h1>
    <a href="/equipments/create">Add Equipment</a>
    <br />
    <br />
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name of the Equipment</th>
                <th>Model or Type Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipments as $equipment)
            <tr>
                <td>{{ $equipment->id }}</td>
                <td>{{ $equipment->name }}</td>
                <td>{{ $equipment->model}}</td>            
                <td>
                    <a href="/equipments/{{ $equipment->id }}/edit">Edit</a>
                    |
                    <a href="/equipments/{{ $equipment->id }}/delete">Delete</a>
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection