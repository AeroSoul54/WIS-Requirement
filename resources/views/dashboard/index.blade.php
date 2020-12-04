@extends('layouts.master')
@section('container')

<div class="container">
	<br>
	<br>
	<center>
		<div class="auth-user">
			<h1 class="welcome" style="font-size: 50px"><center>Welcome {{ auth()->user()->name }}</center></h1>
			<hr style="width: 50%">
		</div>
	</center>


	<section id="features"> 
		<div class="row">
			<!--  -->
			<div class="feature-box col-lg-4">
				<a href="/devices"><i class="icon fas fa-mobile-alt fa-2x"></i></a>
				<h3>Devices</h3>
				<p>Add a device to be borrowed.</p>
			</div>

			<!--   -->
			<div class="feature-box col-lg-4">
				<a href="/equipments"><i class="icon fas fa-basketball-ball fa-2x"></i></a>
				<h3>Equipments</h3>
				<p>Add an equipment to be borrowed.</p>
			</div>

			<!--   -->
			<div class="feature-box col-lg-4">
				<a href="/lockers"><i class="icon fas fa-key fa-2x"></i></a>
				<h3>Lockers</h3>
				<p>Add a locker to be rented.</p>
			</div>
		</div>
	</section>


	<section id="features"> 
		<div class="row">
			<div class="feature-box col-lg-6" >
				<a href="/students"><i class="icon fas fa-user fa-2x"></i></a>
				<h3>Students</h3>
				<p>Add a device to be borrowed.</p>
			</div>

			<div class="feature-box col-lg-6">
				<a href="/rental_history/books"><i class="icon fas fa-book fa-2x"></i></a>
				<h3>Books</h3>
				<p>Add a book to be borrowed.</p>
			</div>
		</div>
	</section>
</div>



<style type="text/css">

	.auth-user { 
		font-size: 50px;
		margin-bottom: 4%;
	}
	#features { 
		padding: 1% 15%; 
		background-color: white;
		position: relative;
		
	}

	.feature-box { 
		text-align: center; 
		padding: 2%; 
	}
	

	.icon { 
		color: green; 
		margin-bottom: 1rem;
	}

</style>
@endsection