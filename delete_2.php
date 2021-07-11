<?php

include 'connection.php';

$sno = $_GET['Sno'];

$delete_query = "delete from registration where Sno=$sno";

$query =mysqli_query($con,$delete_query);

header('Location:delete_2.php');

?>