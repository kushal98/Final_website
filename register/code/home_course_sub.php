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
                              <li><a href="home_course_sub.php">Based on the Course Subject</a></li>
                              <li><a href="home_launch_date.php">Based on the Launch date</a></li>
                              <li><a href="home_institution_name.php">Based on the Institution</a></li>
                              <li><a href="home_add_instructor.php">Add Instructor</a></li>
                              <li><a href="check_inst_rating.php">Check Instructor Rating</a></li>
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
          <h5>Course Subject</h5>
          <input list="Course_Subject" name="course_sub">
            <datalist id="Course_Subject">
                <option value="Government">
                <option value="Health">
                <option value="Engineering">
                <option value="Mathematics">
                <option value="Science">
                <option value="Technology">
                <option value="Design">
                <option value="Education">
                <option value="Humanitites">
                <option value="History">
                <option value="Religion">
                <option value="Computer Science">
            </datalist>
            <br><br>
            <input type="submit" name="submit" value="Search">
        </div>
        <div class="container" style="padding-top:8%;">
          <?php
    @$sub=$_POST['course_sub'];
    $test_user="root";
    $test_pass="";
    $test_db="courses";
    $connect = new mysqli("localhost",$test_user,$test_pass,$test_db) or die("Unable to connect");
    if($connect){
        //echo "connected succesfully \r\n ";
        echo "<br>";
    }
    $sql= "SELECT c.course_no,c.course_title,c.course_hour,c.course_rating FROM course c,course_subject cs WHERE c.course_no = cs.course_no and cs.course_sub ='$sub' ";
    $query = mysqli_query($connect,$sql);
    if (mysqli_num_rows($query) > 0) {

      echo '<table style="width:100%;border: 1px solid black;border-collapse: collapse;padding: 15px;text-align: left;">
    <tr>
    <th>Course No.</th>
    <th>Course Title</th>
    <th>Course Hour</th>
    <th>Course Rating</th>
    </tr>';

            while( $row =  $query->fetch_assoc()){
                  echo "<tr>";
                  echo  "<td>".$row["course_no"]."</td>";
                  echo  "<td>".$row["course_title"]."</td>";
                  echo  "<td>".$row["course_hour"]."</td>";
                  echo  "<td>".$row["course_rating"]."</td>";
                  echo "</tr>";
            }
      
      echo "</table>";
    } 
else {
        echo "0 results";
    }

?> 

        </div>
     </body>
</html>