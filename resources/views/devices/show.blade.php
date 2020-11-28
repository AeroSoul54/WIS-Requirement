@extends('layouts.master')
@section('container')
<div class="container">
	<h6><a href="/books/{{ $device->id }}/edit">Edit</a></h6>
{{-- <h5>Name of the Device : {{ $device->name}}</h5>
<h5>Serial Number : {{ $device->serial_number}}</h5>
</div>
    

<h6><a href="/devices/{{ $device->id }}/edit">Edit</a></h6> --}}
	
<br>
<h4><center> {{ $device->name }} </center></h4> <br>
<div class="row">

<table class="table">
<tbody>
	<thead>
			<tr>
				<th>Device ID</th>
				<th>Device Title</th>
				<th>Serial Number </th>
				<th>Date Rented</th>
				<th>Date Due</th>
				<th>Date Returned</th>
			</tr>
		</thead>

<tr>
		<td> {{ $device->id }} </td>
		<td> {{$device->name }} </td>
		<td> {{$device->serial_number}} </td>
		<td> {{ $device->date_time_borrowed }} </td>
		<td> {{ $device->return_due_date }} </td>
		<td> {{ $device->date_returned}} </td>
	</tr>
</tbody>
</table>

<form action="/devices/{{$device->id }}" method="POST"> @csrf @method('DELETE')
<h6><button class="btn" type="submit">Remove</button></h6>
</form>

</div>
<h6><a href="/books">Cancel</a></h6>



@endsection