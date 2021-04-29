<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeIT | Register to CodeIT</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  
  <?php
  
    include './connection.php';
    
    if (isset($_POST["submit"])) {
      
      $fname = mysqli_real_escape_string($con, $_POST["fname"]);
      $lname = mysqli_real_escape_string($con, $_POST["lname"]);
      $mobile = mysqli_real_escape_string($con, $_POST["mobile"]);
      $email = mysqli_real_escape_string($con, $_POST["email"]);
      $pass = mysqli_real_escape_string($con, $_POST["pass"]);
      $cpass = mysqli_real_escape_string($con, $_POST["cpass"]);

      $pass_hash = password_hash($pass, PASSWORD_BCRYPT);
      $cpass_hash = password_hash($cpass, PASSWORD_BCRYPT);

      $search = " SELECT * FROM registration WHERE email = '$email' ";
      $search_query = mysqli_query($con, $search);
      $rows = mysqli_num_rows($search_query);

      if ($rows>0) {
        echo "<script>alert('Email already exists. If you are an existing user try logging in');</script>";
      } else {
        if ($pass === $cpass) {
          $query = " INSERT INTO registration ( fname, lname, mobile, email, pass, cpass ) values ( '$fname', '$lname', '$mobile', '$email', '$pass_hash', '$cpass_hash' ) ";
          $result = mysqli_query($con, $query);
          if ($query) {
            header("location: ./../");
          } else {
            ?>
            <script>
              alert("Problem in signing in!");
            </script>
            <?php
          }
        }
      }

    }
  
  ?>

  <div class="container">
    
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
      <div class="grid">
        <div class="input-field">
          <input type="text" class="input" name="fname" id="fname">
          <label for="fname" class="form-label">First name:</label>
        </div>
        <div class="input-field">
          <input type="text" class="input" name="lname" id="lname">
          <label for="fname" class="form-label">Last name:</label>
        </div>
        <div class="input-field">
          <input type="text" class="input" name="mobile" id="mobile">
          <label for="fname" class="form-label">Mobile number:</label>
        </div>
        <div class="input-field">
          <input type="text" class="input" name="email" id="email">
          <label for="fname" class="form-label">Email:</label>
        </div>
        <div class="input-field">
          <input type="password" class="input" name="pass" id="pass">
          <label for="fname" class="form-label">Create a strong password:</label>
        </div>
        <div class="input-field">
          <input type="password" class="input" name="cpass" id="cpass">
          <label for="fname" class="form-label">Confirm password:</label>
        </div>
      </div>

      <div class="h-center">
        <p>Already a user?&nbsp;<a href="./login.php">Login here</a></p>
        <p><button type="submit" class="btn btn-dark submit" name="submit">Submit</button></p>
      </div>

    </form>

  </div>

  <script src="./js/main.js"></script>

</body>
</html>