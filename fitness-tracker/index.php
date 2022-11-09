<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="Minor project" />
  <meta name="author" content="" />

  <title>Fitness Tracker</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css\bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css\style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css\responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand">
            <img src="images/logo1.png" alt="" />
            <span> Fitness Tracker </span>
          </a>
          <div class="contact_nav" id="">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="service.html">
                  <img src="images/envelope.png" alt="" />
                  <span>Message Us</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div class="container">
        <div class="custom_nav2">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./record_exercise/log_exercise.php">Record</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="./workout_plan/overview.php">My Routine </a>
                  </li>
                  <?php
                  if (isset($_SESSION['email'])) {
                  ?>
                    <li class="nav-item">
                      <a class="nav-link" href="php/show_progress.php">My Progress </a>
                    </li>
                  <?php } ?>
                  <?php
                  if (!isset($_SESSION['email'])) {

                  ?>
                    <li class="nav-item">
                      <a class="nav-link" href="./login/login-user.php">Login</a>
                    </li>
                  <?php } ?>

                  <?php
                  if (isset($_SESSION['email'])) {

                  ?>
                    <li class="nav-item">
                      <a class="nav-link" href="./login/logout-user.php">Logout</a>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="slider_container">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                  <div class="detail-box">
                    <h2>Be Your Best</h2>
                    <h2>with</h2>
                    <h1>Fitness Tracker</h1>
                    <p>Built to help you track your gains</p>
                    <div class="btn-box">
                      <a href="" class="btn-1"> Read More </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>About Fitness Tracker</h2>
      </div>
      <div class="box">
        <!-- <div class="img-box">
          <img src="images/logo1.png" alt="" />
        </div> -->
        <div class="detail-box">
          <p>
            This is our first minor project built for demonstration of our academic achievement.
          </p>
          <!-- <a href=""> Read More </a> -->
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- Us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Why Choose Us</h2>
      </div>
      <div class="us_container">
        <div class="box">
          <div class="detail-box">
            <p>

            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end us section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Reviews</h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/arnold1.png" alt="Image of Arnold Schwarzenegger" />
              </div>
              <div class="detail-box">
                <h5>DefinitelyArnold</h5>
                <p>
                  Its very easy to track your gains with Fitness Tracker. You can shock your muscles and see the
                  difference.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/rambo.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>Rambo</h5>
                <p>
                  If you make exercise your hobby instead of your enemy it becomes your friend; it's the one thing that will never let you down. It will always be there for you and it will always make you better than you were before. Remember: every time you go to the gym, every time you put the right supplement in your mouth, you're better than you were ten minutes ago.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>Lightweight</h5>
                <p>
                  Yeah baby!!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- result section -->

  <section class="result_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/result-img.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="detail-box">
            <h2>
              BUILT TO BRING <br />
              BEST RESULTS
            </h2>
            <p>
              With Fitness Tracker you can be sure that you are constantly improving
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end result section -->

  <!-- contact section -->
  <!-- <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span> Get In Touch </span>
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-6">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" />
                  </div>
                  <div class="mt-5">
                    <input type="text" placeholder="Message" />
                  </div>
                  <div class="mt-5">
                    <button type="submit">Send</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h6>About Fitness Tracker</h6>
          <p>
            This is our first minor project built for demonstration of our academic achievement.
          </p>
        </div>
        <div class="col-md-2 offset-md-1">
          <h6>Menus</h6>
          <ul>
            <li class="active">
              <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="about.php">About </a>
            </li>
            <li class="">
              <a class="" href="./login/login-user.php">Login</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>Useful Links</h6>
          <ul>
            <li>
              <a href="https://athleanx.com/" target="_blank" rel="noopener noreferrer">Athlean-x</a>
            </li>
            <li>
              <a href="https://fitnessfaqs.com/" target="_blank" rel="noopener noreferrer">FITNESSFAQs</a>
            </li>
            <li>
              <a href="https://gces.edu.np/" target="_blank" rel="noopener noreferrer">GCES</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>Contact Us</h6>
          <div class="info_link-box">
            <a href="">
              <img src="images/mail-white.png" alt="" />
              <span> oozwal299@gmail.com</span>
            </a>
          </div>
          <!-- <div class="info_social">
            <div>
              <a href="https://www.facebook.com/sumit.karmacharya.35">
                <img src="images/facebook-logo-button.png" alt="" />
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="" />
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="" />
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="" />
              </a>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <!-- <section class="container-fluid footer_section">
    <p>&copy; 2022 All Rights Reserved. Design by Free Html Templates</p>
  </section> -->
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>

</html>