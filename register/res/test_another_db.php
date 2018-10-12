<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    
            <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" style="padding-top:1%;" href="home.php"><img src="logo.png" alt="logo" ></a>
                      </div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="home.php">Welcome! <?php echo ' '; echo $_SESSION["name"]; echo ' ';?></a></li>                         
                          <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Find MOOC By
                              <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                              <li><a href="home_instructor_name.php">Based On the Instructors Name</a></li>
                              <li><a href="home_course_title.php">Based On the Course Title</a></li>
                              <li><a href="home_course_no.php">Based on the Course No.</a></li>
                              <li><a href="home_launch_date.php">Based on the Launch date</a></li>
                              <li><a href="home_institution_name.php">Based on the Institution</a></li>
                              </ul>
                          </li>
                          <li><a href="institutions.php">Institutions</a></li>
                          <li><a href="instructor.php">Instructors</a></li>
                          <li><a href="login.php">Logout</a></li>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                  
        <div class="container" style="padding-top:5%;">
          <form  method="POST">
            <h3>Course Title</h3>
            <input style="height:30px;width: 400px;" list="Course Title" name="course_title" style="width:250px;">
                <datalist id="Course Title">
                    <option value="Introduction to Computer Science">
                    <option value="Introduction to Solid State">
                    <option value="Circuits and Electronics">
                    <option value="Introduction to Computer Science and Programming">
                    <option value="Quantitative Methods in Clinical Research">
                    <option value="The Challenges of Global Poverty">
                    <option value="The Ancient Greek Hero">
                    <option value="Classical Mechanics">
                    <option value="Global Architecture">
                    <option value="Electricity and Magnetism">
                    <option value="Justice">
                </datalist>
            <br><br>
          <h4><input style="height:25px;" type="submit" name="submit" value="Search"></h4>
        </div>
        <div class="container" style="padding-top:8%;">
          <?php
    @$image_id=$_POST['image_id'];
    $test_user="root";
    $test_pass="";
    $test_db="test";
    $connect = new mysqli("localhost",$test_user,$test_pass,$test_db) or die("Unable to connect");
    $sql= "SELECT image_ FROM image WHERE image_id='$image_id' ";
    $query = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($query);
    //header("Content-type: image/jpg");
    echo $row['image_'];
        
    

    ////$sth = $db->query($sql);
//$result=mysqli_fetch_array($sth);
?> 