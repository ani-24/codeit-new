<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Get in touch with us -- CodeIT</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <header class="main-nav">
      <div class="brand-logo"><a href="./../">CodeIT</a></div>
      <ul class="nav-list">
        <li class="nav-item"><a href="./../" class="nav-link">Home</a></li>
        <li class="nav-item">
          <a href="./../course/" class="nav-link">Courses</a>
        </li>
        <li class="nav-item"><a href="./" class="nav-link">Contact us</a></li>
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
      <div class="hamburger_menu">
        <bar class="bar" id="bar1"></bar>
        <bar class="bar" id="bar2"></bar>
      </div>
    </header>
    <div class="sidenav">
      <ul class="nav-list">
        <a class="nav-link" href="./../"><li class="nav-item">Home</li></a>
        <a class="nav-link" href="./../course"><li class="nav-item">Courses</li></a>
        <a class="nav-link" href="./"><li class="nav-item ">Contact us</li></a>
        <?php

          if (!isset($_SESSION['fname'])) {
            echo '
            <a class="nav-link" href="./../user/login" target="_blank"><li class="nav-item">Login</li></a>
            <a class="nav-link" href="./../user/register" target="_blank"><li class="nav-item">Sign in</li></a>
            ';
          } else {
            echo '<a class="nav-item" href="./../user/logout.php"><li class="nav-item">Logout</li></a>';
          }

        ?>
      </ul>
    </div>
    <main>
      <div class="container">
        <form action="#" method="POST">
          <div class="grid">
            <div class="input-field">
              <input type="text" placeholder="First name" class="input" />
            </div>
            <div class="input-field">
              <input type="text" placeholder="Last name" class="input" />
            </div>
            <div class="input-field">
              <input type="text" placeholder="Mobile no." class="input" />
            </div>
            <div class="input-field">
              <input type="text" placeholder="Email" class="input" />
            </div>
            <div class="input-field">
              <textarea
                name="message"
                id="message"
                class="input"
                placeholder="Message"
              ></textarea>
            </div>
          </div>
          <div class="h-center">
            <button type="submit" class="submit">Send</button>
          </div>
        </form>
      </div>
    </main>
    <script src="./../assets/js/headers.js"></script>
  </body>
</html>
