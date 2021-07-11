<?php
session_start();
ob_start();
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>


            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sno.</th>
                                    <th>Name</th>
                                    <th>Date_of_Birth</th>
                                    <th>Blood_Group</th>
                                    <th>Caste_Category</th>
                                    <th>Nationality</th>
                                    <th>Address</th>
                                    <th>Mobile_No</th>
                                    <th>Alternate_No</th>
                                    <th>Programme_Name</th>
                                    <th>Enrollment_No</th>
                                    <th>Year</th>
                                    <th>Shift</th>
                                    <th>No_of_Course</th>
                                    <th>Last_Exam</th>
                                    <th>Result</th>
                                    <th>Marks</th>
                                    <th>Percentage</th>
                                    <th>Parent_Name</th>
                                    <th>Occupation</th>
                                    <th>Phone_No</th>
                                    <th>Parent_Address</th>
                                    <th>Guardian_Name</th>
                                    <th>Guardian_Address</th>
                                    <th>Contact_No</th>
                                    <th>Contact_No_2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                            include 'connection.php';
                            
                            $sname = $_SESSION['name'];
                            $squery = "SELECT * FROM registration WHERE CONCAT(Name) LIKE '%$sname%'";
                            $query_run = mysqli_query($con,$squery);
                            

                            $query = mysqli_query($con,$query_run);

                            $nums =mysqli_num_rows($query);

                            $res = mysqli_fetch_array($query_run);

                            if(mysqli_num_rows($query_run) >0)
                            {
                        
                            while($res = mysqli_fetch_array($query_run))
                            {
                            
                            ?>
                                <tr>
                                    <td><?php echo $res['Sno'] ?> </td>
                                    <td><?php echo $res['Name'] ?></td>
                                    <td><?php echo $res['Date_of_Birth'] ?> </td>
                                    <td><?php echo $res['Blood_Group'] ?> </td>
                                    <td><?php echo $res['Caste_Category'] ?> </td>
                                    <td><?php echo $res['Nationality'] ?> </td>
                                    <td><?php echo $res['Address'] ?> </td>
                                    <td><?php echo $res['Mobile_No'] ?> </td>
                                    <td><?php echo $res['Alternate_No'] ?> </td>
                                    <td><?php echo $res['Programme_Name'] ?> </td>
                                    <td><?php echo $res['Enrollment_No'] ?> </td>
                                    <td><?php echo $res['Year'] ?> </td>
                                    <td><?php echo $res['Shift'] ?> </td>
                                    <td><?php echo $res['No_of_Course'] ?> </td>
                                    <td><?php echo $res['Last_Exam'] ?> </td>
                                    <td><?php echo $res['Result'] ?> </td>
                                    <td><?php echo $res['Marks'] ?> </td>
                                    <td><?php echo $res['Percentage'] ?> </td>
                                    <td><?php echo $res['Parent_Name'] ?> </td>
                                    <td><?php echo $res['Occupation'] ?> </td>
                                    <td><?php echo $res['Phone_No'] ?> </td>
                                    <td><?php echo $res['Parent_Address'] ?> </td>
                                    <td><?php echo $res['Guardian_Name'] ?> </td>
                                    <td><?php echo $res['Guardian_Address'] ?> </td>
                                    <td><?php echo $res['Contact_No'] ?> </td>
                                    <td><?php echo $res['Contact_No_2'] ?> </td>
                                </tr>
                            <?php
                            }
                        }
                        
                        else{

                            ?>
                                <tr>
                                    <td colspan="26" class="text-center">No Records Found</td>
                                </tr>

                            <?php
                        }

                        ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>