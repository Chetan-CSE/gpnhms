<?php

session_start();
ob_start();

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form | </title>
    <link rel="stylesheet" href="astyle.css">
  </head>
  <body>

  <?php

    include 'dbcon.php';

    if(isset($_POST['submit']))
    {

      $email = $_POST['email'];
      $password = $_POST['password'];

      $email_search = "SELECT * FROM `admin` WHERE email='$email' ";
      $query = mysqli_query($con,$email_search);

      $email_count = mysqli_num_rows($query);

      if($email_count)
      {

        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];

        $_SESSION['name'] = $email_pass['name'];

        if($db_pass === $password)
        {
          echo "Login Successfull";

          if(isset($_POST['rememberme'])){
           
            setcookie('emailcookie',$email,time()+86400);
            setcookie('passwordcookie',$password,time()+86400);
            ?>

            <script>
              location.replace("adminhome.php");
            </script>

            <?php

          }
          else{
            ?>

          <script>
            location.replace("adminhome.php");
          </script>

          <?php
          }
          ?>

          <script>
            location.replace("adminhome.php");
          </script>

          <?php

        }
        else{

          ?>

          <script>
            alert('Password Incorrect');
          </script>

          <?php
        }
      }
      else{

        ?>

          <script>
            alert('Invalid email');
          </script>

          <?php
      }
      

    }

?>
   
    <div class="center">
      <h1>Admin Login</h1>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="txt_field">
          <input type="text" name="email" value="<?php if(isset($_COOKIE['emailcookie'])) { echo $_COOKIE['emailcookie']; } ?>" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])) { echo $_COOKIE['passwordcookie']; } ?>" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="signup_link">
        <input type="checkbox" name="rememberme">Remember me
        </div>
        
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
        
        </div>
      </form>
    </div>

  </body>
</html>
