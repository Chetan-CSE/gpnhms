<?php 

session_start();

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create an account</title>
    <link rel="stylesheet" href="rstyle.css">

  </head>
  <body>

  <?php

    include 'dbcon.php';

    if(isset($_POST['submit'])){

     $name = mysqli_real_escape_string($con,$_POST['name']); 
     $email = mysqli_real_escape_string($con,$_POST['email']); 
     $password = mysqli_real_escape_string($con,$_POST['password']); 
     $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
     
     
    /*$passwd = password_hash($password, PASSWORD_BCRYPT);
    $cpasswd = password_hash($cpassword, PASSWORD_BCRYPT);
    */

    $emailquery = " SELECT * FROM `register` WHERE email='$email' ";
    $query= mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount >0){

      ?>
           <script>
              alert('email already exist');
            </script>
                
       <?php

    }
    else{

          if($password === $cpassword)
          {

            $insertquery = "INSERT INTO `register`( `name`, `email`, `password`, `cpassword`) VALUES('$name','$email','$password','$cpassword')";

            $iquery = mysqli_query($con,$insertquery);


            if($iquery)
            {
                ?>
                <script>
                    alert('Data Inserted Successfully');
                </script>
                
                <?php
            }
            else{

              ?>
              <script>
                  alert('Something went wrong try again later');
              </script>
              
              <?php
            }
          }
         else{

          ?>
          <script>
              alert('Password does not match');
          </script>
          
          <?php
          }

    }

  }

?>
    <div class="center">
      <h1>Register</h1>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="txt_field">
            <input type="text" name="name" required>
            <span></span>
            <label>Name</label>
          </div>
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" name="cpassword" required>
          <span></span>
          <label>Confirm Password</label>
        </div>
        <input type="submit" name="submit" value="Register">
        <div class="signup_link">
          Already a member? <a href="login.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
