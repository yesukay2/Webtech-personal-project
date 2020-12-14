<?php 
session_start(); 
    if (isset($_POST["login"])){
        $email = $_POST["email"];
        $id_no = $_POST["id-no"];
        $form_password = $_POST["password"];


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
            $results = $conn->query("SELECT password1 FROM employees where email = '$email' and id_no = '$id_no'"); 
            $pass_from_db = $row['password1'];

            if ($results->num_rows > 0){
                $pass_from_db = '';
                while ($row = $results->fetch_assoc()){
                    $_SESSION['email'] = $email;
                    $_SESSION['id_no'] = $id_no;
                    
                    // echo "There's a match!";
                    
                }

                if (isset($_POST['email'], $_POST['id-no'])){
                    if (password_verify($form_password, $pass_from_db)){
                        $_SESSION['email'] = $email;
                        $_SESSION['id_no'] = $id_no;   
                        exit; 
                    }else{
                        $_SESSION=[];
                        session_destroy();
                        echo "Login Failed";
                    }
                }   
                
            }else{
                $_SESSION=[];
                session_destroy();
                echo "Login Failed";
            }

            if ($conn->query($sql_query)){
                echo " Welcome!";
            }else{
                echo "Error: " . $sql_query . "" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?> 