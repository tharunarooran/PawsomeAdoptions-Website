<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pets_db");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Adoptees</title>
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
                    <div class="row ">

                    </div>
                </div>
            </div>


            <h2 class="text-center ">Adoptees</h2>

            <div class="container mt-4 mb-5 pt-3 pb-4 shadow bg-white">
                <h3 class="mt-2 text-center pb-3">Add Adoptee</h3>
                <form action="create_user.php" method="POST">
                    <div class="row justify-content-center">

                        <div class="col-auto">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
                        </div>
                        <div class="col-auto">
                            <input type="email" name="email" class="form-control" id="email" placeholder=" Enter Email">
                        </div>
                        <br>
                        <div class="col-auto">
                            <input type="password" name="password" class="form-control" id="password" placeholder=" Enter Password">
                        </div>
                        <div class="col-auto">
                            <input type="text" name="mobile" class="form-control" id="mobile" placeholder=" Enter Mobile No">
                        </div>

                        <div>
                            <button type="submit" name="create" class="btn btn-info">Add</button><br><br>
                        </div>
                    </div>

                </form>
            </div>
            <div class="container mt-1 mb-4 p-3 shadow bg-white">
                <table class="table">
                    <thead>
                        <tr>

                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Mobile</th>
                            <th>Delete</th>
                            <th>Update </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        //Listing datas from the database
                        $select = "SELECT * FROM users LIMIT 10";
                        $con = mysqli_connect("localhost", "root", "", "pets_db");
                        $result = $con->query($select);

                        $x = 1;

                        while ($row = $result->fetch_assoc()) : ?>
                            <tr>

                                <td><?= $row['username']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['password']; ?></td>
                                <td><?= $row['mobile_no']; ?></td>
                                <td style="width: 10%;">
                                    <form action="delete_user.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td style="width: 5%;">
                                    <form action="update.php" method="GET">
                                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                        <button type="submit" name="update" class="btn btn-primary">Edit</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
    </div>



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
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
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>

</html>