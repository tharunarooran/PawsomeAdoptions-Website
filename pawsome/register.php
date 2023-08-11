<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pets_db");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Register</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

    <link rel = "icon" href = "assets/img/logo.png" type = "image/x-icon">
    
</head>

<body class="content-wrapper">

    <div class="container  pt-3 pb-4 shadow bg-white" style="width: 60vh; margin-top: 10rem;">

        <form action="register_func.php" method="POST">
            <h3 class="py-3 text-center">User Register</h3>
            <div class="row justify-content-center pb-4">
                <div class="col-auto">
                    <input type="text" name="username" class="form-control" style="width: 40vh;" placeholder="Enter Username">
                </div>
            </div>
            <div class="row justify-content-center pb-4">
                <div class="col-auto">
                    <input type="text" name="email" class="form-control" style="width: 40vh;" placeholder="Enter Email">
                </div>
            </div>
            <div class="row justify-content-center pb-3">
                <div class="col-auto ">
                    <input type="password" name="password" class="form-control " style="width: 40vh;" placeholder=" Password"><br>
                    <div class="row justify-content-center pb-4">
                        <div class="col-auto">
                            <input type="text" name="mobile" class="form-control" style="width: 40vh;" placeholder="Enter Mobile No">
                        </div>
                    </div>
                    <span>
                        <button type="submit" name="create"  class="btn btn-primary">Signup</button>
                        <a href="login.php" style="margin-left: 0.5rem;">Login</a>
                    </span>
                </div>
            </div>
    </div>
    </form>



    <!-- Control Sidebar -->
    //<aside class="control-sidebar control-sidebar-dark">
       <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
   <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>

    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>