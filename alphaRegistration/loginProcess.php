<?php 
	session_start();
	//Initialize Variable
	$username = "";
	$email = "";
	$errors = array();
	//Connect to the Db
	$db = mysqli_connect("localhost","root","","registration_1");
	//Register User
	if (isset($_POST['reg_user'])) {
		//Receive all inputs from the registration form
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
		//Validation
		//Ensure that the form is correctly filled.
		//Use arra_push() to get the corresponding error to $errors
		if (empty($username)) {
			array_push($errors,"Username is required");
		}
		if (empty($email)) {
			array_push($errors,"eMail is required");
		}
		if (empty($password_1)) {
			array_push($errors,"Password is required");
		}
		if (empty($password_2)) {
			array_push($errors,"Confirm Password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		//Check the db to make sure the user does not exist with the same username and or password
		$user_check_query = "select * from users where username='$username' or email='$email' limit 1";
		$result = mysqli_query($db,$user_check_query);
		$user = mysqli_fetch_assoc($result);
		if ($user['username']===$username) {
			array_push($errors, "Username already exists");
		}
		if ($user['email']===$email) {
			array_push($errors, "eMail already exists");
		}
		//Finally register the user if there are no errors in the form
		if (count($errors==0)) {
			$password = md5($password);// Encrypt your password before saving in the db
			$query = "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')";
			mysqli_query($db,$query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";

		}
		header("location:index.php");
	}
	//Login code
	if (isset($_POST['login_user'])) {
		//Receive inputs from the user
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		if (empty($username)) {
			array_push($errors,"Username Required");
		}
		if (empty($password)) {
			array_push($errors,"Password Required");
		}
		//Check if there are no errors in the form then login the user
		if (count($errors==0)) {
			$password = md5($password);
			$query = "select * from users where username='$username' and password='$password'";
			$result = mysqli_query($db,$query);
			if (mysqli_num_rows($result)==1) {
				$_SESSION['username']= $username;
				$_SESSION['success']= "You are now logged in";
				header("location:index.php");
			}else{
				array_push($errors, "Wrong username/Password combination");
			}
		}
	}
 ?>
















