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

  <title>Pawsome Adoptions</title>
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
  <link  rel="stylesheet"  href="assets/css/style.css?v=<?php echo time(); ?>">
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
       <!-- Other navigation items -->
        <li><a class="active " href="index.php">Home</a></li>
          <li><a href="pets.php">Pets</a></li>
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
        <!-- Add other navigation items here -->
    </ul>
</nav>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
            <div class="col-lg-8 text-center text-lg-start">
              <h1 data-aos="fade-right">Pawsome Adoptions</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100"> " A Little Love Is All We Need "      -    <img src ="assets/img/white-paw.png"></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->
    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">Adopt a forever friend today!</h2>
            <h3 class="secton-slogan"> With only these few steps!</h3>
          </div>
        </div>
      </div>
    </section>



    <div class="container">
      <div class="row justify-content-center text-center " data-aos="fade">
        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <span class="number">01</span>
              <h3>Sign Up</h3>
              <p>Create your account to get started.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="step">
              <span class="number">02</span>
              <h3>Choose Pet</h3>
              <p>Select your companion that you wish to adopt.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">03</span>
              <h3>Application Form</h3>
              <p>Finally, fill in the application form to get interviewed.</p>
            </div>
          </div>
        </div>
      </div>



      <section class="section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 me-auto">
              <h2 class="mb-4">Choose your companion today </h2>
              <p class="mb-4">From our available list of furry friends, make your selection today to adopt your friend for life!</p>
              <p><a href="pets.php" class="btn btn-primary">Choose Pet</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="assets/img/undraw_dog_c7i6.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ms-auto order-2">
              <h2 class="mb-4">Want to help Pawsome Adoptions?</h2>
              <p class="mb-4">Your help can support us to make a better and comfortable shelter for the rescued pets here at Pawsome Adoptions Organization. Your token of graditude will be much appreciated. Donate Us!</p>
              <p><a href="donations.php" class="btn btn-primary">Donate</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="assets/img/undraw_friends_r511.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
    </div>
    </section>

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
                </div><!-- End testimonial item -->

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
            <h2>About Us</h2>
            <p>Pawsome Adoptions is a Non-governmental Organization. We serve to rescue abandoned furries because we believe that all pets are worthy and need to be loved and cared for. Our main goal is to help these loved ones to connect with amazing 
              new pet owners that would certainly love, feed and care for them unconditionally.</p>
          </div>
          <div class="col-md-5 text-center text-md-end">
            <img src = "assets/img/about-us.png" style = "width:400px; height:350px;"> 
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer bg-light" role="contentinfo">
    <div class="container">
      <div class="row">
       

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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>