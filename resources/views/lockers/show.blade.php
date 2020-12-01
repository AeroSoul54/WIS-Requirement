@extends('layouts.master')
@section('container')
<div class="container">
	<h5>Lockers</h5>
	<h5>Building Name:      {{$locker-> building name}}</h5>
	<h5>Floor:              {{$locker-> floor}}</h5>
	<h5>Rent Sdate:         {{$locker-> rent sdate}}</h5>
	<h5>Rent Edate:         {{$locker-> rent edate}}</h5>
	<h5>Reservation Status: {{$locker-> reservation status}}</h5>

</div>
@endsection