<?php

$con = mysqli_connect("localhost", "root", "", "pets_db");

//delete the data from database
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $deleting = "DELETE FROM users WHERE id='$id' ";
    $query_run = mysqli_query($con, $deleting);
    
    $con->close();

   header("location: users.php");
}

