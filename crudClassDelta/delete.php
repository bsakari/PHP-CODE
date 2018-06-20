<?php 
	$connect = mysqli_connect("localhost","root","","login");
	if (isset($_GET['id'])) {
		extract($_GET);
		mysqli_query($connect, "delete from users where id=$id");
	}
	header("location:fetchUser.php");
 ?>












