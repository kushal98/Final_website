<!DOCTYPE html>
<html>
<body>

<?php
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $test_user="root";
    $test_pass="";
    $test_db="courses";
    $connect = new mysqli("localhost",$test_user,$test_pass,$test_db) or die("Unable to connect");
    if($connect){
        echo "connected succesfully \r\n ";
        echo "<br>";
    } 
    $sql= "INSERT INTO login (username,email,passwd) VALUES ('$user','$email','$pass')";
    $query = mysqli_query($connect,$sql);
    if($query){
        echo "query executed";
        header('Location: login.php');
    }else{
        header('Location: failSignUp.php');
    }
?> 
</body>
</html>
