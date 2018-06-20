<!DOCTYPE html>
<html>
<head>
	<title>Swith Statement</title>
	<style type="text/css">
	h1
	{
		color: blue;
	}
	p
	{
		color: maroon;
		font-size: 2em;
	}
	h2
	{
		color: green;
	}
	h3
	{
		color: red;
	}
	h4
	{
		color: red;
	}
</style>
</head>
<body>
	<h1>BET YETU</h1>
	<p>Please Select Any Number Between 1 - 6 and Be A Lucky Winner!!!!!!</p>
	<form method="GET">
		<input type="number" name="bet">
		<button>Place Bet</button>
	</form>
	<?php 
	if (isset($_GET['bet'])) {
		$number = $_GET['bet'];
		switch ($number) {
			case 1:
			echo "<h2>Confirmed!! YOU WON Ksh1,000,000<h2>";
			break;

			case 2:
			echo "<h2>Confirmed!! YOU WON Ksh1,000<h2>";
			break;

			case 3:
			echo "<h2>Confirmed!! YOU WON Ksh2,000,000<h2>";
			break;

			case 4:
			echo "<h2>Confirmed!! YOU WON Ksh10,000<h2>";
			break;
			
			case 5:
			echo "<h2>Confirmed!! YOU WON Ksh500,000<h2>";
			break;
			case 6:
			echo "<h4> YOU LOST!!!<h4>";
			break;

			default:
			echo "<h3>PLEASE ENTER A NUMBER BETWEEN 1 - 6<h3>";
		}
	}
	?>
</body>
</html>


















