@extends('layouts.master')
@section('container')
<body>
	<div class="container-fluid">
		<h3>Borrowed Equipments</h3>
		<a href="/borrowed_equipments/create" class="btn btn-light">Create Form</a>
		<br>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Model</th>
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
						<a href="/borrowed_equipments/{{ $borrowed_equipment->id }}" class="btn btn-light btn-sm">Show</a>
						
						<a href="/borrowed_equipments/{{ $borrowed_equipment->id }}/edit" class="btn btn-success btn-sm">Edit</a>
						
						<a href="/borrowed_equipments/{{ $borrowed_equipment->id }}/delete" class="btn btn-danger btn-sm"> Delete</a>
					</td>
					<td>
						@foreach($borrowed_equipment->students as $student)
						<a href="/students/{{ $student->id }}" class="btn btn-light">{{ $student->id_number }}</a>
						@endforeach
					</td>
				</tr>
				@endforeach
			</tbody> 
		</table>
		<a href="/dashboard" class="btn btn-danger">Back</a> 
	</div>
</body>
@endsection