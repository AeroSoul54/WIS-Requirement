@extends('layouts.master')
@section('container')
<body>
	<br />
	<br />
<div class="container">
	<h4><strong>Facilitators<strong></h4>
		<br />
	<h4>Name: {{ $user->name  }}</h4>
	<h4>Email: {{ $user->email }}</h4>
	<h4>Facility: {{ $user->facility }}</h4>
</div>
<a href="/users" class="btn btn-danger">Back</a>
</body>
@endsection