<header class="main-nav">
  <div class="brand-logo"><a href="#">CodeIT</a></div>
  <ul class="nav-list">
    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Courses</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Contact us</a></li>
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