<?php
	$connect = mysqli_connect("localhost","root","","logIn");
	if (isset($_GET['id'])) {
		extract($_GET);
		mysqli_query($connect, "delete from users where id=$id");}
	$connect = mysqli_connect("localhost","root","","logIn");
	header("location:fetchUser.php");
 ?>