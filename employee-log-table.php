
<?php
    session_start();
    if(!isset($_SESSION['email']) && !isset($_SESSION['id_no'])){
    header("Location: index.php");
    }
    $host = "localhost";
    $username = "root";
    $password = "";
    $database_name = "saddle_rides";

    //database connection 
    $conn = new mysqli($host, $username, $password, $database_name);
    
        if(isset($_GET['delete_id'])) {
            $id_no = $_GET['delete_id'];
            $query = "DELETE FROM employee_log WHERE id_no = '$id_no'";

            $data = mysqli_query($conn, $query);

            if ($data){
                echo "<font color = 'green'>Record deleted!";
            }else{
                echo "<font color = 'red'>Failed to delete record!";
            }
        }



        if(isset($_POST['edit_id'])) {
            $id_no = $_POST['edit_id'];
            $query = "UPDATE employee_log WHERE employee_log_id = '$id_no'";

            $data = mysqli_query($conn, $query);

            if ($data){
                echo "<font color = 'green'>Record Updated!";
            }else{
                echo "<font color = 'red'>Failed to update record!";
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
                            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="employee-log1.php" class="nav-link">Employee Log</a></li>
                            <li class="nav-item"><a href="horse-log1.php" class="nav-link">Horse Log</a></li>
                            <form action="clear-session.php" method="post">
                                <button type="submit" >Logout</button>
                            </form>
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- End Navigation -->
        <table>
            <tr>
                <th>Date</th>
                <th>Log ID</th>
                <th>Name</th>
                <th>ID NO</th>
                <th>Vehicle</th>
                <th>Vehicle Reg</th>
                <th>Time Out</th>
                <th>Destination</th>
                <th>Time In</th>
                <th>Operation</th>
            </tr>
            <?php 
                $conn = mysqli_connect("localhost", "root", "", "saddle_rides");
                $query = "SELECT date, employee_log_id, employee_name, id_no, vehicle_option, vehicle_reg, time_out, dest_purp, time_in FROM employee_log";
                $results = $conn->query($query);

                if ($results->num_rows > 0){
                    while ($row = $results->fetch_assoc()){
                        echo "<tr><td>" . $row["date"] . "</td><td>" .  $row["employee_log_id"] . "</td><td>" .  $row["employee_name"] . "</td><td>" . $row["id_no"] . "</td><td>" .  $row["vehicle_option"] . "</td><td>" .  $row["vehicle_reg"] . "</td><td>" .  $row["time_out"] ."</td><td>" .  $row["dest_purp"] . "</td><td>" .  $row["time_in"] . "</td><td> <a href='/personal-project/Webtech-personal-project/new-employee-log.php?id=". $row["employee_log_id"] ."'><button type = 'button' class = 'btn btn-Warning editbtn'>Edit</button></a><button type = 'button' class = 'btn btn-danger deletebtn'>DELETE</td></tr>";
                    }
                }else{
                    echo "No Results";
                }
                $conn->close();
            ?>
        </table>
        <!----Delete Popup Modal (Bootstrap) ---> 
        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                        <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="horse-table.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" value="" name= "delete_id" id="delete_id">
                            <h4>Do you want to delete this data?</h4>
                            </div>
                        <div class="modal-footer">
                            <button type="button" id="closeModalBtn" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                            <button type="submit" name="deletedata" class="btn btn-primary">YES!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
        <script>
            $(document).ready(function(){
                $('.deletebtn').on('click', function(){
                    $('#deletemodal').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function(){
                        return (this).innerHTML;
                        // console.log((this).innerHTML);
                    }).get();
                    
                    console.log(data);

                    $('#delete_id').val(data[1]);
                });

                $('#closeModalBtn').on('click', function(){
                    $('#deletemodal').modal('hide');
                });
                
            });
        </script>


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