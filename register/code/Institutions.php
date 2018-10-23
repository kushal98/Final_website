
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



        <div class="container text-center">

          <br>
          <br>
          <br>
          <br>

            <h3>Institutions</h3>
            <br>
            <div class="row">
              <div class="col-sm-4">
                  <p><strong>Carnegie Mellon University</strong></p><br>
                  <img src="../res/carnegie.png" class="img-circle person"  alt="Random Name">
              </div>
              <div class="col-sm-4">
                  <p><strong>Harvard University</strong></p><br>
                  <img src="../res/harvard.jpg" class="img-circle person"  alt="Random Name">
              </div>
              <div class="col-sm-4">
                  <p><strong>MIT</strong></p><br>
                  <img src="../res/MIT.png" class="img-circle person"  alt="Random Name">
              </div>
            </div>  
            <br>

            <div class="row">
                <div class="col-sm-4">
                    <p><strong>University of North Carolina</strong></p><br>
                    <img src="../res/unc.jpg" class="img-circle person"  alt="Random Name">
                </div>
                <div class="col-sm-4">
                    <p><strong>University Of Pennsylvania</strong></p><br>
                    <img src="../res/penn.jpg" class="img-circle person"  alt="Random Name">
                </div>
                <div class="col-sm-4">
                    <p><strong>Michigan State University</strong></p><br>
                    <img src="../res/michigan.png" class="img-circle person"  alt="Random Name">
                </div>
            </div>

        <br>

             <br>

<div class="row">
    <div class="col-sm-4">
        <p><strong>Stanford University</strong></p><br>
        <img src="../res/stanford.jpg" class="img-circle person"  alt="Random Name">
    </div>
    <div class="col-sm-4">
        <p><strong>John Hopkins University</strong></p><br>
        <img src="../res/john.png" class="img-circle person"  alt="Random Name">
    </div>
    <div class="col-sm-4">
        <p><strong>University Of Texas</strong></p><br>
        <img src="../res/texas.png" class="img-circle person"  alt="Random Name">
    </div>
</div>

<br>
<br>
<br>
        </body>
</html>