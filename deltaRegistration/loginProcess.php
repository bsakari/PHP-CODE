<?php 
	session_start();
	//Initialize Variables
	$username = "";
	$email = "";
	$errors = array();

	//Connect to the db
	$db = mysqli_connect("localhost","root","","registration_2");
	//Registration Code
	if (isset($_POST['reg_user'])) {
		//Receive all input values from the registration form
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
		//Form Validation:Ensure that the form is correctly filled
		//Use array_push() to get the corresponding error to $array
		if (empty($username)) {
			array_push($errors, "Username required");
		}
		if (empty($email)) {
			array_push($errors, "eMail required");
		}
		if (empty($password_1)) {
			array_push($errors, "password_1 required");
		}
		if (empty($password_2)) {
			array_push($errors, "password_2 required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		//Check the db to make the user does not exist with the same username and or password
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
		if (count($errors=0)) {
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
		//Get inputs from the user
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		if (empty($username)) {
			array_push($errors, "Username required");
		}
		if (empty($password)) {
			array_push($errors, "Password required");
		}
		//Check if there are no errors in the input then login the user
		if (count($errors==0)) {
			$password = md5($password);
			$query = "select * from users where username='$username' and password='$password'";
			$result = mysqli_query($db,$query);
			if (mysqli_num_rows($result)==1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You Are Now Loged In";
				header("location:index.php");
			}else{
				//var_dump($errors);
				array_push($errors,"Wrong username/Password Combination");
			}

		}
	}


 ?>

















