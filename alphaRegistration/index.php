<?php 
session_start(); 
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You Must Login First";
	header("location:login.php");
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h2>Welcome Home</h2>
	<!-- notification -->
	<?php 
		if (isset($_SESSION['success'])) {
			echo $_SESSION['success'];
			unset($_SESSION['success']);
		}
		//Logged user info
		if (isset($_SESSION['username'])) {
			echo "Welcome ".$_SESSION['username'];
		}
		echo "<a href='index.php?logout='1''>Logout</a>";
	 ?>

</body>
</html>














