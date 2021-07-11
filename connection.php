<?php

$username = "root";
$password = "";
$server = "localhost";
$db = 'student';

$con = mysqli_connect($server,$username,$password,$db);
if($con){
    /*echo "Connection Successful";
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