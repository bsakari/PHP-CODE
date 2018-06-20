<?php 
	$servername = "localhost";
	$user = "root";
	$password = "";
	$db = "travelMate";

	// Create connection
$conn = mysqli_connect($servername, $user, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>