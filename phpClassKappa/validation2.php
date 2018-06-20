<!DOCTYPE html>
<html>
<head>
	<title>Length</title>
</head>
<body>
	<form method="GET">
		<input type="password" name="password">
		<button>Submit</button>
	</form>
	<?php 
		$psd = $_GET['password'];
		if (strlen($psd)<8) {
			echo "Your Password Must Be At Least 8 or More Characters!!";
		}
	 ?>
</body>
</html>






