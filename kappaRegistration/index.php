<?php 
session_start();
 if (!isset($_SESSION['username'])) {
 	$_SESSION['msg'] = "You must login first";
 	header("location:login.php");
 }
 if (isset($_GET['logout'])) {
 	session_destroy();
 	unset($_SESSION['username']);
 	header("location:login.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h2>Welcome Home</h2>
	<!-- Notification -->
	<?php 
		if (isset($_SESSION['success'])) {
			echo $_SESSION['success'];
			unset($_SESSION['success']);
		}
		// Logged in user Notification
		if (isset($_SESSION['username'])) {
			echo " Welcome ".$_SESSION['username'];
			echo "<br>";
		}
		echo "<a href='index.php?logout='1''>Logout</a>";
	 ?>

</body>
</html>












