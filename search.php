
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students Record</title>
    <?php include 'links.php' ?>
    <?php include 'style.css' ?>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Search Students Data</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="search_value" class="form-control" placeholder="Search Name, Enrollment No. Or Caste">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" name="search_btn" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                    </div>                
                </div>
            </div>
    
    
        </div>  
    </div>
    


<div class="main-div">

    <div class="center-div">
        <div class="table-responsive">
            <table>
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
                        <th colspan="2">Edit/Delete</th>
                    </tr>
                </thead>

                <tbody>
                        
                        <?php

                         include 'connection.php';
                                
                                

                            if(isset($_POST['search_btn']))
                            {
                                $value_filter = $_POST['search_value'];
                                $query = "SELECT * FROM registration WHERE CONCAT(Name,Caste_Category,Enrollment_No) LIKE '%$value_filter%' ORDER BY Percentage DESC";
                                $query_run = mysqli_query($con,$query);
                                if(mysqli_num_rows($query_run) >0)
                                {

                                    while($res = mysqli_fetch_array($query_run))
                                    {
                            
                        ?>
                                        <tr>
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
                                            <td><a href="search.php" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                            <td><a href="delete.php" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                            
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

                            }

                        ?>
                    
                </tbody>
            </table>
        </div>
    </div>
  
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>