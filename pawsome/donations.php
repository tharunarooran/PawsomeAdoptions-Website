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

  <title>Donations</title>
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
          <li><a href="pets.php">Pets</a></li>
          <li><a class=active href="donations.php">Donations</a></li>
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
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= FeatPricingures Section ======= -->
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
                <h1 data-aos="fade-up" data-aos-delay="">Donations</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">'A token of your gratitude is much appreciated'</p>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7 mb-5">
                <h2 class="section-heading">Choose Tier</h2>
                <p>You can now help the pets at Pawsome adoptions by even donating a dollar!.</p>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="pricing h-100 text-center">
                    <span class="popularity">Basic Donation</span>
                    <h3>Silver Tier</h3>
                    <ul class="list-unstyled">
                        <img src="assets/img/silver.png" style="height:100px; width:90px;">
                    </ul>
                    <div class="price-cta">
                        <strong class="price">$1</strong>
                        <p><a href="payment.php?donation=Silver%20Tier&amp;amount=1" class="btn btn-white">Donate</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="pricing h-100 text-center popular">
                    <span class="popularity" style="color: #ffff;">Premium Donation</span>
                    <h3>Diamond Tier</h3>
                    <ul class="list-unstyled">
                        <img src="assets/img/diamond.png" style="height:120px; width:100px;">
                    </ul>
                    <div class="price-cta">
                        <strong class="price">$15</strong>
                        <p><a href="payment.php?donation=Diamond%20Tier&amp;amount=15" class="btn btn-white">Donate</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="pricing h-100 text-center">
                    <span class="popularity">Standard Donation</span>
                    <h3>Gold Tier</h3>
                    <ul class="list-unstyled">
                        <img src="assets/img/gold.png" style="height:100px; width:90px;">
                    </ul>
                    <div class="price-cta">
                        <strong class="price">$10</strong>
                        <p><a href="payment.php?donation=Gold%20Tier&amp;amount=10" class="btn btn-white">Donate</a></p>
                    </div>
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
            <h2>Let us bring a smile to your face</h2>
          </div>
          <div class="col-md-5 text-center text-md-end">
            <img src="assets/img/dog-smile.jpg" style = "width:340px; height:350px;">
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
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
              <li><a href="index.php">Home</a></li>
                <li><a href="pets.php">Pets</a></li>
                <li><a href="donations.php">Donations</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>


  </footer>
  <footer>
    <div class="row justify-content-center text-center  bg-light pt-3">
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