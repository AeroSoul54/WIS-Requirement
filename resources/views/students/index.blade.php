@extends('layouts.master')
@section('container')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
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