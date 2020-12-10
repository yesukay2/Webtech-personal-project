
<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $database_name = "saddle_rides";

 //database connection 
 $conn = new mysqli($host, $username, $password, $database_name);
 
    if(isset($_GET['id_no'])) {
        $id_no = $_GET['id_no'];
        $query = "DELETE FROM employees WHERE id_no = '$id_no'";

        $data = mysqli_query($conn, $query);

        if ($data){
            echo "<font color = 'green'>Record deleted!";
        }else{
            echo "<font color = 'red'>Failed to delete record!";
        }
    }
?>

<html>
    <head>
        <style type="text/css">
            table{
                border-collapse: collapse;
                width: 100%;
                color:  rgba(0,0,0,1);
                font-family: monospace;
                font-size: 15px;
                text-align: left;
            }

            th{
                background-color:  rgba(0,0,0,1);
                color: white;
            }

            tr:nth-child(even){
                background-color: #7F7A79;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>ID No</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Operation</th>
            </tr>
            <?php 
                $conn = mysqli_connect("localhost", "root", "", "saddle_rides");
                $query = "SELECT id_no, firstname, lastname, email, mobile, address FROM employees";
                $results = $conn->query($query);

                if ($results->num_rows > 0){
                    while ($row = $results->fetch_assoc()){
                        echo "<tr><td>" . $row["id_no"] . "</td><td>" .  $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" .  $row["email"] . "</td><td>" .  $row["mobile"] . "</td><td>" .  $row["address"] . "</td><td> <a href = 'employee-table.php?id_no=$row[id_no]'>Delete</td></tr>";
                    }
                }else{
                    echo "No Results";
                }
                $conn->close();
            ?>
        </table>
    </body>
</html>