<?php session_start();   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students Record</title>
    <?php include 'links.php' ?>
    <?php include 'style.css' ?>

</head>
<body>
    <form action="code.php" method="POST">

<div class="main-div">
    <h1>List of Candidates in Database</h1>
    <div class="center-div">
        <?php
            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
                ?>
                    <h5><?php echo $_SESSION['status']; ?></h5>
                <?php
                unset($_SESSION['status']);
            }
        ?>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th scope="col">
                            <button type="submit" name="del" class="btn btn-danger">Delete</button>
                        </th>
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

                            $selectquery = "select * from registration ";

                            $query = mysqli_query($con,$selectquery);

                            $nums =mysqli_num_rows($query);

                            $res = mysqli_fetch_array($query);

                            if(mysqli_num_rows($query) >0)
                            {

                            
                            while($res = mysqli_fetch_array($query))
                            {
                            
                            ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="del_chk[]" value="<?php echo $res['Sno']; ?> ">
                                    </td>
                                    <td><?php echo $res['Sno'] ?> </td>
                                    <td><span class="email-style"><?php echo $res['Name'] ?> </span></td>
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
            </form>
        </div>
    </div>
  
</div>



</body>
</html>