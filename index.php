<?php
if(isset($_GET['status'])) {

	$status = $_GET['status'];

	if($status == "true"){
		echo 'Profile Created Successfully';
	}
	
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Saddle Rides Co. Ltd</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

	<!-- Top Bar -->
	<div class="top-bar">
		<div class="container">
			<div class="col-12 text-right">
				<p><a href="IT Support: +233558649054">IT Support: +233558649054</a></p>
			</div>
		</div>
	</div>
	<!-- End Top Bar -->


	<!-- Navigation -->
	<nav class="navbar bg-dark navbar-dark navbar-expand-lg">
		<div class="container">
			<a href="index.html" class="navbar-brand"><img src="img/logo.png" alt="Logo" title="Logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="sign-up1.php" class="nav-link">Sign Up</a></li>
					<li class="nav-item"><a href="add-horse1.php" class="nav-link">Add Horse</a></li>
					<li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
					<li class="nav-item"><a href="employee-log1.php" class="nav-link">Employee Log</a></li>
					<li class="nav-item"><a href="horse-log1.php" class="nav-link">Horse Log</a></li>
				</ul>

			</div>
		</div>
	</nav>
	<!-- End Navigation -->


	<!-- Image Carousel -->
	<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="6500">

		<!-- Carousel Content -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/carousel/1.jpg" alt="" class="w-100">
				<div class="carousel-caption">
					<div class="container">
					<div class="row justify-content-center">
						<div class="col-8 bg-custom d-none d-md-block py-3 px-0">
							<h1>Saddle Rides Co. Ltd</h1>
							<div class="border-top border-primary w-50 mx-auto my-3"></div>
							<a href="login.html" class="btn btn-danger btn-lg mr-2">Login</a>
						</div>
					</div>
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<img src="img/carousel/2.jpg" alt="" class="w-100">
				<div class="carousel-caption">
					<div class="container">
					<div class="row justify-content-center">
						<div class="col-10 bg-custom d-none d-lg-block py-3 px-0">
							<h1>Customer Satisfaction</h1>
							<div class="border-top border-primary w-50 mx-auto my-3"></div>
							<a href="login.html" class="btn btn-danger btn-lg mr-2">Login</a>
						</div>
					</div>
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<img src="img/carousel/3.jpg" alt="" class="w-100">
				<div class="carousel-caption">
					<div class="container">
					<div class="row justify-content-center">
						<div class="col-5 bg-custom d-none d-lg-block py-3 px-0">
							<h1>Love for Horses</h1>
							<div class="border-top border-primary w-50 mx-auto my-3"></div>
							<a href="login.html" class="btn btn-danger btn-lg mr-2">Login</a>
						</div>
					</div>
					</div>
				</div>
			</div>
 
		</div>	
		<!-- End Carousel Content -->


		<!-- Previous & Next Buttons -->
		<a href="#carousel" class="carousel-control-prev" role="button" 
			data-slide="prev">
			<span class="fas fa-chevron-left  fa-2x"></span>
		</a>

		<a href="#carousel" class="carousel-control-next" role="button" 
		data-slide="next">
		<span class="fas fa-chevron-right  fa-2x"></span>
	</a>
		<!-- End Previous & Next Buttons -->

	</div>
	<!-- End Image Carousel -->


	<!-- After carousel Heading -->
<div class="col-12 text-center mt-5">
	<h1 class="text-dark pt-4">Saddle Rides Logging System</h1>
	<div class="border-top border-primary w-50 mx-auto my-3"></div>
</div>

	<!-- Start Jumbotron -->
	<div class="jumbotron py-5 mb-o">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-lg-10 col-xl-10 my-auto">
					<h4 id="note">NOTE: Each Movement MUST Be Logged With NO EXCEPTIONS</h4>
				</div>
			</div>
		</div>
	</div>
	<!-- End Jumbotron -->


	<!-- Start Footer -->
	<footer>
		<div class="container">
			<div class="row text-light text-center py-4 justify-content-center">
				<div class="col-sm-10 col-md-8 col-lg-6">
					<img id="footerlogo" src="./img/logo.png" alt="logo">
					<p>Our core values:</p>
					<p>
						<ul class="values">
							<li>Intergrity ||</li>
							<li>Accountability ||</li>
							<li>Commitment to Customers</li>
						</ul>
					</p>
					<ul class="social pt-3">
						<li><a href="https://twitter.com/yesu_kay" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/yesu_kay/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/in/yesukumiapraku/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
						<li><a href="https://www.snapchat.com/add/yesu-kay2" target="_blank"><i class="fab fa-snapchat"></i></a></li>
					</ul>
				</div>

			</div>
		</div>
	</footer>
	<!-- End Footer -->


	<!-- Start Socket -->
<div class="socket text-light text-center py-3">
	<p>&copy; <a href="#" target="_blank">saddlerides.com</a></p>
</div>
	<!-- End Socket -->



	<!-- Script Source Files -->

	<!-- jQuery -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap 4.5 JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Font Awesome -->
	<script src="js/all.min.js"></script>

	<!-- End Script Source Files -->
</body>
</html>