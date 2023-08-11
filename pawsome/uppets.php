<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pets_db");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pets</title>

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

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="container mt-5 mb-5 pt-3 pb-4 shadow bg-white" style="width: 80vh;">
                <h3 class="mt-2 text-center pb-3 ">Upload Pets</h3>
                <form action="pet_config.php" method="POST" enctype="multipart/form-data">
                    <div class="row justify-content-center pb-3">
                        <div class="col-auto">
                            <input type="text" name="petname" class="form-control" style="width: 31vh;" placeholder="Pet Name">
                        </div>
                    </div>
                    <div class="row justify-content-center pb-3">
                        <div class="col-auto">
                            <input type="text" name="breed" class="form-control" style="width: 31vh;" placeholder=" Breed">
                        </div>
                    </div>
                    <div class="row justify-content-center pb-3">
                        <div class="col-auto ">
                            <textarea class="form-control" name="description" style="width: 31vh;" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center pb-3">
                        <div class="col-auto">
                            <input type="text" name="spec_id" class="form-control" style="width: 31vh;" placeholder=" Species">
                        </div>
                    </div>
                    <div class="row justify-content-center pb-3">
                        <div class="col-auto text-center">
                            <input type="file" name="image" style="width: 31vh;">
                        </div>
                    </div>



                    <div class="row justify-content-center py-2">
                        <div>
                            <button type="submit" name="upload" value="upload" class="btn btn-info">Upload</button>

                            
                        </div>
                    </div>

                </form>
            </div>


            <div class="container mt-1 mb-4 p-3 shadow bg-white">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Pet Name</th>
                            <th>Breed</th>
                            <th>Description</th>
                            <th>Species</th>
                            <th>Delete</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        //Listing datas from the database
                        $select = "SELECT * FROM pets LIMIT 500";
                        $con = mysqli_connect("localhost", "root", "", "pets_db");
                        $result = $con->query($select);

                        $x = 1;

                        while ($row = $result->fetch_assoc()) : ?>

                            <tr>
                                <td><?= "<img src='pets_img/" . $row['image'] . "'style=width:100px; height:100px;/>"; ?></td>
                                <td><?php echo $row['petname']; ?></td>
                                <td><?php echo $row['breed']; ?></td>
                                
                                <td style="width: 45%;"><?php echo $row['description']; ?></td>
                                <td><?php echo $row['spec_id']; ?></td>
                                <td style="width: 10%;">
                                    <form action="delete_pets.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>




            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                    </div>

                    <div class="row">

            </section>

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
</body>

</html>