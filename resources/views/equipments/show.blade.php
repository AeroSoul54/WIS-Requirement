@extends('equipments.master-equipment')
@section('container')
<body>
	<br />
	<br />
<div class="container">
	<h4><strong>Equipments<strong></h4>
		<br />
	<h4>Name: {{ $equipment->name}}</h4>
	<h4>Number of Item: {{ $equipment->number_of_item }}</h4>
	<h4>Rent Start Date: {{ $equipment->rent_start_date }}</h4>
	<h4>Rent End Date: {{ $equipment->rent_end_date }}</h4>
	<h4>Facility: {{ $equipment->facility }}</h4>
	<h4>Facilitator: {{ $equipment->facilitator }}</h4>

</div>
</body>
@endsection