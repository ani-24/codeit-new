<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy HTML course for free | CodeIT</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <?php

    error_reporting(E_ERROR | E_PARSE);
    
    if (!isset($_SESSION['fname'])) {
      ?>
      <script>
        alert("You must be signed in to purchase this course");
        location.replace("./../../../user/login/");
      </script>
      <?php
    }

  ?>
  <?php

    include "./../../../user/connection.php";

    if (isset($_POST["submit"])) {
      $pass = $_POST["pass"];
      $fname = $_SESSION["fname"];
      $query = " SELECT * FROM registration where fname = '$fname' ";
      $result = mysqli_query($con, $query);
      
      $mysqli_arr = mysqli_fetch_assoc($result);
      $pass_hash = $mysqli_arr['pass'];
      
      $pass_verify = password_verify($pass, $pass_hash);

      if (!$pass_verify) {
        echo "<script>alert('The password you entered is wrong');</script>";
      } else {
        $courses = $mysqli_arr['courses'];
        $id = $mysqli_arr['id'];
        $course_arr = explode("|",$courses);
        for ($i=0; $i < sizeof($course_arr); $i++) { 
          if ($course_arr[$i] == "html_course") {
            ?>
            <script>
              alert("You have already purchased this course! You do not have to buy it again.");
              location.replace("./../../../user/profile");
            </script>
            <?php
          }
        }
        $course_arr[$i] = "html_course";
        $course_str = implode("|", $course_arr);
        $sql = " UPDATE registration SET courses='$course_str' WHERE $id";
        $sql_query = mysqli_query($con, $sql);
        
        if ($sql_query) {
          ?>
          <script>
            alert('You have successfully purchased this course');
            location.replace("./../../../user/profile");
          </script>
          <?php
        } else {
          echo "<script>alert('Problem in purchasing the course')</script>";
        }
      }
    }
  ?>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="input-field">
      <input type="password" class="input" id="pass" required name="pass">
      <label for="pass" class="input-label">Enter your password to purchase this course</label>
    </div>
    <button type="submit" class="btn btn-green submit" name="submit">Purchase</button>
  </form>
  <script>
    const input = document.querySelector("input");
    document.addEventListener("DOMContentLoaded", () => {
      input.focus();
    });
  </script>
</body>
</html>