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
					<th>Rent Start Date</th>
					<th>Rent End Date</th>
					<th>Actions</th>
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
				</tr>
				@endforeach
			</tbody> 
		</table>

		<br>
		<br>
		<div class="row col-md-6">
			<!--second table-->
			<h3>Student Info</h3>
			<table class="table">
				<thead>
					<tr>
						<th>ID Number</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>College Department</th>
					</tr>
				</thead>
				<tbody>
					@foreach($borrowed_equipment->students as $student)
					<td>{{ $student->id_number }}</td>
					<td>{{ $student->first_name }}</td>
					<td>{{ $student->last_name }}</td>
					<td>{{ $student->college_department }}</td> 
					@endforeach
				</tbody> 
			</table>
		</div>
	</div>

</body>
@endsection