<?php
session_start();
$error = array();

require "mail.php";

$con = mysqli_connect("localhost", "root", "", "pets_db");

$mode = "enter_email";
if(isset($_GET['mode'])){
    $mode = $_GET['mode'];
}

//something is posted
if(count($_POST) > 0){

    switch ($mode) {
        case 'enter_email':
            //code...
            $email = $_POST['email'];
            //validate email
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $error[] = "Please enter a valid email";
            }elseif(!valid_email($email)){
                $error[] = "That email was not found!";
            }else{

                $_SESSION['forgot']['email'] = $email;
                send_email($email);
                header("Location: forgot_password.php?mode=enter_code");
                die;
            }
            break;
        
        case 'enter_code':
            //code...
            $code = $_POST['code'];
            $result = is_code_correct($code);

            if($result == "The code is correct"){

                $_SESSION['forgot']['code'] = $code;
                header("Location: forgot_password.php?mode=enter_password");
            die;
            }else{
                $error[] = $result;
            }
            break;
            
        case 'enter_password':
            //code...
            $password = $_POST['password'];
            $password2 = $_POST['password2'];

            if($password !== $password2){
                $error[] = "Passwords do not match";
            }elseif(!isset($_SESSION['forgot']['email']) || !isset($_SESSION['forgot']['code'])){
                header("Location: forgot_password.php");
                die;
            }else{
                save_password($password);
             if(isset($_SESSION['forgot'])){
                unset($_SESSION['forgot']);
             }

             header("Location: login.php");   
             die; 
            }
            break;
                    
        default:
        //code...
        break;
    }
}

    function send_email($email){
        global $con;

        $expire = time() + (60 * 1);
        $code = rand(10000,99999);
        $email = addslashes($email);

        $query = "insert into codes (email,code,expire) value ('$email','$code','$expire')";
        mysqli_query($con,$query);

        //send email here
        send_mail($email,'Password reset', "Your code is " . $code);
    }

    function save_password($password){
        global $con;
        $password =  password_hash($password, PASSWORD_BCRYPT);
        $email = addslashes($_SESSION['forgot']['email']);

        $query = "update users set password = '$password' where email = '$email' limit 1";
        mysqli_query($con,$query);

    }

    function valid_email($email){

        global $con;
        $email = addslashes($email);

        $query = "select * from users where email = '$email' limit 1";
        $result = mysqli_query($con,$query);
        if($result){
            if(mysqli_num_rows($result) > 0)
            {
                return true;     
            }
                   
         }
         return false;
                
    }

    function is_code_correct($code){
        global $con;
        
        $code = addslashes($code);
        $expire = time();
        $email = addslashes($_SESSION['forgot']['email']);

        $query = "select * from codes where code = '$code' && email = '$email' order by id desc limit 1";
        $result = mysqli_query($con,$query);
        if($result){
            if(mysqli_num_rows($result) > 0)
            {
                $row = mysqli_fetch_assoc($result);
                if($row['expire'] > $expire){

                     return "The code is correct";
                }else{
                    return "The code is expired";
                }
            }else{
                return "The code is incorrect";
            }
        }

        return "The code is incorrect";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset password</title>

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
         
         <?php
          
          switch ($mode) {
            case 'enter_email':
                //code...
            ?>    
                <form method="POST" action="forgot_password.php?mode=enter_email">
            <h3 class="py-3 text-center">Reset Password</h3>
    
            <div class="row justify-content-center pb-4">
                <div class="col-auto" style="font-size:1.2rem;">Enter your email<br><br>
                     <span style="font-size: 12px; color:red;">
                         <?php
                           foreach ($error as $err) {
                            //code..
                            echo $err . "<br>";
                           }
                         ?>
                     </span>

                    <input type="text" name="email" class="form-control" style="width: 40vh;" placeholder="Email" required>
                </div>
            </div>
            <div class="row justify-content-center pb-3">
                <div class="col-auto ">
                <br>

                    <span>
                        <button type="submit" onclick= "function" class="btn btn-primary">Next</button>
                    </span>
                </div>
            </div>

            </div>
           </form>
           <?php
                break;
            
            case 'enter_code':
                //code...
                ?>    
                <form method="POST" action="forgot_password.php?mode=enter_code">
            <h3 class="py-3 text-center">Reset Password</h3> 
            <div class="row justify-content-center pb-4">
                <div class="col-auto" style="font-size:1.2rem;">Enter the code sent to your email<br>
                <span style="font-size: 12px; color:red;">
                         <?php
                           foreach ($error as $err) {
                            //code..
                            echo $err . "<br>";
                           }
                         ?>
                     </span>
                    <input type="text" name="code" class="form-control" style="width: 40vh;" placeholder="code" required>
                </div>
            </div>
            <div class="row justify-content-center pb-3">
                <div class="col-auto ">
                  <br>

                    <span>
                        <button type="submit" style="float:right;" class="btn btn-primary">Next</button>
                        <button a href="forgot_password.php" style="float:left; margin-right: 93px;" class="btn btn-primary">Resend Code</button>
                    </span>
                </div>
            </div>

            </div>
           </form>
           <?php
                break;
                
            case 'enter_password':
                //code...
                ?>    
                <form method="POST" action="forgot_password.php?mode=enter_password">
            <h3 class="py-3 text-center">Reset Password</h3>
            <div class="row justify-content-center pb-4">
                <div class="col-auto" style="font-size:1.2rem;">Enter your new password<br><br>
                <span style="font-size: 12px; color:red;">

                         <?php
                           foreach ($error as $err) {
                            //code..
                            echo $err . "<br>";
                           }
                         ?>
                     </span>
                    <input type="password" name="password" class="form-control" style="width: 40vh;" placeholder="Password" required><br>
                    <input type="password" name="password2" class="form-control" style="width: 40vh;" placeholder="Retype Password" required>
                </div>
            </div>
            <div class="row justify-content-center pb-3">
                <div class="col-auto ">
                <br>

                    <span>
                        <button type="submit" a href="login.php" style="float:right;" class="btn btn-primary">Next</button>
                        <button a href="forgot_password.php" style="float:left; margin-right:65px;" class="btn btn-primary">Resend Code</button>
                    </span>
                </div>
            </div>

            </div>
           </form>
           <?php
                break;
                        
            default:
            //code...
            break;
        }

         ?>

        
    <script>
        function myFunction() {
            location = "password_process.php";
        }
    </script>

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