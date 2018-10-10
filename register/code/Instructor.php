
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="Instructor.css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
        
        <h3>Instructors</h3>
        <br>
            <div class="row">
                <div class="col-sm-4">
                    <p><strong>Abhijit Banerjee</strong></p><br>
                    <img src="../res/225/caspar.jpg" class="img-circle person"  alt="Random Name">
                </div>
                <div class="col-sm-4">
                    <p><strong>Michael Cima</strong></p><br>
                    <img src="../res/225/chris.jpg" class="img-circle person"  alt="Random Name">
                </div>
                <div class="col-sm-4">
                    <p><strong>Robert Bowden</strong></p><br>
                    <img src="../res/225/david.jpg" class="img-circle person"  alt="Random Name">
                </div>
            </div>
        <br>

            <div class="row">
                <div class="col-sm-4">
                    <p><strong>Abhijit Banerjee</strong></p><br>
                    <img src="../res/225/earl.jpg" class="img-circle person"  alt="Random Name">
                </div>
                <div class="col-sm-4">
                    <p><strong>Eric Lander</strong></p><br>
                    <img src="../res/225/eric_lander.jpg" class="img-circle person"  alt="Random Name">
                </div>
                <div class="col-sm-4">
                    <p><strong>Robert Bowden</strong></p><br>
                    <img src="../res/225/eric.jpg" class="img-circle person"  alt="Random Name">
                </div>
            </div>

        <br>

            <div class="row">
                <div class="col-sm-4">
                    <p><strong>Abhijit Banerjee</strong></p><br>
                    <img src="../res/225/esther.jpg" class="img-circle person"  alt="Random Name">
                </div>
                <div class="col-sm-4">
                    <p><strong>Graham Ellison</strong></p><br>
                    <img src="../res/225/graham_ellison.jpg" class="img-circle person"  alt="Random Name">
                </div>
                <div class="col-sm-4">
                    <p><strong>Robert Bowden</strong></p><br>
                    <img src="../res/225/greg.jpg" class="img-circle person"  alt="Random Name">
                </div>
            </div>
        <br>

            <div class="row">
                <div class="col-sm-4">
                    <p><strong>Abhijit Banerjee</strong></p><br>
                    <img src="../res/225/isaac.jpg" class="img-circle person"  alt="Random Name">
                </div>
                <div class="col-sm-4">
                    <p><strong>Graham Ellison</strong></p><br>
                    <img src="../res/225/jack.jpg" class="img-circle person"  alt="Random Name">
                </div>
                <div class="col-sm-4">
                    <p><strong>Robert Bowden</strong></p><br>
                    <img src="../res/225/james.jpg" class="img-circle person"  alt="Random Name">
                </div>
            </div>

            <br>

                <div class="row">
                    <div class="col-sm-4">
                        <p><strong>Abhijit Banerjee</strong></p><br>
                        <img src="../res/225/john.jpg" class="img-circle person"  alt="Random Name">
                    </div>
                    <div class="col-sm-4">
                        <p><strong>Graham Ellison</strong></p><br>
                        <img src="../res/225/julie.jpg" class="img-circle person"  alt="Random Name">
                    </div>
                    <div class="col-sm-4">
                        <p><strong>Robert Bowden</strong></p><br>
                        <img src="../res/225/khurram.jpg" class="img-circle person"  alt="Random Name">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-4">
                        <p><strong>Abhijit Banerjee</strong></p><br>
                        <img src="../res/225/michael_brenner.jpg" class="img-circle person"  alt="Random Name">
                    </div>
                    <div class="col-sm-4">
                        <p><strong>Graham Ellison</strong></p><br>
                        <img src="../res/225/michael_sandel.jpg" class="img-circle person"  alt="Random Name">
                    </div>
                    <div class="col-sm-4">
                        <p><strong>Robert Bowden</strong></p><br>
                        <img src="../res/225/muellner.jpg" class="img-circle person"  alt="Random Name">
                    </div>
                </div>

                 <br>

                    <div class="row">
                        <div class="col-sm-4">
                            <p><strong>Abhijit Banerjee</strong></p><br>
                            <img src="../res/225/nate.jpg" class="img-circle person"  alt="Random Name">
                        </div>
                        <div class="col-sm-4">
                            <p><strong>Graham Ellison</strong></p><br>
                            <img src="../res/225/rob.jpg" class="img-circle person"  alt="Random Name">
                        </div>
                        <div class="col-sm-4">
                            <p><strong>Robert Bowden</strong></p><br>
                            <img src="../res/225/simona.jpg" class="img-circle person"  alt="Random Name">
                        </div>
                    </div>
                <br>
                <br>
            </div>	
        </body>
</html>