<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    $_SESSION["name"] = $_POST['username'];   
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $test_user="root";
    $test_pass="";
    $test_db="courses";
    $connect = new mysqli("localhost",$test_user,$test_pass,$test_db) or die("Unable to connect");
    if($connect){
        printf("username : %s \n",$user);
        printf("password : %s \n",$pass);
        echo "connected succesfully \r\n ";
        echo "<br>";
    } 
    $sql= "SELECT * FROM login WHERE username = '$user' and passwd= '$pass'";
    $query = mysqli_query($connect,$sql);
    $num = mysqli_num_rows($query);
    
    if($num >= 1 ){
        echo "logged in succcesfully";
        header('Location: home.php');
    }
    else{
        printf("Result set has %d rows.\n",$num);
        echo "Invalid Username or password";
        header('Location: failLogin.php');
    }
?> 
</body>
</html>