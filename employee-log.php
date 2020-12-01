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
            $sql_query  = "INSERT INTO employee_log (date,  employee_name, id_no, vehicle_option, vehicle_reg, time_out, dest_purp, time_in) 
            VALUES ('$date', '$employee_name','$id_no', '$vehicle_option', '$vehicle_reg', '$time_out', '$dest_purp', '$time_in')";

            if ($conn->query($sql_query)){
                echo " Logged Succesfully";
            }else{
                echo "Error: " . $sql_query . "" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?> 