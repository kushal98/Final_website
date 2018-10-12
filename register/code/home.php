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
          <br>
          <br>
          <br>
          <br>
          <div class="container">
          <h3>Find with multiple criteria MOOC and Free Online Courses from 
              Top Universities in a wide range of categories and subjects.</h3>
          </div>
            
		
			<div class="container" style="padding-top:5%;">
				<h3>Find MOOCs By - </h3>
        <ul>
        <li><a href="home_instructor_name.php"><h4>Based On the Instructors Name</h4></a></li>
        <li><a href="home_course_title.php"><h4>Based On the Course Title</h4></a></li>
        <li><a href="home_course_no.php"><h4>Based on the Course No.</h4></a></li>
        <li><a href="home_launch_date.php"><h4>Based on the Launch date</h4></a></li>
        <li><a href="home_institution_name.php"><h4>Based on the Institution</h4></a></li>
        </ul>
			</div>

      <div class="container" style="padding-top:5%;">
				<h3>What is A MOOC? </h3>
        <ul>
        <li><h4>MOOC stands for a Massive Open Online Course.</h4></li>
        <li><h4>It is an online course aimed at large-scale participation and open (free) access via the internet.</h4></li>
        <li><h4>They are similar to university courses, but do not tend to offer academic credit.</h4></li>
        <li><h4>A number of web-based platforms (providers Aka initiatives) supported by top universities and colleges offer MOOCs in a wide range of subjects.</h4></li>
        </ul>
			</div>
	
      <div class="container" style="padding-top:5%;">
				<h3>How to Be a Successful MOOC Student</h3>
        <p><h4>MOOCs – Massive Open Online Courses – enable students around the world to take university courses online. This guide, by the instructors of edX’s most successful MOOC in 2013-2014, Principles of Written English (based on both enrollments and rate of completion), advises current and future students how to get the most out of their online study, covering areas such as what types of courses are offered and who offers them, what resources students need, how to register, how to work effectively with other students, how to interact with professors and staff, and how to handle assignments. This second edition offers a new chapter on how to stay motivated. This book is suitable for both native and non-native speakers of English, and is applicable to MOOC classes on any subject (and indeed, for just about any type of online study).
Latest Tweets
</h4></p>

<br>
          <br>
          <br>
			</div>

  </body>
</html>