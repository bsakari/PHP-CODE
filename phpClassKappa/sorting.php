<?php 
	$subjects = array("Mathematics","English","Kiswahili","Biology","Chemistry","Physics","History","Agriculture");
	rsort($subjects);
	$arrlength = count($subjects);
	for ($x=0; $x < $arrlength; $x++) { 
		echo $subjects[$x];
		echo "<br>";
	}
 ?>



