@extends('equipments.master-equipment')
@section('container')
<body>
	
	<div class="container">
		<h4>Create Equipments Form</h4>
		<br />
		<form method="POST" action="/equipments">
			@csrf
			<div class="row">
				<div class="form-group col">
					<strong><label for="exampleInputEmail1">Facility:</label></strong>
					<br />
					<select class="custom-select" name="facility">
						@foreach($facilities as $facility)
						<option value="{{ $facility }}">{{ $facility}}</option>
						@endforeach	
					</select>
				</div>
				<div class="form-group col">
					<strong><label for="exampleInputEmail1">Name of the Equipment:</label></strong>
					<input type="text" class="form-control" id="exampleInputPassword1" name="name">
				</div>
				<div class="form-group col">
					<strong><label for="exampleInputEmail1">Number of Equipments:</label></strong>
					<input type="text" class="form-control" id="exampleInputPassword1" name="number_of_item">
				</div>
				<div class="form-group col">
					<strong><label for="exampleInputEmail1">Facilitator:</label></strong>
					<input type="text" class="form-control" id="exampleInputPassword1" name="facilitator">
				</div>
				<div class="form-group col">
					<strong><label for="exampleInputEmail1">Rent Start Date:</label></strong>
					<input type="text" class="form-control" id="exampleInputPassword1" name="rent_start_date" placeholder="YYYY-MM-DD">
				</div>
				<div class="form-group col">
					<strong><label for="exampleInputEmail1">Rent End Date:</label></strong>
					<input type="text" class="form-control" id="exampleInputPassword1" name="rent_end_date" placeholder="YYYY-MM-DD">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button> 
			</form>
		</div>
	</div>
</body>
@endsection
