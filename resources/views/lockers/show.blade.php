@extends('layouts.master')
@section('container')
<body>
	<br />
	<br />
<div class="container">
	<h4><strong>Lockers<strong></h4>
		<br />
<h4>Building: {{locker->locker_building}}</h4>
<h5>Locker Floor: {{locker->locker_floor}}</h5>
<h5>Rent Start Date: {{locker_renting->rent_start_date}}</h5>
<h4>Rent end Date: {{locker_renting->rent_end_date}}</h4>
<h4>Reservation Status: {{locker_renting->reservation_status}}</h4>

</div>
<a href="/lockers" class="btn btn-danger">Back</a>
</body>
@endsection