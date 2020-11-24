@extends('equipments.master-equipment')
@section('container')
<body>
	<center><h3>Users or Facilitators</h3></center>
	<br />
	<br />

<div class="container">
	<a href="users/create">Create Form</a>
	<br />
	<br />
	
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Facility</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $users as $user)
			<tr>
				<td>{{ $user->id }} </td>
				<td>{{ $user->name }} </td>
				<td>{{ $user->email}}</td>
				<td>{{ $user->facility}}</td>
				<td>
					<a href="/users/{{ $user->id }}">Show</a>
					|
					<a href="/users/{{ $user->id }}/edit">Edit</a>
					|
					<a href="/users/{{ $user->id }}/delete">Delete</a>
					
				</td>  
			</tr>
			@endforeach
		</tbody> 
	</table>
</div>
</body>
@endsection