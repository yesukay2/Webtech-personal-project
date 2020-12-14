<?php 
    if (isset($_POST["log"])){
        $horse_id = $_POST["horse-id"];
        $client_name = $_POST["client-name"];
        $client_id = $_POST["client-id"];
        $date = $_POST["date"];
        $vehicle_reg = $_POST["vehicle-reg"];
        $return_date = $_POST["return-date"];
        $returned_date = $_POST["returned-date"];
       

        $host = "localhost";
        $username = "root";
        $password = "";
        $database_name = "saddle_rides";
    
        //database connection 
        $conn = new mysqli($host, $username, $password, $database_name);

        // check connection
        
        if(mysqli_connect_error()) {
            die('Connection error ('. mysqli_connect_errno().')');
        }else{
            $horse_log_id_from_get = $_POST["horse_log_id"];
            $sql_query  = "UPDATE horse_log SET horse_id = '$horse_id', client_name = '$client_name', client_id = '$client_id', date = '$date', vehicle_reg = '$vehicle_reg', return_date = '$return_date', returned_date = '$returned_date' WHERE horse_log_id = '$horse_log_id_from_get'";

            if ($conn->query($sql_query)){
                //echo "Logged Succesfully";
            }else{
                echo "Error: " . $sql_query . "" . mysqli_error($conn);
            }
            mysqli_close($conn); //close connection
        }
        header("Location: horse-log-table.php?status=true");
    }
?> 