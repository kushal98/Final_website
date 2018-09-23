<!DOCTYPE html>
<html>
<body>

<?php
    $course_no = $_POST['course_no'];
    $institution = $_POST['institution'];
    $course_title=$_POST['course_title'];
    $date = $_POST['date'];
    $instructor = $_POST['instructor'];
    $test_user="root";
    $test_pass="";
    $test_db="courses";
    $connect = new mysqli("localhost",$test_user,$test_pass,$test_db) or die("Unable to connect");
    if($connect){
        echo "connected succesfully \r\n ";
    }
    $sql= "SELECT course_no,institution,course_title,launch_date,instructor FROM course_list WHERE course_no='$course_no' and institution='$institution' and course_title='$course_title' and 
            launch_date='$date' and instructor='$instructor'";
    $query = mysqli_query($connect,$sql);
    if (mysqli_num_rows($query) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($query)) {
            echo "no: " . $row["course_no"]. " - Title: " . $row["course_title"]. " - Instructor: " . $row["instructor"]. "<br>";
        }
    } else {
        echo "0 results";
    }

?> 
</body>
</html>