@extends('layouts.master')
@section('container')
<div class="container">
	<h5>Lockers</h5>
	<table class="table">
		<thead>
			<tr>
				<th>Building Name</th>
				<th>Locker Floor</th>
				<th>Rent Start Date</th>
				<th>Rent End Date</th>
				<th>Reservation Status</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($lockers as $locker)
			<tr>
				<td>{{ $locker->building_name }}</td>
				<td>{{ $locker->floor }}</td>
				<td>{{ $locker->rent_sdate }}</td>
				<td>{{ $locker->rent_edate }}</td>
				<td>{{ $locker->reservation_status }}</td>
				<td>
					<a href="/lockers/{{ $locker->id}}">Show</a>
					|
					<a href="/lockers/{{ $locker->id}}/edit">Edit</a>
					|
					<a href="/lockers/{{ $locker->id}}/delete">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection