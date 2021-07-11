<!DOCTYPE html>
<html lang="en">
<head>
  
  <link rel="stylesheet" href="form.css" type="text/css">
  

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
      <h1 id="top" class="heading"> Hostel Admission Form</h1><br><br>
    <div class="main">

    

    <form class="form-horizontal" id="admission" method="POST">

            <?php

include 'connection.php';

$sno = $_GET['Sno'];

$showquery = "select * from registration where Sno=$sno";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['submit']))
{
    $full_name = $_POST['name'];
    $dob = $_POST['DOB'];
    $blood = $_POST['blood'];
    $caste = $_POST['caste'];
    $nationality = $_POST['nationality'];
    $addressfc = $_POST['addressfc'];
    $contact = $_POST['contact'];
    $altcontact = $_POST['altcontact'];
    $programme = $_POST['programme'];
    $enroll = $_POST['enroll'];
    $year = $_POST['year'];
    $shift = $_POST['shift'];
    $rcourse = $_POST['rcourse'];
    $lexam = $_POST['lexam'];
    $result = $_POST['result'];
    $marks = $_POST['marks'];
    $percentage = $_POST['percentage'];
    $pname = $_POST['pname'];
    $occupation = $_POST['occupation'];
    $pcontact = $_POST['pcontact'];
    $paddress = $_POST['paddress'];
    $gname = $_POST['gname'];
    $gaddress = $_POST['gaddress'];
    $gcontact = $_POST['gcontact'];
    $galtcontact = $_POST['galtcontact'];

    $insertquery = "INSERT INTO `registration`( `Name`, `Date_of_Birth`, `Blood_Group`, `Caste_Category`, `Nationality`, `Address`, `Mobile_No`, `Alternate_No`, `Programme_Name`, `Enrollment_No`, `Year`, `Shift`, `No_of_Course`, `Last_Exam`, `Result`, `Marks`, `Percentage`, `Parent_Name`, `Occupation`, `Phone_No`, `Parent_Address`, `Guardian_Name`, `Guardian_Address`, `Contact_No`, `Contact_No_2`) VALUES ('$full_name','$dob','$blood','$caste','$nationality','$addressfc','$contact','$altcontact','$programme','$enroll','$year','$shift','$rcourse','$lexam','$result','$marks','$percentage','$pname','$occupation','$pcontact','$paddress','$gname','$gaddress','$gcontact','$galtcontact')";
    
    $res = mysqli_query($con,$insertquery);

    if($res){
    ?>
    <script>
        alert("Your Form is Submitted Successfully");
    </script>
    <?php
    }
    else{
    ?>
    <script>
        alert("Sorry,Something went wrong");
    </script>
    <?php
    }
}

?>


      
        <fieldset>


        
        <!-- Form Name -->
        <legend><b>Student Information</b> </legend>

        <div class="sec1"> 

       

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enter Full Name">Enter  Full Name </label> 
          <div class="col-md-4">
          <input id="Enter  Full Name" name="name" type="text" placeholder="Enter Full Name" class="form-control input-md" value="<?php echo $arrdata['Name'] ?>" required=""size="30 30">
            
          </div>
        </div><br>
        
        <!-- Password input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Enter DOB">Enter DOB</label>
          <div class="col-md-4">
            <input id="Enter DOB" name="DOB" value="<?php echo $arrdata['Date_of_Birth'] ?>" type="date" placeholder="Enter DOB" class="form-control input-md" >
            
          </div>
        </div><br>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Blood Group">Blood Group</label>
          <div class="col-md-4">
            <select id="Blood Group" name="blood" value="<?php echo $arrdata['Blood_Group'] ?>" class="form-control1">
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="AB+">AB+</option>
              <option value="O-">O-</option>
              <option value="A+">A+</option>
              <option value="O+">O+</option>
            </select>
          </div>
        </div><br>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Caste Category">Caste Category</label>
          <div class="col-md-4">
            <select id="Caste Category" name="caste" value="<?php echo $arrdata['Caste_Category'] ?>" class="form-control2">
              <option value="OPEN">OPEN</option>
              <option value="OBC">OBC</option>
              <option value="SC/ST">SC/ST</option>
              <option value="GEN">GEN</option>
              <option value="OTHER">OTHER</option>
            </select>
            <br><br>

            <div class="form-group">
              <label class="col-md-4 control-label" for="Enter Full Name">Nationality</label> 
              <div class="col-md-4">
              <input id="Nationality" name="nationality" value="<?php echo $arrdata['Nationality'] ?>" type="text" placeholder="Nationality" class="form-control input-md" required="">
                
              </div>
              
            </div>

            <!-- Textarea -->
             <br> 
<div class="form-group">
    <label class="col-md-4 control-label" for="Address For Communication">Address For Communication</label>
    <div class="col-md-4">                     
      <textarea class="form-control" id="Address For Communication" name="addressfc" value="<?php echo $arrdata['Address'] ?>" placeholder="Enter Address"></textarea>
    </div>
  </div><br>
  
  <!-- Password input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="Conatact">Contact No. 1</label>
    <div class="col-md-4">
      <input id="Conatact" name="contact" value="<?php echo $arrdata['Mobile_No'] ?>" placeholder="required" class="form-control input-md" required="">
      
          </div>
        </div><br>
        <div class="form-group">
          <label class="col-md-4 control-label" for="Contact Number">Contact No. 2</label>
          <div class="col-md-4">
            <input id="Contact Number" name="altcontact" value="<?php echo $arrdata['Alternate_No'] ?>" placeholder="optional" class="form-control input-md" >
                    </div>
                  </div>
                </div><br>
        
        </fieldset>
     
       
        
    
        <br>
        <button type="button" class="collapsible">Educational Information</button>
<div class="content" id="education">
        
            <fieldset>
            
            <!-- Form Name -->
            <legend> <b>Educational Information </b></legend>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Pragramme Name">Programme Name</label>  
              <div class="col-md-4">
              <input id="Pragramme Name" name="programme" value="<?php echo $arrdata['Programme_Name'] ?>" type="text" placeholder="Pragramme Name" class="form-control input-md" required="">
                
              </div>
            </div><br>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Enrollment Number">Enrollment Number</label>  
              <div class="col-md-4">
              <input id="Enrollment Number" name="enroll" value="<?php echo $arrdata['Enrollment_No'] ?>" type="text" placeholder="Enrollment Number" class="form-control input-md" required="">
                
              </div>
            </div><br>
            
            <!-- Multiple Checkboxes (inline) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="checkboxes">Year In Which admission is required</label>
              <div class="col-md-4">
                <label class="checkbox-inline" for="checkboxes-0" >
                  <input type="radio" name="year" id="checkboxes-0" value="<?php echo $arrdata['Year'] ?> " checked>
                  First
                </label>
                <label class="checkbox-inline" for="checkboxes-1">
                  <input type="radio" name="year" id="checkboxes-1" value="<?php echo $arrdata['Year'] ?> ">
                  Second
                </label>
                <label class="checkbox-inline" for="checkboxes-2">
                  <input type="radio" name="year" id="checkboxes-2" value="<?php echo $arrdata['Year'] ?> ">
                  Third
                </label>
              </div>
            </div><br>
            <!-- Multiple Checkboxes -->
<div class="form-group">
    <label class="col-md-4 control-label" for="Shift">Shift</label>
    <div class="col-md-4">
    <div class="checkbox">
      <label for="Shift-0">
        <input type="radio" name="shift" id="Shift-0" value="<?php echo $arrdata['Shift'] ?>" checked>
        I
      </label>
      </div><br>
    <div class="checkbox">
      <label for="Shift-1">
        <input type="radio" name="shift" id="Shift-1" value="<?php echo $arrdata['Shift'] ?>">
        II
      </label>
      </div>
    </div>
  </div><br>
  
  <div class="form-group">
    <label class="col-md-4 control-label" for="No. of course registered">No. of course registered</label>
    <div class="col-md-4">
      <input id="No. of course registered" name="rcourse" value="<?php echo $arrdata['No_of_Course'] ?>" type="number"  placeholder="No. of course registered" class="form-control input-md" required="">
    <!-- Text input-->
    <br>  <br>
<div class="form-group">
    <label class="col-md-4 control-label" for="Name of last examination appeared">Name of last examination appeared</label>  
    <div class="col-md-4">
    <input id="Name of last examination appeared" name="lexam" value="<?php echo $arrdata['Last_Exam'] ?> " type="text" placeholder="last examination" class="form-control input-md" required="">
      
    </div>
  </div><br>
  
  <!-- Multiple Radios (inline) -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="Result of last examination appeared">Result of last examination appeared</label>
    <div class="col-md-4"> 
      <label class="radio-inline" for="Result of last examination appeared-0">
        <input type="radio" name="result" id="Result of last examination appeared-0" value="<?php echo $arrdata['Result'] ?>" checked="checked">
        Pass
      </label> 
      <label class="radio-inline" for="Result of last examination appeared-1">
        <input type="radio" name="result" id="Result of last examination appeared-1" value="<?php echo $arrdata['Result'] ?>">
        Fail
      </label>
    </div>
  </div><br>
  
  
  <div class="form-group">
    <label class="col-md-4 control-label" for="prependedtext">Marks Obtained in last examination</label>
    <div class="col-md-4">
      <div class="input-group">

        <input id="prependedtext" name="marks" value="<?php echo $arrdata['Marks'] ?> " class="form-control" placeholder="enter marks" type="text" required="">
      </div><br>
   
<div class="form-group">
    <label class="col-md-4 control-label" for="Percentage ">Percentage Obtained</label>
    <div class="col-md-4">
      <input id="Percentage " name="percentage" value="<?php echo $arrdata['Percentage'] ?> " type="text" placeholder=" Enter Percentage" class="form-control input-md">

            </fieldset>
</div>
<br><br>
<button type="button" class="collapsible">Parental/Guardian Information </button>

<div class="content">
            <fieldset>

                <!-- Form Name -->
                <legend> <b>Parental/Guardian Information </b></legend>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Father/Mother Name</label>  
                  <div class="col-md-4">
                  <input id="textinput" name="pname" value="<?php echo $arrdata['Parent_Name'] ?>" type="text" placeholder="Father/Mother Name" class="form-control input-md">
                    
                  </div>
                </div><br>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Occupation &amp; Designation</label>  
                  <div class="col-md-4">
                  <input id="textinput" name="occupation" value="<?php echo $arrdata['Occupation'] ?>" type="text" placeholder="  Occupation/Designation" class="form-control input-md" required="">
                    
                  </div>
                </div><br>
                
                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="Contact Number">Contact Number</label>
                  <div class="col-md-4">
                    <input id="Contact Number" name="pcontact" value="<?php echo $arrdata['Phone_No'] ?>"  placeholder="Enter Contact Number" class="form-control input-md" required="">
                    <!-- Textarea -->
                    <br>  
                               
                    <br> <div class="form-group">
    <label class="col-md-4 control-label" for="Address"> Enter Address</label>
    <div class="col-md-4">                     
      <textarea class="form-control" id="Address" name="paddress" value="<?php echo $arrdata['Parent_Address'] ?>" placeholder="Enter Address"></textarea>
    </div>
  </div><br>
  
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for=" Guardian">Name of Local Guardian</label>  
    <div class="col-md-4">
    <input id=" Guardian" name="gname" value="<?php echo $arrdata['Guardian_Name'] ?>" type="text" placeholder="Name of Local Guardian" class="form-control input-md" required="">
                     <!-- Textarea -->
                     <br>  <br>
<div class="form-group">
    <label class="col-md-4 control-label" for="Address" > </label>
    <div class="col-md-4">                     
      <textarea class="form-control" id="Address" value="<?php echo $arrdata['Guardian_Address'] ?>" name="gaddress" placeholder="Enter Address"></textarea>
    </div>
  </div><br>
    <!-- Password input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="Contact Number">Contact No. 1</label>
        <div class="col-md-4">
          <input id="Contact Number" name="gcontact" value="<?php echo $arrdata['Contact_No'] ?>" placeholder="Required" class="form-control input-md" required="">
                  </div>
                </div><br>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="Contact Number">Contact No. 2</label>
                  <div class="col-md-4">
                    <input id="Contact Number" name="galtcontact" value="<?php echo $arrdata['Contact_No_2'] ?> " placeholder="optional" class="form-control input-md" >
                            </div>
                          </div><br>
                          <div class="submit"> <button type="submit" name="submit" >   submit</button></div>
                </fieldset>
                <br>
</div>



               
               
        
            
        
        </form>
        <div class="img1">
        <img src="img33.svg" alt="color scheme left" width="250px "height="250px">
      </div>
      <div class="img2">
        <img src="img26.svg" alt="color scheme left" width="500px "height="500px">
      </div>
      <div class="img3">
        <img src="img35.svg" alt="color scheme left" width="150px "height="150px">
      </div>
     
      <div class="img5">
        <img src="img34.svg" alt="color scheme left" width="50px "height="50px">
      </div>
     
      




      <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        
        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
        </script>  
        
      
       
</body>
</html>

