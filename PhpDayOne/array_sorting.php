<?php 
	$cars = array("limo","benz","marcedes","prado");
	$arraylength = count($cars);
	rsort($cars);
	for ($x=0; $x < $arraylength; $x++) { 
		echo $cars[$x];
		echo "<br>";
	}
 ?>