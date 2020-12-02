@extends('layouts.master')
@section('container')
<body>
	<br />
	<br />
<div class="container">
	<h4><strong>Lockers<strong></h4>
		<br />
	<h4>Building: {{ $locker->building_name}}</h4>
	<h4>Locker Floor: {{ $locker->locker_floor }}</h4>


	<div>
		<ul>
			@foreach ($lockers as $lockers)
			<li><a href="/lockers/{{lockers->id}}">Building: {{ $locker->building_name}}</a></li>
			<li><a href="/lockers/{{lockers->locker_floor}}">Locker Floor: {{ $locker->locker_floor }}</a></li>
		</ul>
	</div>


	<div>
		<h1>Locker Renting Status</h1>
		<thead>
			<tr>
				<td>Building</td>
				<td>Locker Floor</td>
				<td>Rent Start Date</td>
				<td>Rent Eding Date</td>
				<td>Reservation Status</td>
				<td>Rent LifeSpan</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{locker->locker_building}}</td>
				<td>{{locker->locker_floor}}</td>
				<td>{{locker_renting->rent_start_date}}</td>
				<td>{{locker_renting->rent_end_date}</td>
				<td>{{locker_renting->reservation_status}}</td>
				<td>
				@if(count($locker->locker_rent)== 0)
					No Reservations Found
				@else
					@foreach($locker->locker_rent as $locker_rent)
						<p>{{\Carbon\Carbon::parse($locker_rent->rent_start_date)->format(date(DATE_RFC822))}}-{{\Carbon\Carbon::parse($locker_rent->ret_end_date)->format(date(DATE_RFC822))}}</p>
						@endforeach
				@endif
			</td>
			<td>
				<a href="/locker/{{locker->id}}/edit">Edit</a>
			</td>
			</tr>
		</tbody>
	</div>

</div>
</body>
@endsection