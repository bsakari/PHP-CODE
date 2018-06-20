<!DOCTYPE html>
<html>
<head>
	<title>Inclussion</title>
</head>
<body>
	<?php 
		$userAge = array("1","2","3","4","5","6","7");
		$value = "0";
		if (!in_array( $value,$userAge)) {
			echo "Kindly In Input a number between 1-7";
		}
	 ?>
</body>
</html>








