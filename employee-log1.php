<?php
if(isset($_GET['status'])) {

	$status = $_GET['status'];

	if($status == "true"){
		echo 'Successfully Logged';
	}
	
}

?>

<!DOCTYPE html>
<html>

    <head>
        <script src="script.js"></script>
        <title>Saddle Rides Co. Ltd</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                            <li class="nav-item"><a href="index.html" class="nav-link active">Home</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Sign Up</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Employee Log</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Horse Log</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- End Navigation -->
        <table>
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90 p-l-50 p-r-50">
                <form class="login100-form flex-sb flex-w" action="employee-log.php" method="post">
                    <span class="login100-form-title">
                        <a href="">
                            <i class="fas fa-walking"></i>
                        </a>
                    </span>
                    <div class="wrap-input100 m-b-16">
                        <input class="input100" type="date" name="date" placeholder="Date" required>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 m-b-16">
                        <input class="input100" type="text" name="employee-name" placeholder="Employee Name" required>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 m-b-16">
                        <input class="input100" type="text" name="id-no" placeholder="ID No." required>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="radio">
                        <div><label><em><strong>Vehicle</strong></em></label></div>
                        <div>
                            <input class="form-check-input" type="radio" name="statusradio" id="yes" onclick="vehiclereg(1)"
                                value="yes" unchecked>
                            <label class="form-check-label" id="yeslabel" for="yes">
                                Yes
                            </label>
                        </div>
                        <div>
                            <input class="form-check-input" type="radio" name="statusradio" id="no" onclick="vehiclereg(0)"
                                value="no" unchecked>
                            <label class="form-check-label" id="nolabel" for="no">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="wrap-input100 m-b-16"  id="vehiclereg" style="display: none;">
                        <input class="input100" type="text" name="vehicle-reg" id="vehicle-reg" placeholder="Vehicle Registration No.">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 m-b-16">
                        <input class="input100" type="time" name="time-out" placeholder="Time Out" required>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 m-b-16">
                        <input class="input100" type="text" name="destination&purpose" placeholder="Destination & Purpose" required>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 m-b-16">
                        <input class="input100" type="time" name="time-in" placeholder="Time In" required>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-17">
                        <div class="w-full beforeNone text-center">
                            <button type="submit" class="nv-login-submit login100-form-btn" value="submit" name="log">Log</button>
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