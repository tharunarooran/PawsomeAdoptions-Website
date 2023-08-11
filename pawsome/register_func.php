<?php

//connecting to database
$con = mysqli_connect("localhost", "root", "", "pets_db");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

//inserting data to the database
$insert = "INSERT INTO `users`(`id`, `username`, `email`, `password`, `mobile_no`) VALUES (null,'$username', '$email', '$hashedPassword', '$mobile')";
mysqli_query($con, $insert);



header("location: login.php");











