@extends('layouts.master')

@section('container')
<div class="container">
	<h1>Library</h1>
	<a href="/books/create" class="btn btn-light">Borrow a book</a>
	<br />
	<table class="table">
		<thead>
			<tr>
				<th>Book ID</th>
				<th>Book Title</th>
				<th>Book Author</th>
				<th>Book Category</th>
			</tr>
		</thead>
		
		<tbody>
			
			@foreach($books as $book)
			<tr>
				<td><a href="/books/{{ $book->id }}"> {{ $book->id }} </a></td>
				<td> {{ $book->Title }} </td>
				<td> {{ $book->Author }} </td>
				<td> {{ $book->Category }} </td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="/dashboard" class="btn btn-danger">Back</a>
</div>
@endsection

