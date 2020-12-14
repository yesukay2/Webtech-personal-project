<?php 
    if (isset($_POST["add"])){
        $breed = $_POST["breed"];
        $color = $_POST["color"];
        $gender = $_POST["gender"];


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
            $sql_query  = "INSERT INTO horses (breed, gender, color)
            VALUES ('$breed', '$gender', '$color')";

            if ($conn->query($sql_query)){
                echo " New Horse Added!";
            }else{
                echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        header("Location: add-horse1.php?status=true");
    }
?> 