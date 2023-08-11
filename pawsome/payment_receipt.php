<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pets_db");
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel = "icon" href = "assets/img/logo.png" type = "image/x-icon">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to bottom, #588040, #a8d823 ); /* Green gradient background */
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .jumbotron {
            box-shadow: 4px 4px 4px #000000;
            padding: 20px;
            background-color: white; /* Setting the background to white for the jumbotron */
            border: 1px solid #000; /* Adding a border around the jumbotron to create a box */
            position: relative; /* Adding relative positioning to the jumbotron */
        }

        .jumbotron h2 {
            text-align: center;
        }

        .jumbotron h3 {
            text-align: center;
        }

        .jumbotron p {
            text-align: center;
        }

        .btn-group {
            text-align: center;
            margin-top: 50px;
        }

        .logo-container {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .logo {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h2 class="text-center">YOUR DONATION HAS BEEN RECEIVED</h2>
                <h3 class="text-center">Thank you for your donation to Pawsome Adoptions.</br>This will certainly help us as an organization to grow and help more animals find loving shelters in the future.</h3>

                <p class="text-center">Donation: SILVER TIER</p>
                <div class="btn-group">
                    <a href="index.php" class="btn btn-lg btn-warning">CONTINUE</a>
                </div>
                <div class="logo-container">
                    <img src="assets/img/logo2.png" alt="Logo" class="logo">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
