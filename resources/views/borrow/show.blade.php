@extends('layouts.master')
@section('container')
<body>

<div class="container">
	<h2>Equipments</h2>
	<h2>Name: {{ $equipment->name}}</h2>
	<h2>Number of Item: {{ $equipment->number_of_item }}</h2>
	<h2>Rent Start Date: {{ $equipment->rent_start_date }}</h2>
	<h2>Rent End Date: {{ $equipment->rent_end_date }}</h2>
	<h2>Facility: {{ $equipment->facility }}</h2>
	<h2>Facilitator: {{ $equipment->facilitator }}</h2>

</div>
</body>
@endsection