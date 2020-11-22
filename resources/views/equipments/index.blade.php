@extends('equipments.master-equipment')
@section('container')
<body>
	<center><h3>Equipments</h3></center>
	<br />
	<br />
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
			@foreach( $equipments as $equipment)
			<tr>
				<td>{{ $equipment->id }} </td>
				<td>{{ $equipment->name }} </td>
				<td>{{ $equipment->number_of_item}}</td>
				<td>{{ $equipment->facility}}</td>
				<td>{{ $equipment->facilitator}}</td>
				<td>{{ $equipment->rent_start_date}}</td>
				<td>{{ $equipment->rent_end_date}}</td>
				
				<td>
					<a href="/equipments/{{ $equipment->id }}">Show</a>
					|
					<a href="/equipments/{{ $equipment->id }}/edit">Edit</a>
					|
					<a href="/equipments/{{ $equipment->id }}/delete">Delete</a>
					
				</td>  
			</tr>
			@endforeach
		</tbody> 
	</table>
</div>
</body>
@endsection