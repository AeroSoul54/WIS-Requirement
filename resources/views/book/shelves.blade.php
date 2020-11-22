@extends('layouts.master')

@section('container')
<h1>Library</h1>
<a href="/books/create">Borrow a book</a>

<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Book ID</th>
				<th>Book Title</th>
				<th>Book Author</th>
				<th>Book Category</th>
				<th>Date Rented</th>
				<th>Date Due</th>
				<th>Penalty</th>
			</tr>
		</thead>
		
		<tbody>
			
			@foreach($books as $book)
	<tr>
		<td><a href="/books/{{ $book->id }}"> {{ $book->id }} </a></td>
		<td> {{ $book->Title }} </td>
		<td> {{ $book->Author }} </td>
		<td> {{ $book->Category }} </td>
		<td> {{ $book->Rent_Date }} </td>
		<td> {{ $book->Due_Date }} </td>
		<td> {{ $book->Penalty }} </td>
	</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

