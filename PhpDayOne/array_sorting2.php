<?php 
	$age = array("peter"=>"35","ben"=>"20","nyanjui"=>"100","dennis"=>"101");
	$arraylenth = count($age);
	arsort($age);
	foreach ($age as $name => $name_value) {
		echo "<br>";
		echo $name;
		echo "<br>";
		echo $name_value;
	}
 ?>