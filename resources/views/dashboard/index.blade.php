<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	<title>Web System</title>
</head>
<body>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
		<a class="navbar-brand" href="/dashboard">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav ml-auto mt-2 mt-md-0">
				<div class="btn-group dropleft">

					<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ auth()->user()->name }}
					</button>


					<div class="dropdown-menu">

						<a class="dropdown-item" href="/login">Login</a>
						<a class="dropdown-item" href="/">Logout</a>
						<a class="dropdown-item" href="/register">Register</a> 

					</div>
				</div>
			</ul>
		</div>
	</div>

	<div class="container">
		<br>
		<br>
		<center>
			<div class="auth-user">
				<h1 class="welcome" style="font-size: 50px"><center>Welcome, {{ auth()->user()->name }}</center></h1>
				<hr style="width: 50%">
			</div>
		</center>



		<section id="features"> 
			<div class="row">
				<!--  -->
				<div class="feature-box col-lg-4">
					<a href="/devices"><i class="icon fas fa-mobile-alt fa-2x"></i>
					<h3>Devices</h3></a>
					<p>Add a device to be borrowed.</p>
				</div>

				<!--   -->
				<div class="feature-box col-lg-4">
					<a href="/equipments"><i class="icon fas fa-basketball-ball fa-2x"></i>
					<h3>Equipments</h3></a>
					<p>Add an equipment to be borrowed.</p>
				</div>

				<!--   -->
				<div class="feature-box col-lg-4">
					<a href="/lockers"><i class="icon fas fa-key fa-2x"></i>
					<h3>Lockers</h3></a>
					<p>Add a locker to be rented.</p>
				</div>
			</div>
		</section>


		<section id="features"> 
			<div class="row">
				<div class="feature-box col-lg-6" >
					<a href="/students"><i class="icon fas fa-user fa-2x"></i>
					<h3>Students</h3></a>
					<p>Add a device to be borrowed.</p>
				</div>

				<div class="feature-box col-lg-6">
					<a href="/rental_history/books"><i class="icon fas fa-book fa-2x"></i>
					<h3>Books</h3></a>
					<p>Add a book to be borrowed.</p>
				</div>
			</div>
		</section>
	</div>

	<footer class="mainfooter" role="contentinfo">
		<div class="footer-middle">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<!--Column1-->
						<div class="footer-pad">
							<h4>Needs</h4>
							<ul class="list-unstyled">
								<li><a href="/books">Books</a></li>
								<li><a href="/equipments">Equipments</a></li>
								<li><a href="/devices">Devices</a></li>
								<li><a href="/lockers">Lockers</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<!--Column1-->
						<div class="footer-pad">
							<h4>Borrowed Sections</h4>
							<ul class="list-unstyled">
								<li><a href="/borrowed_equipments">Borrowed Devices</a></li>
								<li><a href="/rental_history/books">Borrowed Books</a></li>
								<li><a href="/borrowed_equipments">Borrowed Equipments</a></li>
								<li><a href="/locker_rents">Locker Renting</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<!--Column1-->
						<div class="footer-pad">
							<p>We are a group of students taking BSIT. A Borrowing and Renting System created by Group 4 - 3C</p>

						</div>
					</div>
				</div>


			</div>
		</div>
	</footer>
</body>
</html>


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


	#wrapper {
		margin: 3%;
	}
	.btn {
		margin:1%;
	}
	footer {
		background: #16222A;
		background: linear-gradient(59deg, #3A6073, #16222A);
		color: white;
		margin-top:100px;
	}

	footer a {
		color: #fff;
		font-size: 14px;
		transition-duration: 0.2s;
	}

	footer a:hover {
		color: #FA944B;
		text-decoration: none;
	}



	.footer-middle {
		padding-top: 2em;
		color: white;
	}

</style>

<!-- Optional JavaScript; choose one of the two! -->


<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->


<br />
<br />

