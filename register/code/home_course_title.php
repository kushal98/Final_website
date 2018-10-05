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
                        <a class="navbar-brand" style="padding-top:1%;" href="#"><img src="logo.png" alt="logo" ></a>
                      </div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="home.php">Welcome! <?php echo ' '; echo $_SESSION["name"]; echo ' ';?></a></li>                         
                          <li><a href="#">Institutions</a></li>
                          <li><a href="#">Course Title</a></li>
                          <li><a href="#">Instructors</a></li>
                          <li><a href="login.php">LogOut</a></li>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
        <div class="container" style="padding-top:5%;">
          <form  method="POST">
            <h5>Course Title</h5>
            <input list="Course Title" name="course_title" style="width:250px;">
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
          <input type="submit" name="submit" value="Search">
        </div>
        <div class="container" style="padding-top:8%;">
          <?php
    @$course_title=$_POST['course_title'];
    $test_user="root";
    $test_pass="";
    $test_db="courses";
    $connect = new mysqli("localhost",$test_user,$test_pass,$test_db) or die("Unable to connect");
    if($connect){
        echo "connected succesfully \r\n ";
        echo "<br>";
    }
    $sql= "SELECT course_no,course_sub,launch_date,course_hour FROM course WHERE course_title='$course_title' ";
    $query = mysqli_query($connect,$sql);
    if (mysqli_num_rows($query) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($query)) {
            echo "no: " . $row["course_no"]. " - Course Subject: " . $row["course_sub"]. 
            " - Course Hour: " . $row["course_hour"]." - Launch Date: " . $row["launch_date"]. "<br>";
        }
    } else {
        echo "0 results";
    }

?> 

        </div>
     </body>
</html>