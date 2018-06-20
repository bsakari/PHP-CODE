<?php
echo "<center>"; 
	//While Loop
	echo "While Loop";
	echo "<br>";
	$number = 0;
	while ( $number<= 10) {
		$number++;
		echo $number;		
		echo "<br>";
	}

	//Do While Loop
	echo "Do While Loop";
	echo "<br>";
	$number_2 = 0;
	do{
		echo $number_2;
		$number_2++;
		echo "<br>";
	}while ( $number_2<= 10); 

	//For Loop
	echo"For Loop";
	echo "<br>";
	for ($mose=0; $mose <= 10; $mose++) { 
		echo $mose;
		echo "<br>";
	}
	echo "</center>";
 ?>