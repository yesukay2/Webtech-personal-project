<?php 
    if (isset($_POST["login"])){
        $email = $_POST["email"];
        $id_no = $_POST["id-no"];
        $password = $_POST["password"];


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
            $sql_query  = "INSERT INTO _login (email, id_no, password) VALUES ('$email', '$id_no','$password')";

            if ($conn->query($sql_query)){
                echo " Welcome!";
            }else{
                echo "Error: " . $sql_query . "" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?> 