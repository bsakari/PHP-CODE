<!DOCTYPE html>
<html>
<head>
	<title>Loops</title>
</head>
<body>
<h1>For Loop</h1>
<form method="GET">
	<input type="number" name="forloop">
	<button>Submit</button>
</form>
	<?php 
		if (isset($_GET['forloop'])) {
			$x = $_GET['forloop'];
			do {
				echo "The number is: $x";
				echo "<br>";
				$x++;
			}while ($x <= 100);
		}
	 ?>
</body>
</html>









