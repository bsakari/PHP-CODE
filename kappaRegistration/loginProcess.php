<?php 
	session_start();
	//Initialize Variables
	$username = "";
	$email = "";
	$errors = array();
	//Connect to the Db
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	//REGISTER USER
	if (isset($_POST['reg_user'])) {
		//Receive all input values from the registration form
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
		//Form Validation: Ensure that the form is correctly filled
		//Use array_push() to get the corresponding error to $array
		if (empty($username)) {
			array_push($errors, "Username Is Required");
		}
		if (empty($email)) {
			array_push($errors, "eMail Is Required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password Is Required");
		}
		if (empty($password_2)) {
			array_push($errors, "Confirm password Is Required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two Passwords do not match");
		}
		//Check The db to make sure a user does not exist with thw same username and or password
		$user_check_query = "select * from users where username='$username' or email='$email' limit 1";
		$result = mysqli_query($db,$user_check_query);
		$user = mysqli_fetch_assoc($result);
		if ($user['username']===$username) {
			array_push($errors, "Username Already Exists");
		}
		if ($user['email']===$email) {
			array_push($errors, "eMail Already Exists");
		}
		//Finally register the user if there are no errors in the form
		if (count($errors=0)) {
			$password = md5($password_1);// Encrypt password before saving in the db.
			$query = "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')";
			mysqli_query($db,$query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			
		}

		header("location:index.php");
	}


	//Login Code
	if (isset($_POST['login_user'])) {
		//Get the inputs from the user
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		//Check if there are no errors in the input
		if (count($errors=0)) {
			$password = md5($password);
			$query = "select * from users where username='$username' and password='$password'";
			$results = mysqli_query($db,$query);
			if (mysqli_num_rows($results)==1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You Are Now Loged In";
				header("location:index.php");
				}else{
					array_push($errors, "Wrong Usernsme/Password Combination");
				}
		}
	}
	

 ?>