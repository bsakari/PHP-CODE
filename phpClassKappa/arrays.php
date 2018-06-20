<?php 
	$cars = array("Volvo","Toyota","Limo","Benz","Audi");
	echo $cars[0];
	echo "<br>";
	echo $cars[1];
	echo "<br>";
	echo $cars[2];
	echo "<br>";
	echo "I Like ".$cars[0].", ".$cars[1]. " and ".$cars[2].".";
	echo "<br>";
	// echo count($cars);
	$arrlength = count($cars);
	for ($x=0; $x <$arrlength ; $x++) { 
		echo $cars[$x];
		echo "<br>";
	}

 ?>


