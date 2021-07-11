<?php

$username = "root";
$pass = "";
$server = "localhost";
$db = 'student';

$con = mysqli_connect($server,$username,$pass,$db);
if($con){
    /* echo "Connection Successful";
    ?>
    <script>
        alert('connction successful');
    </script>
    
    <?php
    */
}
else{
    die("no connection" . mysqli_connect_error());
}

?>