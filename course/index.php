<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeIT - Courses</title>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- Font Awesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="./assets/img/codeit_favicon.png" type="image/png">
</head>
<body>
  <header class="main-nav">
    <div class="brand-logo"><a href="./../">CodeIT</a></div>
    <ul class="nav-list">
      <li class="nav-item"><a href="./../" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="./" class="nav-link">Courses</a></li>
      <li class="nav-item"><a href="./../contact/" class="nav-link">Contact us</a></li>
      <?php

        if (!isset($_SESSION['fname'])) {
          echo '
          <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
          <li class="nav-item"><a href="./user/register.php" class="nav-link">Sign in</a></li>
          ';
        } else {
          echo '<li class="nav-item"><a href="./../user/logout.php" class="nav-link">Logout</a></li>';
        }

      ?>
    </ul>
    <div class="hamburger_menu">
      <div class="bar" id="bar1"></div>
      <div class="bar" id="bar2"></div>
    </div>
  </header>
  <div class="sidenav">
    <ul class="nav-list">
      <a class="nav-link" href="./.."><li class="nav-item">Home</li></a>
      <a class="nav-link" href="./"><li class="nav-item">Courses</li></a>
      <a class="nav-link" href="./../contact"><li class="nav-item ">Contact us</li></a>
      <?php

        if (!isset($_SESSION['fname'])) {
          echo '
          <a class="nav-link" href="./../user/login" target="_blank"><li class="nav-item">Login</li></a>
          <a class="nav-link" href="./../user/register" target="_blank"><li class="nav-item">Sign in</li></a>
          ';
        } else {
          echo '<a class="nav-link" href="./../user/logout.php"><li class="nav-item">Logout</li></a>';
        }

      ?>
    </ul>
  </div>
  <div class="container main">
    <div class="search">
      <input type="text" class="search-bar" id="search-course" placeholder="Search for course">
      <i class="fas fa-search search-icon"></i>
    </div>
    <div class="grid course-container">
      <!-- Courses will load here -->
    </div>
  </div>
  <script src="./../assets/js/headers.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>