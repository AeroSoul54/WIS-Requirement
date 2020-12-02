@extends('layouts.master')
@section('container')
<div class="container">
    <h1>Students</h1>
    <a href="/students/create">Add Student</a>
    <br />
    <br />
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>College Department</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->id_number }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>     
                <td>{{ $student->college_department }}</td>     
                <td>

                <a href="/students/{{ $student->id }}">Show</a>
                |
                  <a href="/students/{{ $student->id }}/edit">Edit</a>
                |
                @csrf
                 <a href="/students/{{ $student->id }}/delete">Delete</a> 
                    
                   
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection