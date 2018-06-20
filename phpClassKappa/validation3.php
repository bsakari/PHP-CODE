<!DOCTYPE html>
<html>
<head>
	<title>String</title>
</head>
<body>
	<form method="GET">
		<input type="password" name="password">
		<button>Submit</button>
	</form>
	<?php 
		$psd = $_GET['password'];
		if (is_string($psd)) {
			echo "Please Don't Use Strings";
		}
	 ?>
</body>
</html>



