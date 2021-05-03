<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My profile | CodeIT</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="./js/main.js"></script>
  </head>
  <body>

    <?php

      include "./../connection.php";

      if (!isset($_SESSION['fname'])) {
        header("location:./../../");
      }

    ?>

    <div class="welcome-header">
      <div class="operation">
        <a href="./../../"><i class="fas fa-chevron-circle-left" title="back to Home page"></i></a>
        <a href="./../logout.php"><i class="fas fa-user-circle" data-tooltip="Logout" title="Logout"></i></a>
      </div>
      <h1>Welcome, <?php echo $_SESSION['fname'] ." ". $_SESSION['lname'] ?></h1>
    </div>

    <main class="container">

      <h3 class="heading">My courses</h3>

      <div class="grid courses">
        <?php

          $fname = $_SESSION['fname'];

          $query = " SELECT * FROM registration WHERE fname = '$fname' ";
          $result = mysqli_query($con, $query);

          $db_arr = mysqli_fetch_assoc($result);
          $courses = $db_arr['courses'];

          $course_arr = explode("|", $courses);

          for ($i=0; $i < sizeof($course_arr); $i++) {
            $counter = 0;
            if (!$course_arr[$i] == "") {
              ?>
              <script>
                let course = <?php echo $course_arr[$i]; ?>;
                const card = document.createElement("div");
                card.classList.add("card-container");
                card.innerHTML = `
                  <div class='card-img'>
                    <img src=${course.img} alt=${course} />
                  </div>
                  <div class='card-body'>
                    <h4 class='card-title'>${course.title}</h4>
                    <div class='card-desc'>
                      ${course.desc}
                    </div>
                  </div>
                  <div class='card-footer'>
                    <a href=${course.link} class='btn btn-outline-blue'>View course</a>
                  </div>
                `;
                const courses = document.querySelector(".courses");
                courses.appendChild(card);
              </script>
              <?php
              $counter++;
            }
          }

        ?>
      </div>
      <?php
        if ($counter == 0) {
          echo "<div class='course-msg'><p class='course-msg-emoji'>¯\_(ツ)_/¯</p><p class='course-msg-text'>**You have not purchased any course yet.**</p></div>";
        }
      ?>

    </main>
  </body>
</html>
