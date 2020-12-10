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
            </tr>
            <?php 
                $conn = mysqli_connect("localhost", "root", "", "saddle_rides");
                $query = "SELECT id_no, firstname, lastname, email, mobile, address FROM clients";
                $results = $conn->query($query);

                if ($results->num_rows > 0){
                    while ($row = $results->fetch_assoc()){
                        echo "<tr><td>" . $row["id_no"] . "</td><td>" .  $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" .  $row["email"] . "</td><td>" .  $row["mobile"] . "</td><td>" .  $row["address"] . "</td><td> <a href = 'delete.php?id_no=$row[id_no]'>Delete</td></tr>";
                    }
                }else{
                    echo "No Results";
                }
                $conn->close();
            ?>
        </table>
    </body>
</html>