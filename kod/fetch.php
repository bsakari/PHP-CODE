<?php 
	$servername = "localhost";
	$user = "root";
	$password = "";
	$db = "travelMate";
	header("Content-type:application/json");
	// Create connection
	$conn = mysqli_connect($servername, $user, $password,$db);
	$result = mysqli_query($conn, "select * from cities");
	$data=[];

	while ($row=mysqli_fetch_assoc($result)) {
		$data[]=$row;
	}
	$final= array('cities' => $data);
	$data= json_encode($final);
	echo $data;	
 ?>