<?php 
	$marks = 20.0000000000000000000000001;
	if ($marks<=20) {
		echo "<h1>FAIL</h1>";
	}elseif ($marks>20&&$marks<=40) {
		echo "D";
	}elseif ($marks>40&&$marks<=60) {
		echo "C";
	}elseif ($marks>60&&$marks<=80) {
		echo "B";
	}elseif ($marks>80&&$marks<=100) {
		echo "A";
	}else{
		echo "Input Marks Between 0 and 100";
	}
 ?>