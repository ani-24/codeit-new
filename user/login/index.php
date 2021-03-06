<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login to CodeIT | CodeIT</title>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./../css/style.css">

</head>
<body>

  <?php

    include './../connection.php';

    if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      
      $search = " SELECT * FROM registration WHERE email = '$email' ";
      $search_query = mysqli_query($con, $search);
      $rows = mysqli_num_rows($search_query);

      if ($rows > 0) {
        $mysqli_arr = mysqli_fetch_assoc($search_query);
        $arr_pass = $mysqli_arr['pass'];
        $pass_verify = password_verify($pass, $arr_pass);
        if ($pass_verify) {
          $_SESSION['fname'] = ucfirst($mysqli_arr['fname']);
          $_SESSION['lname'] = ucfirst($mysqli_arr['lname']);
          header("location:./../../");
        } else {
          echo "<script>alert('Password is incorrect');</script>";
        }
      } else {
        echo "<script>alert('Email not found. If you are a new user try signing in');</script>";
      }
    }

  ?>
  
  <div class="container">
    
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
      <div class="grid">
        <div class="input-field">
          <input type="text" class="input" name="email" id="email">
          <label for="fname" class="form-label">Email:</label>
        </div>
        <div class="input-field">
          <input type="password" class="input" name="pass" id="pass">
          <label for="fname" class="form-label">Enter your password:</label>
        </div>
      </div>

      <div class="h-center">
        <p class="additional-line">Not a user?&nbsp;<a href="./../register/">Register here</a></p>
        <p><button type="submit" class="btn btn-dark submit" name="submit">Submit</button></p>
      </div>
    </form>

  </div>

  <script src="./main.js"></script>
</body>
</html>