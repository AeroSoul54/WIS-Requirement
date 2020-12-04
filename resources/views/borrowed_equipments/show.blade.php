@extends('layouts.master')
@section('container')
<body>
	<br />
	<br />
<div class="container">
	<h4><strong>Equipments<strong></h4>
		<br />
	<h4>Name: {{ $borrowed_equipment->equipment->name}}</h4>
	<h5>Equipment ID : {{ $borrowed_equipment->id}}</h5>
	<h5>ID Number : {{ $borrowed_equipment->student_id}}</h5>
	<h4>Number of Item: {{ $borrowed_equipment->number_of_item }}</h4>
	<h4>Rent Start Date: {{ $borrowed_equipment->rent_start_date }}</h4>
	<h4>Rent End Date: {{ $borrowed_equipment->rent_end_date }}</h4>
	<h4>Facility: {{ $borrowed_equipment->facility }}</h4>
	<h4>Facilitator: {{ $borrowed_equipment->facilitator }}</h4>

</div>
<a href="/borrowed_equipments" class="btn btn-danger">Back</a> 
</body>
@endsection