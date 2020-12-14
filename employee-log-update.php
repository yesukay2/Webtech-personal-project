<?php 
    if (isset($_POST["log"])){
        $date = $_POST["date"];
        $employee_name = $_POST["employee-name"];
        $id_no = $_POST["id-no"];
        $vehicle_option = $_POST["statusradio"];
        $vehicle_reg = $_POST["vehicle-reg"];
        $time_out = $_POST["time-out"];
        $dest_purp = $_POST["destination&purpose"];
        $time_in = $_POST["time-in"];

       

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
            $employee_log_id_from_get = $_POST["employee_log_id"];
            $sql_query  = "UPDATE employee_log SET date = '$date', employee_name = '$employee_name', id_no = '$id_no', vehicle_option = '$vehicle_option', vehicle_reg = '$vehicle_reg', time_out = '$time_out', dest_purp = '$dest_purp', time_in = '$time_in' WHERE employee_log_id = '$employee_log_id_from_get'";

            if ($conn->query($sql_query)){
                //echo "Logged Succesfully";
                header("Location: employee-log-table.php?status=true");
            }else{
                echo "Error: " . $sql_query . "" . mysqli_error($conn);
            }
            mysqli_close($conn); //close connection
        }
        header("Location: employee-log-table.php?status=true");
    }
?> 