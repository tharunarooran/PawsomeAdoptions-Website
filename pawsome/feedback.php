<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pets_db");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Forms</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <!--Side Menu-->
        <?php include_once './includes/side_menu.php' ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div>

                                

                            </div>
                        </div>
                    </div>
                </div>


                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                            <!-- ./col -->
                          

                 </div>

                </section>

<h2>Feedback</h2>

                <table class="table text-center">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Delete</th>

            </tr>

            <?php
            $conn = mysqli_connect("localhost","root","","pets_db");
            $sql2 = "SELECT*FROM `feedback` WHERE 1";
            $result2 = mysqli_query($conn, $sql2);
            while($fetch = mysqli_fetch_assoc($result2))
            {
                echo "";

                ?>

                <tr>
                    <td><?php echo $fetch['id'] ?></td>
                    <td><?php echo $fetch['name'] ?></td>
                    <td><?php echo $fetch['email'] ?></td>
                    <td><?php echo $fetch['subject'] ?></td>
                    <td><?php echo $fetch['message']?></td>
                    <td><a href="delete_feed.php?id=<?php echo $fetch['id'] ?>" class="btn btn-outline-danger">Delete</a></td>
                </tr>



                <?php
                "";
            } 

            ?>
        
        