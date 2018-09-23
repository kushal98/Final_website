
<!DOCTYPE html>
<html>
<body>

<?php
    $user = $_POST['inputName'];
    $pass = $_POST['inputPassword'];
    $email = $_POST['inputEmail'];
    $test_user="root";
    $test_pass="";
    $test_db="courses";
    $connect = new mysqli("localhost",$test_user,$test_pass) or die("Unable to connect");
    if($connect){
        echo "connection established successfully";
    }
    if(!mysqli_select_db($connect,'courses')){
        echo "database not selected";
    }
    $sql= "INSERT INTO login (username,email,passwd) VALUES ('$user','$email','$pass')";
    $query = mysqli_query($connect,$sql);
    if($query){
        echo "data inserted succesfully";
    }
    else
        echo "failed to insert";


?> 
</body>
</html>
