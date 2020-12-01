@extends('layouts.master')
@section('content')
<div class="container">
	<h5>Lockers</h5>
	<table class="table">
		<thead>
			<tr>
				<th>Building Name</th>
				<th>Locker Floor</th>
				<th>Rent Sdate</th>
				<th>Rent Edate</th>
				<th>Reservation Status</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($lockers as $locker)
			<tr>
				<td>{{ $locker->building name</td>
				<td>{{ $locker->floor</td>
				<td>{{ $locker->rent sdate</td>
				<td>{{ $locker->rent edate</td>
				<td>{{ $locker->reservation status</td>
				<td>
					<a href="/lockers/{{ $locker->id}}">Show</a>

					<a href="/lockers/{{ $locker->id}}/edit">Edit</a>
					<a href="/lockers/{{ $locker->id}}/delete">Delete</a>
					<!-- <form method='POST' action= '/lockers/{{ $locker->id }}' >
					@method('DELETE')
					<button type="submit">Delete</button>
					</form -->>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection