<?php
session_start();

// Check if the user is logged in
$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;

// If the user is not logged in, show them a link to the login page
if (!$logged_in) {
    
} else {
    
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cats</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel = "icon" href = "assets/img/logo.png" type = "image/x-icon">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1><a href="index.html"><img src="assets/img/logo.png"></a></h1>
            </div>

            <nav id="navbar" class="navbar">
            <h2 data-aos="fade-right">

            <?php
            if ($logged_in) {
             echo "Welcome, " . $_SESSION['username'];
            } else {

            };
            ?>
                </h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a class="active " href="pets.php">Pets</a></li>
                    <li><a href="donations.php">Donations</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    
          <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // User is logged in, show "Log Out" link
            echo '<li><a href="logout.php">Log Out</a></li>';
        } else {
            // User is not logged in, show "Login/Sign Up" link
            echo '<li><a href="login.php">Login/Sign Up</a></li>';
        }
        ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Species <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="dogs.php">Dogs</a></li>
                            <li><a href="cats.php">Cats</a></li>
                            <li><a href="pets.php">All Pets</a></li>
                        </ul>
                    </li>
                    <li class="input-group formoutline mx-3" style="width: 30vh;">
                        <form method="POST" action="search.php">
                            <div class="input-group">
                                <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Pets" required>
                                <span class="input-group-btn" id="searchBtn" style="display:none;">
                                    <button type="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i> </button>
                                </span>
                            </div>
                        </form>

                        <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Pets" title="Type the Name"> -->
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero" style="max-height: 400px;">

        <div class="wave">

            <svg width="100%" height="465px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-12 text-center mb-5">
                            <h1 data-aos="fade-right">Cats</h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Our Cute Little Lions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <div class="container py-5">
        <div class="row mt-4">

            <?php

            //Listing datas from the database
            $select = "SELECT * FROM pets where spec_id = 2 ";
            $con = mysqli_connect("localhost", "root", "", "pets_db");
            $result = $con->query($select);

            $x = 1;

            while ($row = $result->fetch_assoc()) : ?>
                <div class="col-md-3" id="myUl">
                    <div class="card shadow p-3 mb-5 bg-white">
                        <div class="card-body">
                            <img src="pets_img/<?php echo $row['image'] ?>" alt="" class="card-img-top mb-3" style="height: 220px;">
                            <h3 class="card-title text-center mb-3"><?php echo $row['petname'] ?></h3>
                            <h4 class="card-title text-center mb-3"><?php echo $row['breed'] ?></h4>

                            <p class="card-text text-center">
                                <?php echo $row['description'] ?>
                            </p>
                            <div class="text-center">
                                <a href="aforms.php" class="btn btn-dark btn-sm"> Adopt Me</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    </div>


    <!-- ======= Footer ======= -->
    <footer class="footer bg-light" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <p class="social">
                        <a href="#"><span class="bi bi-twitter"></span></a>
                        <a href="#"><span class="bi bi-facebook"></span></a>
                        <a href="#"><span class="bi bi-instagram"></span></a>
                        <a href="#"><span class="bi bi-linkedin"></span></a>
                    </p>
                </div>
                <div class="col-md-7 ms-auto">
                    <div class="row site-section pt-0">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Navigation</h3>
                            <ul class="list-unstyled">
                                <li><a href="pets.php">Pets</a></li>
                                <li><a href="donations.php">Donations</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="dotted">

            <div class="row justify-content-center text-center   pt-3">
                <div class="col-md-7">
                    <p class="copyright"> 2023 &copy; Reserved to <a href="#">Pixel Punks</a>
                </div>
            </div>
    </footer>







    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


</body>

</html>