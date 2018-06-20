<!DOCTYPE html>
<html>
<head>
	<title>Grading</title>
</head>
<body>
	<h1>Grading System</h1>
	<hr>
	<form>
		<input type="number" name="alama" method="GET">
		<input type="submit" name="submit" value="Grade">
	</form>
	<?php 
		if (isset($_GET['alama'])) {
			$marks = $_GET['alama'];
			if ($marks<20) {
				echo "Fail";
			}elseif ($marks>20&&$marks<=40) {
				echo "D";
			}elseif ($marks>40&&$marks<=60) {
				echo "C";
			}elseif ($marks>60&&$marks<=80) {
				echo "B";
			}elseif ($marks>80&&$marks<=100) {
				echo "A";
			}else{
				echo "Input Marks Between 0 - 100";
			}
		}
	 ?>
</body>
</html>


