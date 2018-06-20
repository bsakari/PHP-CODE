<?php
if (isset($_POST['uname'])) {
  
	$connect = mysqli_connect("localhost","root","","userSave");
	if (!$connect) {
		echo "Failed to connect to the db";
	}else{
		extract($_POST);
		$insert = "INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$uname', '$pass')";
		$query = mysqli_query($connect,$insert);
		if ($query) {
			echo "Saved Successfully!!!";
		}
	}
	
	}
 ?>















 