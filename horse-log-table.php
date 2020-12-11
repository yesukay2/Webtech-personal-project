
<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $database_name = "saddle_rides";

 //database connection 
 $conn = new mysqli($host, $username, $password, $database_name);
 
    if(isset($_GET['id_no'])) {
        $id_no = $_GET['id_no'];
        $query = "DELETE FROM horse_log WHERE id_no = '$id_no'";

        $data = mysqli_query($conn, $query);

        if ($data){
            echo "<font color = 'green'>Record deleted!";
        }else{
            echo "<font color = 'red'>Failed to delete record!";
        }
    }
?>

<html>
    <head>

        <title>Saddle Rides Co. Ltd</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css">
        <link rel="stylesheet" href="login.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- Bootstrap 4.5 CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
        <style type="text/css">
            table{
                border-collapse: collapse;
                width: 100%;
                color:  rgba(0,0,0,1);
                font-family: monospace;
                font-size: 15px;
                text-align: left;
            }

            th{
                background-color:  rgba(0,0,0,1);
                color: white;
            }

            tr:nth-child(even){
                background-color: #7F7A79;
            }
        </style>
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
            <tr>
                <th>Horse ID</th>
                <th>Client Name</th>
                <th>Client ID</th>
                <th>Date</th>
                <th>Vehicle Reg</th>
                <th>Time Out</th>
                <th>Return Date</th>
                <th>Time In</th>
                <th>Operation</th>
            </tr>
            <?php 
                $conn = mysqli_connect("localhost", "root", "", "saddle_rides");
                $query = "SELECT horse_id, client_name, client_id, date, vehicle_reg, time_out, return_date, time_in FROM horse_log";
                $results = $conn->query($query);

                if ($results->num_rows > 0){
                    while ($row = $results->fetch_assoc()){
                        echo "<tr><td>" . $row["horse_id"] . "</td><td>" .  $row["client_name"] . "</td><td>" . $row["client_id"] . "</td><td>" .  $row["date"] . "</td><td>" .  $row["vehicle_reg"] . "</td><td>" .  $row["time_out"] ."</td><td>" .  $row["return_date"] . "</td><td>" .  $row["time_in"] ."</td><td> <a href = 'horse-log-table.php?id_no=$row[client_id]'>Delete</td></tr>";
                    }
                }else{
                    echo "No Results";
                }
                $conn->close();
            ?>
        </table>

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