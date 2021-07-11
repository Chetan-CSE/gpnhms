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
                                        <input type="text" name="search_value" class="form-control" placeholder="Search Name,Enrollment NO.,Caste">
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