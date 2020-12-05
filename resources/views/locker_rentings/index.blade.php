@extends('layouts.master')
@section('container')
<div class="container">
	<h5>Locker Renting</h5>
	<a href="/locker_rents/create">Create Form</a>
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
			@foreach($locker_rentings as $locker_renting)
			<tr>
				<td>{{ $locker_renting->locker->building_name }}</td>
				<td>{{ $locker_renting->locker->locker_floor }}</td>
				<td>{{ $locker_renting->rent_start_date }}</td>
				<td>{{ $locker_renting->rent_end_date }}</td>
				<td>{{ $locker_renting->reservation_status }}</td>
				<td>
					<a href="/locker_rents/{{ $locker_renting->id}}">Show</a>
					|
					<a href="/locker_rents/{{ $locker_renting->id}}/edit">Edit</a>
					|
					<a href="/locker_rents/{{ $locker_renting->id}}/delete">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection