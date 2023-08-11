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

  <title>Contact Us</title>
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

  <!-- =======================================================
  * Template Name: SoftLand - v4.7.0
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
          <li><a href="pets.php">Pets</a></li>
          <li><a href="donations.php">Donations</a></li>
          <li><a class="active " href="contact.php">Contact Us</a></li>
          
          <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // User is logged in, show "Log Out" link
            echo '<li><a href="logout.php">Log Out</a></li>';
        } else {
            // User is not logged in, show "Login/Sign Up" link
            echo '<li><a href="login.php">Login/Sign Up</a></li>';
        }
        ?>
           
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

  <section class="hero-section" id="hero" style="max-height: 400px;">
      <div class="wave">

        <svg width="1920px" height="365px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Give us your Feedback</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Let us know what you think about Pawsome Adoptions!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>Feedback Form</h2>
            <p class="mb-0">Enter all fields required.</p>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4 ms-auto order-2" data-aos="fade-up">
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1">Address</strong>
                <span>65 Sparrow Mawatha, Colombo 013</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Phone</strong>
                <span>+94 72 342 6442</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Email</strong>
                <span>pawsomeadoptions@gmail.com</span>
              </li>
            </ul>
          </div>


          
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="contact.php" method="post">

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="col-md-12 form-group mt-3">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="col-md-12 form-group mt-3">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" required></textarea>
                </div>

               <div class="col-md-12 mb-3">
                  <!-- <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your feedback has been sent. Thank you!</div>-->
                </div> 

                <div class="col-md-6 form-group">
                  <input type="submit" class="btn btn-primary d-block w-100" value="Send Feedback">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];
    

    $con=new mysqli('localhost','root','','pets_db');
    if($con){
      //echo "Connection successful";
      $sql="insert into `feedback`(name,email,subject,message)values('$name','$email','$subject','$message')";
      $result=mysqli_query($con,$sql);
      if($result){
        echo "Feedback Sent!";
      }else{
        die(mysqli_error($con));
      }
    }else{
      die(mysqli_error($con));
    }

  }



    
    ?>

    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Testimonials</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Adopted my very first sheltie!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/testimonial-1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Mary Houghton</span>
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                    </p>
                    <h3>Easy and convenient</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/testimonial-2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Michel Williams</span>
                      </span>
                    </p>

                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Its Pawtastic!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/testimonial-5.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Lia Bentharn</span>
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-half"></span>
                    </p>
                    <h3>Best website ever for pet adoptions</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/testimonial-4.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Sara Dian</span>
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Adoption has never been this easy</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/testimonial-6.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Akira Saaint</span>
                      </span>
                    </p>

                  </div>
                </div>
              <!--End Testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2>May you enjoy a Purrfect adoption</h2>
          </div>
          <div class="col-md-5 text-center text-md-end">
          <img src="assets/img/cat-smile.jpg" style = "width:360px; height:290px;">
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

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
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>