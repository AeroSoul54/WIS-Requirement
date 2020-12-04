@extends('layouts.master')
@section('container')

<body>
	<div class="container">
		<h4>Create Users Form</h4>
		<br />
		@include('layouts.errors')
		<form method="POST" action="/users">
			@csrf
			<div class="row">
				<div class="form-group col-md-6">
					<strong><label for="exampleInputEmail1">Name:</label></strong>
					<input type="text" class="form-control" id="exampleInputPassword1" name="name">
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
					<strong><label for="exampleInputEmail1">Email:</label></strong>
					<input type="email" class="form-control" id="exampleInputPassword1" name="email">
				</div>
				<div class="form-group col-md-6">
					<strong><label for="exampleInputEmail1">Password:</label></strong>
					<input type="password" class="form-control" id="exampleInputPassword1" name="password">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" style="margin-left: 5px;">Submit</button>
			<a href="/users" class="btn btn-danger">Cancel</a>
		</form>
	</div>

</body>
@endsection
