<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "pets_db");

$username = $_POST['username'];
$password = $_POST['password'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM users WHERE username = '$username'";
$_SESSION['logged_in'] = true;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1 && password_verify($password, $row['password'])) {
    $_SESSION['username'] = $username;
    $_SESSION['logged_in'] = true;
    header("location: index.php");
} else {

    header("location: login.php");
}
