<?php 
	if (isset($_POST['uname'])) {
		$connect = mysqli_connect("localhost","root","","saturday_class");
		if (!$connect) {
			echo "Failed to Connect to the Db";
		}else{
			$username = $_POST['uname'];
			$password = $_POST['pass'];
			$insert = "INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password')";
			$query = mysqli_query($connect,$insert);
			if ($query) {
				echo "Saved Successfully!!!";
			}else{
				echo "Failed To Save!!!";
			}

		}
		// echo "<a href='users.php'>View Users</a>";
		header("location:users.php");
	}
 ?>





