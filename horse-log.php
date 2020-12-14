<?php 
    if (isset($_POST["log"])){
        $horse_id = $_POST["horse-id"];
        $client_name = $_POST["client-name"];
        $client_id = $_POST["client-id"];
        $date = $_POST["date"];
        $vehicle_reg = $_POST["vehicle-reg"];
        $time_out = $_POST["time-out"];
        $return_date = $_POST["return-date"];
        //$returned_date = $_POST["returned-date"];
        

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
            $sql_query  = "INSERT INTO horse_log (horse_id, client_name, client_id, date, vehicle_reg, time_out, return_date) 
            VALUES ('$horse_id', '$client_name','$client_id', '$date', '$vehicle_reg', '$time_out', '$return_date')";
            

            if ($conn->query($sql_query)){
                echo "Logged Succesfully";
            }else{
                echo "Error: " . $sql_query . "" . mysqli_error($conn);
            }
            mysqli_close($conn); //close connection
        }
        header("Location: horse-log1.php?status=true");
    }
?> 