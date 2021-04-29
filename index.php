<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CodeIT | Free videos, courses, notes, lectures and more</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./home/css/style.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/img/codeit_favicon.png" type="image/png">
  </head>
  <body>
    <div id="home">
      <header class="main-nav">
        <div class="brand-logo"><a href="#">CodeIT</a></div>
        <ul class="nav-list">
          <li class="nav-item"><a href="./" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="./course/" class="nav-link">Courses</a></li>
          <li class="nav-item"><a href="./contact/" class="nav-link">Contact us</a></li>
          <?php

            if (!isset($_SESSION['fname'])) {
              echo '
              <li class="nav-item"><a href="./user/login/" class="nav-link" target="_blank">Login</a></li>
              <li class="nav-item"><a href="./user/register/" class="nav-link" target="_blank">Sign in</a></li>
              ';
            } else {
              echo '<li class="nav-item"><a href="./user/logout.php" class="nav-link">Logout</a></li>';
            }

          ?>
        </ul>
      </header>
      <div class="hero-section">
        <h1>Welcome <span><?php 
          if (isset($_SESSION['fname'])) {
            echo $_SESSION['fname'].' to';
          } else {
            echo "to CodeIT";
          }
        ?></span>, the Coding World</h1>
        <p>
          Let's learn exciting and awesome stuffs from programming together
          through video lectures, notes, test, quiz and other.
        </p>
      </div>
    </div>
    <div id="courses">
      <h2 class="heading">Our Featured courses</h2>
      <div class="container">
        <div class="grid">
          <div class="card-container" data-page="html">
            <div class="card-img">
              <img src="./assets/img/html_thumbnail.png" alt="HTML" />
            </div>
            <div class="card-body">
              <h4 class="card-title">HTML tutorial (from zero to hero)</h4>
              <div class="card-desc">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Perspiciatis laborum aliquid voluptas ipsa itaque adipisci!
              </div>
            </div>
            <div class="card-footer">
              <div class="price-tag">₹1999.00</div>
            </div>
          </div>
          <div class="card-container" data-page="css">
            <div class="card-img">
              <img src="./assets/img/css_thumbnail.png" alt="CSS" />
            </div>
            <div class="card-body">
              <h4 class="card-title">A complete CSS course</h4>
              <div class="card-desc">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Perspiciatis laborum aliquid voluptas ipsa itaque adipisci!
              </div>
            </div>
            <div class="card-footer">
              <div class="price-tag">₹1999.00</div>
            </div>
          </div>
          <div class="card-container" data-page="js">
            <div class="badge badge-yellow">bestseller</div>
            <div class="card-img">
              <img src="./assets/img/js_thumbnail.png" alt="HTML" />
            </div>
            <div class="card-body">
              <h4 class="card-title">Advanced JS projects (50+ projects)</h4>
              <div class="card-desc">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Perspiciatis laborum aliquid voluptas ipsa itaque adipisci!
              </div>
            </div>
            <div class="card-footer">
              <div class="price-tag">₹3999.00</div>
            </div>
          </div>
        </div>
        <div class="h-center">
          <a href="./course/" class="btn btn-dark">View all courses <span class="icon">&rarr;</span></a>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="grid">
          <div class="section">
            <h3 class="heading">About Us</h3>
            <p class="desc">
            Aniket Kumar founded the company CodeIT in the year 2021 with the aim to share his knowledge with the world and also kept in his mind that technology is the future so he started teaching about technology and different programming language to the world.
            </p>
          </div>
          <div class="section">
            <h3 class="heading">Quick Links</h3>
            <ul>
              <li class="footer-list-item"><a class="footer-link" href="#">Home</a></li>
              <li class="footer-list-item"><a class="footer-link" href="#">Courses</a></li>
              <li class="footer-list-item"><a class="footer-link" href="#">Contact us</a></li>
            </ul>
          </div>
          <div class="section">
            <h3 class="heading">Get connected</h3>
            <a href="#" class="m-10 btn btn-outline-red">Sign in</a>
            <a href="#" class="m-10 btn btn-outline-light">Login</a>
            <a href="#" class="m-10 btn btn-outline-blue">Drop a message</a>
          </div>
        </div>
        <div class="copyright">
          <div class="copyright-text">
            &copy; 2021-22 copyright: &nbsp;<a href="./" class="footer-link">codeit.com</a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
