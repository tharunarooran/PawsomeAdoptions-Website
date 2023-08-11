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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet"  href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel = "icon" href = "assets/img/logo.png" type = "image/x-icon">
    
    <title>Upload Form</title>

</head>
<body>
<div class="alert alert-secondary" role="alert" style="background: linear-gradient(to right, #588040 0%, #a8d823 100%);">
    <h4 class="text-center" style="color:#fff">Download Application Form<a href="index.php"></h4>
</div>
<div class="h5-center" style="text-align:center;">
   <h5>Click on the logo below to download the Application form.</h5>
   <p class="upload-text" style="color:#000;">After filling the form please upload it.</p>
   <a href="Pawsome_Adoptions_Form.pdf" download><img src="assets/img/logo.png"></a>
</div><br>

<div class="alert alert-secondary" role="alert" style="background: linear-gradient(to right, #588040 0%, #a8d823 100%);">
    <h4 class="text-center" style="color:#fff">Upload Application Form</h4>
</div>
<div class="h5-center" style="text-align:center;">
    <h5>After the file is uploaded. Please click on the Home image to exit.</h5>
    <div class="container col-12 m-5">
        <div class="col-6 m-auto">

        <?php
if(isset($_POST['btn_img']))
{
    $con = mysqli_connect("localhost","root","","pets_db");

    $filename = $_FILES["choosefile"]["name"];
    $tempfile = $_FILES["choosefile"]["tmp_name"];
    $folder = "pdf/".$filename;
    $sql = "INSERT INTO `pdfs`(`pdf`)VALUES('$filename')";
    if($filename == "")
    {
        echo 
        "
        <div class='alert alert-danger' role='alert'>
            <h4 class='text-center'>Blank not Allowed</h4>
        </div>
        ";
    }else{
        $result = mysqli_query($con, $sql);
        move_uploaded_file($tempfile, $folder);

        // Close the PHP block here and display the message in the HTML content
        ?>
        <div class='alert alert-success' role='alert'>
            <h4 class='text-center'>Application uploaded</h4>
        </div>
        <?php

        // Close the PHP block and use JavaScript to redirect after 2 seconds
        ?>
        <script>
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 2000); // 2000 milliseconds = 2 seconds
        </script>
        <?php

        exit; // ensure no further processing if we've already redirected.
    }
}
?>
        <div class="col-6 m-auto">
            <form action="aforms.php" method="post" class="form-control" enctype="multipart/form-data">
                <input type="file" class="form-control" name="choosefile" id="">
                <div class="d-flex justify-content-center">
                    <button type="submit" name="btn_img" class="btn btn-outline-success m-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- With this modification, the "Application uploaded" message will be displayed before the user is redirected to the index.php page after a 2-second delay.-->

</body>
</html>