
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
		<a class="navbar-brand" href="/">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto ">
				<li class="nav-item">
					<a class="nav-link" href="/students">Students</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/books" >Books</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/equipments" >Equipments</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/devices" >Devices</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/lockers" >Lockers</a>
				</li>

				<!--dropdown-->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Borrowed Sections
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="/borrowed_devices">Borrowed Devices</a>
						<a class="dropdown-item" href="/rental_history/books">Borrowed Books</a>
						<a class="dropdown-item" href="/borrowed_equipments">Borrowed Equipments</a>
						<a class="dropdown-item" href="/locker_rents">Locker Renting</a>
					</div>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto mt-2 mt-md-0">
				<div class="btn-group dropleft">
					
					<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Account
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


	<div id = "wrapper">
		<main role="main" class="container">
			<div class="jumbotron text-center" style="background-color: white">
				<h1 class="card-title h1">UC Borrowing System</h1>
				<p class="blue-text my-4 font-weight-bold">a requirement for web information system</p>

				<center>
					<div class="col-md-6">
						<a href="/register" class="btn btn-primary">Register</a>
						<a href="/register" class="btn btn-primary">Login</a>
					</div>
				</center>

			</main>
			
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

	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<style>
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