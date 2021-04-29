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
          echo '<li class="nav-item"><a href="#" class="nav-link">Logout</a></li>';
        }

      ?>
    </ul>
  </header>
  <div class="container main">
    <div class="search">
      <input type="text" class="search-bar" id="search-course" placeholder="Search for course">
      <i class="fas fa-search search-icon"></i>
    </div>
    <div class="grid course-container"></div>
  </div>
  <script src="./js/main.js"></script>
</body>
</html>