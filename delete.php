<?php 
     $host = "localhost";
     $username = "root";
     $password = "";
     $database_name = "saddle_rides";
 
     //database connection 
     $conn = new mysqli($host, $username, $password, $database_name);

     $id_no = $_GET['id_no'];
     $query = "DELETE FROM employees WHERE id_no = '$id_no'";

     $data = mysqli_query($conn, $query);

     if ($data){
         echo "<font color = 'green'>Record deleted!";
     }else{
        echo "<font color = 'red'>Failed to delete record!";
     }
?>