
<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $database_name = "saddle_rides";

 //database connection 
 $conn = new mysqli($host, $username, $password, $database_name);
 
    if(isset($_POST['delete_id'])) {
        $id_no = $_POST['delete_id'];
        $query = "DELETE FROM employees WHERE id_no = '$id_no'";

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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
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
                <th>ID No</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Operation</th>
            </tr>
            <?php 
                $conn = mysqli_connect("localhost", "root", "", "saddle_rides");
                $query = "SELECT id_no, firstname, lastname, email, mobile, address FROM employees";
                $results = $conn->query($query);

                if ($results->num_rows > 0){
                    while ($row = $results->fetch_assoc()){
                        echo "<tr><td>" . $row["id_no"] . "</td><td>" .  $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" .  $row["email"] . "</td><td>" .  $row["mobile"] . "</td><td>" .  $row["address"] . "</td><td> <button type = 'button' class = 'btn btn-danger deletebtn'>DELETE</td></tr>";
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

                    <form action="employee-table.php" method="POST">
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

                    $('#delete_id').val(data[0]);
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