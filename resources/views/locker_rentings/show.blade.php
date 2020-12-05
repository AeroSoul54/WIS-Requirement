@extends('layouts.master')
@section('container')
<div class="container">
	<strong><h1>Locker Renting Status</h1></strong>
	<br/>
	<h5>Building Name: {{$locker_renting->locker->building_name}}</h5>
	<h5>Locker Floor: {{$locker_renting->locker->locker_floor}}</h5>
	<h5>Rent Start Date: {{$locker_renting-> rent_start_date}}</h5>
	<h5>Rent End Date: {{$locker_renting-> rent_end_date}}</h5>
	<h5>Reservation Status: {{$locker_renting-> reservation_status}}</h5>

<br />
<br />
<a href="/locker_rents" class="btn btn-danger">Back</a> 
</div>
@endsection