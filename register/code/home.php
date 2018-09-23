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
                          <li><a href="#">Welcome! <?php echo ' '; echo $_SESSION["name"]; echo ' ';?></a></li>                         
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
				<h4>Search your Courses</h4>
        <ul>
        <li><a href="home_instructor_name.php">Based On the Instructors Name</a></li>
        <li><a href="">Based On the Course Title</a></li>
        <li><a href="">Based on the Launch date</a></li>
        <li><a href="">Based on the Institution</a></li>
        </ul>
				<form class="multi-search-form" action="searchData.php" method="POST">
          <h5>Course No.</h5>
          <input list="Course No." name="course_no">
            <datalist id="Course No.">
                <option value="6.002x">
                <option value="6.00x">
                <option value="3.091x">
                <option value="CS50x">
            </datalist>
            <h5>Institution</h5>
          <input list="Institution" name="institution">
            <datalist id="Institution">
                <option value="MITx">
                <option value="Harvardx">
            </datalist>
            <h5>Course Title</h5>
          <input list="Course Title" name="course_title" style="width:250px;">
            <datalist id="Course Title">
                <option value="Introduction to Computer Science">
                <option value="Introduction to Solid State">
                <option value="Circuits and Electronics">
            </datalist>
            <h5>Date</h5>
          <input list="Date" name="date">
            <datalist id="Date">
                <option value="2012-10-09">
                <option value="2012-09-05">
                <option value="2012-09-26">
                <option value="2012-10-15">
            </datalist>
            <h5>Instructor</h5>
          <input list="Instructor" name="instructor">
            <datalist id="Instructor">
                <option value="Khurram Afridi">
                <option value="David Malan">
                <option value="John Guttag">
                <option value="Michael Cima">
            </datalist>
            <br><br>
          <input type="submit" name="submit" value="Search">
				</form>
			</div>

	</section>
    </body>
</html>