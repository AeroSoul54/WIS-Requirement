@extends('layouts.master')
@section('container')
<div class="container">
      <table class="table">
      <h3>Borrowed Book Details</h3>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            	<td>{{ $borrowedBook->book->id }}</td>
                <td>{{ $borrowedBook->book->Title }}</td>
                <td>{{ $borrowedBook->book->Author }}</td> 
                <td>{{ $borrowedBook->book->Category }}</td> 
            </tr>
        </tbody>
    </table>
    
</div> 
<p><a href="/rental_history/books">Back</a></p>
    
@endsection