<?php
include("sign-up.php");
if(isset($_GET['status'])) {

	$status = $_GET['status'];

	if($status == "true"){
		echo 'Profile Created Successfully';
	}
	
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Saddle Rides Co. Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css">
    <link rel="stylesheet" href="login.css"> 
    <script src="script.js"></script>
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
            <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
          </ul>

        </div>
      </div>
    </nav>
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90 p-l-50 p-r-50">
            <form class="login100-form flex-sb flex-w" action="sign-up1.php" onsubmit="return validate();" method="POST">
                <span class="login100-form-title">
                    <a href="">
                        <i class="fas fa-user"></i>
                    </a>
                </span>
                <div class="wrap-input100 m-b-16">
                  <input class="input100" type="text" name="firstname" placeholder="Firstname" required>
                  <span class="focus-input100"></span>
              </div>
              <div class="wrap-input100 m-b-16">
                <input class="input100" type="text" name="lastname" placeholder="Lastname" required>
                <span class="focus-input100"></span>
              </div>
                <div class="wrap-input100 m-b-16">
                    <input class="input100" type="email" name="email" placeholder="Email" required>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 m-b-16">
                  <input class="input100" type="mobile" name="mobile" placeholder="Mobile" required>
                  <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 m-b-16">
                  <input class="input100" type="text" name="address" placeholder="Address" required>
                  <span class="focus-input100"></span>
                </div>
              <div class="radio">
                <input class="form-check-input" type="radio" name="statusradio" id="employeeradio" value="employee" onclick="showpassword(1)" unchecked>
                <label class="form-check-label" for="employeeradio">
                  Employee
                </label>
              </div>
              <div class="radio">
                <input class="form-check-input" type="radio" name="statusradio" id="clientradio" value="client" onclick="showpassword(0)" unchecked>
                <label class="form-check-label" for="clientradio">
                  Client
                </label>
              </div>
              <div id="error" style="display: none;">Enter a Valid Password</div>
              <div id="error2" style="display: none;">Password Mismatch</div>
              <div class="wrap-input100 m-b-16" id="password1" style="display: none;">
                <input class="input100" type="password" name="password1" placeholder="Choose Password" id="pass1" >
                <span class="focus-input100"></span>
                <small>Password must be at least 8 characters with special characters, numbers and uppercase & lowercase letters</small>
              </div>
              <div class="wrap-input100 m-b-16" id="password2" style="display: none;">
                <input class="input100" type="password" name="password2" placeholder="Confirm Password" id="pass2">
                <span class="focus-input100"></span>
              </div>
                <div class="container-login100-form-btn m-t-17">
                    <div class="w-full beforeNone text-center">
                        <button type="submit" class="nv-login-submit login100-form-btn" name="sign-up" value="submit">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div> 


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


