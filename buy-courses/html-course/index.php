<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HTML course (From Zero to Hero) | CodeIT</title>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- Font Awesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <?php

    if (!isset($_SESSION["fname"])) {
      ?>
      <script>
        alert("You must be signed in to purchase the courses");
        location.replace("./../../user/login");
      </script>
      <?php
    }
  ?>

  <header class="profile-nav">
    <div class="brand-logo">
      <a href="./../../">CodeIT</a>
    </div>
    <div class="extra">
      <div class="search">
        <input type="text" id="search-courses" class="searchbar" placeholder="Search for courses">
      </div>
      <i class="fas fa-search search-icon"></i>
      <div class="profile">
        <i class="fas fa-user-circle profile-pic"></i>
      </div>
    </div>
  </header>
  <script src="./../assets/js/headers.js"></script>
</body>
</html>