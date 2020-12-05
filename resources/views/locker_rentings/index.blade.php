@extends('layouts.master')
@section('container')
<div class="container">
	<h2>Locker Renting</h2>
	<a href="/locker_rents/create" class="btn btn-light">Create Form</a>
	<br />
	<br />
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
					<a href="/locker_rents/{{ $locker_renting->id}}" class="btn btn-light">Show</a>
					<a href="/locker_rents/{{ $locker_renting->id}}/edit" class="btn btn-success">Edit</a>
					<a href="/locker_rents/{{ $locker_renting->id}}/delete" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="/dashboard" class="btn btn-danger">Back</a> 
</div>
@endsection