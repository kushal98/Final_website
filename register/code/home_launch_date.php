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
          <form  action="searchData.php" method="POST">
          <h5>Launch Date Between</h5>
          <input list="Start_Date" name="start_date">
            <datalist id="Start_Date">
                <option value="2012-10-09">
                <option value="2012-09-05">
                <option value="2012-09-26">
                <option value="2012-10-15">
            </datalist>
            <br>
            <p>To</p>
        <input list="Last_Date" name="last_date">
            <datalist id="Last_Date">
                <option value="2012-10-09">
                <option value="2012-09-05">
                <option value="2012-09-26">
                <option value="2012-10-15">
            </datalist>
            <br><br>
          <input type="submit" name="submit" value="Search">
        </div>
    </body>
</html>