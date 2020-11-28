@extends('layouts.master')
@section('container')
<div class="container">
    <h1>Books Rental History</h1>
    <a href="/rental_history/books/create">create new rent history</a>

    <table class="table">
        <thead>
            
            <tr>
                <th>Transaction ID</th>
                <th>Date and Time Borrowed</th>
                <th>Return Due date</th>
                <th>Date Returned</th>
                <th>Penalty</th>
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
                <td> <a href="/rental_history/books/{{ $borrowedBook->id }}/edit">Edit</a>
                | {{ $borrowedBook->date_returned }}
                <td><a href="/rental_history/books/{{ $borrowedBook->id }}/edit">Edit</a>
                | {{ $borrowedBook->Penalty_in_Peso }}
                </td>
                <td>
                    <a href="/rental_history/books/{{ $borrowedBook->id }}">{{ $borrowedBook->book->id }}</a>
                </td>
                <td>{{ $borrowedBook->book->Title }}</td>
<td>
@foreach($borrowedBook->students as $student)
    <a href="/students/{{ $student->id }}">{{ $student->id_number }}</a>
@endforeach
</td>
            </tr>   
            @endforeach
        </tbody>
    </table>    
</div>
<p><a href="/">Back</a></p>
</div> 
    
@endsection