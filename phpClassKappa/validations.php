<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
</head>
<body>
	<form method="GET">
		<input type="text" name="fname">
		<button>Submit</button>
	</form>
	<?php 
	$database = $_GET['fname'];
	if (!isset($database)or empty($database)) {
		echo "Kindly Input Your Name To Proceed";																																																					
	}
 ?>

</body>
</html>





