
<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $database_name = "saddle_rides";

 //database connection 
 $conn = new mysqli($host, $username, $password, $database_name);
 
    if(isset($_POST['delete_id'])) {
        $id_no = $_POST['delete_id'];
        $query = "DELETE FROM horses WHERE id_no = '$id_no'";

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
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
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
                <th>Breed</th>
                <th>Color</th>
                <th>Gender</th>
                <th>Operation</th>
            </tr>
            <?php 
                $conn = mysqli_connect("localhost", "root", "", "saddle_rides");
                $query = "SELECT breed, color, gender, id_no FROM horses";
                $results = $conn->query($query);

                if ($results->num_rows > 0){
                    while ($row = $results->fetch_assoc()){
                        echo "<tr><td>" . $row["id_no"] . "</td><td>" .  $row["color"] . "</td><td>" . $row["gender"] . "</td><td>" .  $row["id_no"] . "</td><td> <button type = 'button' class = 'btn btn-danger deletebtn'>DELETE</td></tr>";
                    }
                }else{
                    echo "No Results";
                }
                $conn->close();
            ?>
            
        </table>

        <!----Delete Popup Modal (Bootstrap) ---> 
        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                        <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="horse-table.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" value="" name= "delete_id" id="delete_id">
                            <h4>Do you want to delete this data?</h4>
                            </div>
                        <div class="modal-footer">
                            <button type="button" id="closeModalBtn" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                            <button type="submit" name="deletedata" class="btn btn-primary">YES!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
        <script>
            $(document).ready(function(){
                $('.deletebtn').on('click', function(){
                    $('#deletemodal').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function(){
                        return (this).innerHTML;
                        // console.log((this).innerHTML);
                    }).get();
                    
                    console.log(data);

                    $('#delete_id').val(data[0]);
                });

                $('#closeModalBtn').on('click', function(){
                    $('#deletemodal').modal('hide');
                });
                
            });


            
        </script>
    </body>
</html>