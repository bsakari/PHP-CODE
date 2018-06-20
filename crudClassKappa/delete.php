<?php 
	$connect = mysqli_connect("localhost","root","","userSave");
	if (isset($_GET['id'])) {
		extract($_GET);
		mysqli_query($connect,"delete from users where id=$id");
	}
	header("location:fetchUser.php");
 ?>