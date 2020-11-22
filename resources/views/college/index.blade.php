@extends('layouts.master')
@section('content')
<h1>Hello</h1>
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>College Department</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $college_dept as $colleges)
			<tr>
				<td>{{ $colleges->id }} </td>
				<td>{{ $colleges->name }} </td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection