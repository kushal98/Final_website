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
          <h5>Institution</h5>
          <input list="Institution" name="institution">
            <datalist id="Institution">
                <option value="MITx">
                <option value="Harvardx">
            </datalist>
            <br><br>
            <input type="submit" name="submit" value="Search">
        </div>
        <div class="container" style="padding-top:8%;">
          <?php
    @$institute=$_POST['institution'];
    $test_user="root";
    $test_pass="";
    $test_db="courses";
    $connect = new mysqli("localhost",$test_user,$test_pass,$test_db) or die("Unable to connect");
    if($connect){
        //echo "connected succesfully \r\n ";
        echo "<br>";
    }
    $sql= "SELECT c.course_no,c.course_title,c.course_sub,course_hour FROM course c,institute i WHERE c.course_no = i.course_no and  i.institution='$institute' ";
    $query = mysqli_query($connect,$sql);
    if (mysqli_num_rows($query) > 0) {

      echo '<table style="width:100%;border: 1px solid black;border-collapse: collapse;padding: 15px;text-align: left;">
    <tr>
    <th>Course No.</th>
    <th>Course Title</th>
    <th>Course Subject</th>
    <th>Course Hour</th>
    </tr>';

            while( $row =  $query->fetch_assoc()){
                  echo "<tr>";
                  echo  "<td>".$row["course_no"]."</td>";
                  echo  "<td>".$row["course_title"]."</td>";
                  echo  "<td>".$row["course_sub"]."</td>";
                  echo  "<td>".$row["course_hour"]."</td>";
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