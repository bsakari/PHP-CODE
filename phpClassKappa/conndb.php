<?php 
	
	//Create Connection
	$connection = mysqli_connect("localhost","root","","databaseOne");
	//Check Connection
	if (!$connection) {
		die("Connection Failed").mysqli_connect_error();
	}else{
		echo "Connected Successfully!!";
	}
 ?>