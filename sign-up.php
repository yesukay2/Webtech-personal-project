<?php 
    if (isset($_POST["sign-up"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $address = $_POST["address"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];
        $statusradio = $_POST["statusradio"];


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
            $sql_query  = "INSERT INTO employees (firstname, lastname, email, mobile, address, password1, password2, statusradio)
            VALUES ('$firstname', '$lastname', '$email', '$mobile', '$address', '$password1', '$password2', '$statusradio')";

            if ($conn->query($sql_query)){
                echo " New Profile Added!";
            }else{
                echo "Error: " . "" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?> 