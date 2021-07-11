<?php

session_start();

if(!isset($_SESSION['name'])){
    header('location:admin.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Polytechnic-Hostel Management System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <header>
        <div class="main">
            <div class="logo">
                <img src="logo.jpg" >

            </div>
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="submission_2.php">Students List</a></li>
                <li><a href="search.php">Search/Filter</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="alogout.php">Logout</a></li>
                
            </ul>       
         </div>
         <div class="title">
             <h1>GPN Hostel</h1>

         </div>
         <div class="button">
             <a href="submission_2.php" class="btn">Check Applicants</a>"

         </div>
    </header>
    
</body>
</html>