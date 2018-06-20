<?php 
	echo "IF ELSEIF STATEMENT";
	echo "<br>";
	$marks = 150;
	if ($marks<=20) {
		echo "FAIL";
	}elseif ($marks>20 && $marks<=40) {
		echo "D";
	}elseif ($marks>40 && $marks<=60) {
		echo "C";
	}elseif ($marks>60 && $marks<=80) {
		echo "B";
	}elseif ($marks>80 && $marks<=100) {
		echo "A";
	}else
	{
		echo "INPUT CORRECT MARKS";
	}
 ?>











