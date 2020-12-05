@extends('layouts.master')
@section('container')
<div class="container-fluid">
    <h1>Books Rental History</h1>
    <a href="/rental_history/books/create" class=" btn btn-light">create new rent history</a>
    <br />
    <br />
    <table class="table">
        <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Date and Time Borrowed</th>
                <th>Return Due date</th>
                <th>Date Returned</th>
                <th>Penalty</th>
                <th>Actions</th>
                <th>Book ID</th>
                <th>Book Title</th>
                <th>Student ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrowedBooks as $borrowedBook)
            <tr>
               <td>{{ $borrowedBook->id }}</td>  
               <td>{{ $borrowedBook->datetime_borrowed }}</td>     
               <td>{{ $borrowedBook->due_date }}</td>  
               <td> <a href="/rental_history/books/{{ $borrowedBook->id }}/edit" class=" btn btn-success ">Edit</a><br />
                {{ $borrowedBook->date_returned }}
                <td><a href="/rental_history/books/{{ $borrowedBook->id }}/edit" class=" btn btn-success ">Edit</a><br />
                     {{ $borrowedBook->Penalty_in_Peso }}           
                    <td>
                     <a href="/rental_history/books/{{ $borrowedBook->id }}" class=" btn btn-light ">Show</a><br />
                     <a href="/rental_history/books/{{ $borrowedBook->id }}/edit" class=" btn btn-success">Edit</a>
                     @csrf
                     <a href="/rental_history/books/{{ $borrowedBook->id }}/delete" class=" btn btn-danger">Delete</a>
                 </td>
                 <td>
                    <a href="/rental_history/books/{{ $borrowedBook->id }}" class=" btn btn-light ">{{ $borrowedBook->book->id }}</a>
                </td>
                <td>{{ $borrowedBook->book->Title }}</td>
                <td>
                    @foreach($borrowedBook->students as $student)
                    <a href="/students/{{ $student->id }}" class="btn btn-light btn-sm">{{ $student->id_number }}</a>
                    @endforeach
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>    
</div>
<a href="/dashboard" class="btn btn-danger">Back</a>
</div> 

@endsection