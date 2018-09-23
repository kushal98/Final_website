<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login Form</title>
		<link rel = "stylesheet" type = "text/css" href = "login.css">
		<body background="./image.jpg">
			<div class="loginbox">
				<h1>SignUp here</h1>
				<form action="insert.php" method="POST">
					<p style="text-align:left;">Username</p>
          			<input type="text" name="username" placeholder="Enter Username">
          			<p style="text-align:left;">Email</p>
					<input type="text" name="email" placeholder="Enter Email">
					<p style="text-align:left;">Password</p>
					<input type="password" name="password" placeholder="Enter Password">
					<input type="submit" name="submit" value="SignUp">
				</form>
			</div>
		</body>
	</head>
</html>