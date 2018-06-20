<?php 
	$student = array("age1"=>"30", "age2"=>"35","age3"=>"38");
	echo "Johny is ".$student['age1']." Years old";
	echo "<br>";
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	foreach ($age as $x => $x_value) {
		echo "Key=" . $x . ", Value=" . $x_value;
		echo "<br>";
	}
 ?>







