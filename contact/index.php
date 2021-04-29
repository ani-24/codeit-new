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
    </header>
    <main>
      <div class="container">
        <form action="#" method="POST">
          <div class="grid grid-2">
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
  </body>
</html>
