@extends('layouts.master')
@section('container')

<body>
	<div class="container">
		<h4>Create Equipments Form</h4>
		<i>*id number without dash</i>
		<br />
		<br />
		@include('layouts.errors')
		<form method="POST" action="/borrowed_equipments">
			@csrf
			<div class="row">
				<div class="form-group col-md-6">
					<label for="inputNameOfDevice">Equipment ID</label>
					<input type="number" class="form-control" id="inputNameOfDevice" name="equipment_id">
				</div>
				<div class="form-group col-md-6">
					<label for="inputStudentId">Student ID*</label>
					<input type="number" class="form-control" id="inputStudentId" name="student_id">
				</div>
				<div class="form-group col-md-6">
					<strong><label for="exampleInputEmail1">Facility:</label></strong>
					<br />
					<select class="custom-select" name="facility">
						@foreach($facilities as $facility)
						<option value="{{ $facility }}">{{ $facility}}</option>
						@endforeach	
					</select>
				</div>
				<div class="form-group col-md-6">
					<strong><label for="exampleInputEmail1">Rent Start Date:</label></strong>
					<input type="text" class="form-control" id="exampleInputPassword1" name="rent_start_date" placeholder="YYYY-MM-DD" >
				</div>
				
				<div class="form-group col-md-6">
					<strong><label for="exampleInputEmail1">Number of Equipments:</label></strong>
					<input type="number" class="form-control" id="exampleInputPassword1" name="number_of_item">
				</div>
				<div class="form-group col-md-6">
					<strong><label for="exampleInputEmail1">Facilitator:</label></strong>
					<input type="text" class="form-control" id="exampleInputPassword1" name="facilitator" placeholder="name of the facilitator">
				</div>
				<div class="form-group col-md-6">
					<strong><label for="exampleInputEmail1">Name of the Equipment:</label></strong>
					<input type="text" class="form-control" id="exampleInputPassword1" name="name">
				</div>
				<div class="form-group col-md-6">
					<strong><label for="exampleInputEmail1">Rent End Date:</label></strong>
					<input type="text" class="form-control" id="exampleInputPassword1" name="rent_end_date" placeholder="YYYY-MM-DD" >
				</div>

				<button type="submit" class="btn btn-primary" style="margin-left: 15px;">Submit</button> 
			</form>
		</div>
	</div>
</body>
@endsection
