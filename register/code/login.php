<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login Form</title>
		<link rel = "stylesheet" type = "text/css" href = "login.css">
		<body background="./image.jpg">
			<div class="loginbox">
				<h1>Login here</h1>
				<form action="validate.php" method="POST">
					<p style="text-align:left;">Username</p>
					<input type="text" name="username" placeholder="Enter Username">
					<p style="text-align:left;">Password</p>
					<input type="password" name="password" placeholder="Enter Password">
					<input type="submit" name="submit" value="Login">
					</form>
					<a href="./SignUp.php">Don't have an account?</a>
			</div>
		</body>
	</head>
</html>