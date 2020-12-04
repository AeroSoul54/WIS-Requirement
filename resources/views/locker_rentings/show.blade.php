@extends('layouts.master')
@section('container')
<div class="container">
	<h5>Locker Renting Status</h5>
	<br>
	<br>
	<h5>Rent Start Date:         {{$locker_renting-> rent_start_date}}</h5>
	<h5>Rent End Date:         {{$locker_renting-> rent_end_date}}</h5>
	<h5>Reservation Status: {{$locker_renting-> reservation_status}}</h5>
</div>
<a href="/locker_rents" class="btn btn-danger">Back</a> 
@endsection