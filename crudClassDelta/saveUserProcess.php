<?php 
	if (isset($_POST['uname'])) {
		$connect = mysqli_connect("localhost","root","","login");
		if (!$connect) {
			echo "Failed to connect";
		}else{
			extract($_POST);
			$insert = "INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$uname', '$pass')";
			//Check if submited correctly
			$query = mysqli_query($connect,$insert);
			if ($query) {
				echo "Successfully Saved!!!";
			}
		}
	}
 ?>








