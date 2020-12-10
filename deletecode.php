<?php 

   
    if (isset($_POST['delete_id'])){
        $id = $_POST['delete_id'];

        echo($id);

        $conn = mysqli_connect("localhost", "root", "", "saddle_rides");
        //$query = "SELECT breed, color, gender, id_no FROM horses";
        $query = "DELETE FROM horses WHERE id_no='$id'";
        $results = $conn->query($query);
        
        $query_run = mysqli_query($conn, $query);
        echo $query_run;

        if($query_run){
            echo '<script> alert("Data Deleted");</script>';
            header("location:horse-table.php");
        }else{
            echo'<script> alert("Unable to delete data");</script>';
        }
    }

?>