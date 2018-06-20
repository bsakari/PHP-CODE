<!DOCTYPE html>
<html>
<head>
	<title>Grade</title>
	<style type="text/css">
		h2
		{
			color: orange;
		}
	</style>
</head>
<body>
	<h1>Grading System</h1>
	<form method="GET">
		<input type="number" name="grade">
		<button>Grade</button>
	</form>
	<?php 
		if (isset($_GET['grade'])) {
			$marks = $_GET['grade'];
	if ($marks<=20) {
		echo "FAIL";
	}elseif ($marks>20 && $marks<=40) {
		echo "<h2>D</h2>";
	}elseif ($marks>40 && $marks<=60) {
		echo "C";
	}elseif ($marks>60 && $marks<=80) {
		echo "B";
	}elseif ($marks>80 && $marks<=100) {
		echo "A";
	}else
	{
		echo "WACHA BANGI";
	}
		}
	 ?>
</body>
</html>










