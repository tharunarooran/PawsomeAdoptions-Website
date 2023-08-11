<?php
$con = mysqli_connect("localhost", "root", "", "pets_db");

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];




    $update = "UPDATE `users` SET `username`='$username',`email`='$email',`password`='$password',`mobile_no`='$mobile' WHERE `id`= '$id'";

    $result = $con->query($update);

    header("location: users.php");
}






if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $update = "SELECT * FROM `users` WHERE `id` = '$id' ";

    $result = $con->query($update);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $username = $row['username'];
            $email = $row['email'];
            $password = $row['password'];
            $mobile = $row['mobile_no'];
            $id = $row['id'];
        }
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <title>Update User</title>
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




                    <div class="container mt-5 mb-5 pt-3 pb-4 shadow bg-white" style="width: 80vh;">
                        <h3 class="mt-2 text-center pb-3 ">Update Adoptees</h3>
                        <form method="POST">
                            <div class="row justify-content-center pb-3">
                                <div class="col-auto">
                                    <input type="text" name="username" class="form-control" id="username" value="<?= $username ?>" placeholder="Enter Username">
                                </div>
                            </div>
                            <div class="row justify-content-center pb-3">
                                <div class="col-auto">
                                    <input type="email" name="email" class="form-control" id="email" value="<?= $email ?>" placeholder=" Enter Email">
                                </div>
                            </div>
                            <div class="row justify-content-center pb-3">
                                <div class="col-auto">
                                    <input type="text" name="password" class="form-control" id="password" value="<?= $password ?>" placeholder=" Enter Password">
                                </div>
                            </div>
                            <div class="row justify-content-center pb-3">
                                <div class="col-auto">
                                    <input type="text" name="mobile" class="form-control" id="mobile" value="<?= $mobile ?>" placeholder=" Enter Mobile No">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div>
                                    <button type="submit" name="update" value="update" class="btn btn-info">Update</button>

                                    <a href="users.php" class="btn btn-secondary">Users</a>
                                </div>
                            </div>

                        </form>
                    </div>
        </body>

        </html>



<?php
    } else {
        #value is not valid
    }
}
