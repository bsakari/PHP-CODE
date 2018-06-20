<?php include('loginProcess.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Login</h2>
	<form method="POST" action="login.php">
		Username: <br>
		<input type="text" name="username"><br>
		Password: <br>
		<input type="password" name="password"> <br>
		<input type="submit" name="login_user" value="Login">
		<br>
		Not yet a user? <a href="register.php">Register</a>
	</form>
</body>
</html>