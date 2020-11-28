@extends('layouts.master')
@section('container')
<body>
	<h3>Equipments</h3>
	<a href="/borrowed_equipments/create">Create Form</a>
	
<div class="container">


	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Number of Items Borrowed</th>
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
				<td>{{ $borrowed_equipment->name }} </td>
				<td>{{ $borrowed_equipment->number_of_item}}</td>
				<td>{{ $borrowed_equipment->facility}}</td>
				<td>{{ $borrowed_equipment->facilitator}}</td>
				<td>{{ $borrowed_equipment->rent_start_date}}</td>
				<td>{{ $borrowed_equipment->rent_end_date}}</td>
				
				<td>
					<a href="/equipments/{{ $borrowed_equipment->id }}">Show</a>
					|
					<a href="/equipments/{{ $borrowed_equipment->id }}/edit">Edit</a>
					|
					<a href="/equipments/{{ $borrowed_equipment->id }}/delete">Delete</a>
					
				</td>  
			</tr>
			@endforeach
		</tbody> 
	</table>
</div>
</body>
@endsection