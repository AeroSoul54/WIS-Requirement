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
</div>
@endsection

