@extends('layouts.master')
@section('container')
<body>
	
	
	<div class="container">
		<h3>Borrowed Equipments</h3>
		<a href="/borrowed_equipments/create">Create Form</a>
		<br>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Model or Type</th>
					<th>Amount</th>
					<th>Facility</th>
					<th>Facilitator</th>
					<th>Date Borrowed</th>
					<th>Date Returned</th>
					<th>Actions</th>
					<th>Student ID Number</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $borrowed_equipments as $borrowed_equipment)
				<tr>
					<td>{{ $borrowed_equipment->id }} </td>
					<td>{{ $borrowed_equipment->equipment->name }}</td>
					<td>{{ $borrowed_equipment->equipment->model }}</td>
					<td>{{ $borrowed_equipment->number_of_item }}</td>
					<td>{{ $borrowed_equipment->facility }}</td>
					<td>{{ $borrowed_equipment->facilitator}}</td>
					<td>{{ $borrowed_equipment->rent_start_date}}</td>
					<td>{{ $borrowed_equipment->rent_end_date}}</td>
					<td>
						<a href="/borrowed_equipments/{{ $borrowed_equipment->id }}">Show</a>
						|
						<a href="/borrowed_equipments/{{ $borrowed_equipment->id }}/edit">Edit</a>
						|
						<a href="/borrowed_equipments/{{ $borrowed_equipment->id }}/delete">Delete</a>
					</td>
					<td>
						@foreach($borrowed_equipment->students as $student)
						<a href="/students/{{ $student->id }}">{{ $student->id_number }}</a>
						@endforeach
					</td>
				</tr>
				@endforeach
			</tbody> 
		</table>
	</div>
</body>
@endsection