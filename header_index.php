<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Title -->
  <title>Rythm - Music Gallery &amp; Audio Template</title>


  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preloader-thumbnail">
      <img src="./img/core-img/preloader.png" alt="">
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="pocaNav">

          <!-- Logo -->
          <a class="nav-brand" href="index.php"><img style="width: 50%;" src="./img/core-img/logo2.png" alt=""></a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">

            <!-- Menu Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li class="current-item"><a href="./index.php">Home</a></li>
                <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                <li><a href="#">Login</a>
                  <ul class="dropdown">
                  <li><a href="login_system/user_login.php">User Login</a></li>
                    <li><a href="login_system/admin_login.php">Admin Login</a></li>
                    <li><a href="login_system/user_signup.php">User Signup</a></li>
                    <!-- <li><a href="login_system/admin_signup.php">Admin Signup</a></li> -->
                  </ul>
                </li>
                <!-- <li><a href="./podcast.html">Podcasts</a></li> -->
              </ul>

              <!-- Top Search Area -->
              <div class="top-search-area">
                <form action="index.php" method="post">
                  <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div>

              <!-- Top Social Area -->
              <div class="top-social-area">
                <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                <a href="#" class="fa fa-pinterest" aria-hidden="true"></a>
                <a href="#" class="fa fa-instagram" aria-hidden="true"></a>
                <a href="#" class="fa fa-youtube-play" aria-hidden="true"></a>
              </div>

            </div>
            <!-- Nav End -->
          </div>
        </nav>
      </div>
    </div>
  </header>