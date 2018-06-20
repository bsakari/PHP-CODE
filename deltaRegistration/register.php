<?php include('loginProcess.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h2>Welcome. Please Register</h2>
	<form method="POST" action="register.php">
		<?php include('errors.php'); ?>
		Username: <br>
		<input type="text" name="username"><br>
		eMail: <br>
		<input type="email" name="email"><br>
		Password: <br>
		<input type="password" name="password_1"><br>
		Confirm Password: <br>
		<input type="password" name="password_2"><br>
		<input type="submit" name="reg_user" value="Register"><br>
		Already a member? <a href="login.php">Login</a>
	</form>
</body>
</html>












