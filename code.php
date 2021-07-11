<?php
session_start();
include 'connection.php';
if(isset($_POST['del']))
{
    $all_id = $_POST['del_chk'];
    $separate_all_id = implode(",",$all_id);
    $query ="DELETE FROM registration WHERE Sno IN($separate_all_id)";

    $query_run =mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Deleted id's are $separate_all_id";
        header("Location: delete.php");
    }
    else{
        $_SESSION['status'] = "Something Went Wrong";
        header("Location: delete.php"); 
    }
}