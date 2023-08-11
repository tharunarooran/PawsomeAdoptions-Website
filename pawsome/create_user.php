<?php

//connecting to database
$con = mysqli_connect("localhost", "root", "", "pets_db");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];

//inserting data to the database
$insert = "INSERT INTO `users`(`id`, `username`, `email`, `password`, `mobile_no`) VALUES (null,'$username', '$email', '$password', '$mobile')";
mysqli_query($con, $insert);



header("location: users.php");











