<?php 
	if (isset($_POST['itemName'])) {
		# code...
		$net =mysqli_connect("localhost","root","","storemanagement");
		if (!$net) {
			# code...
			echo "Failed to connect to database";
		} else{
			extract($_POST);
			$insert="INSERT INTO `stock`(`id`, `itemName`, `itemNumber`, `cost`) VALUES (NULL,'$itemName','$itemNumber','$cost')";
			$query = mysqli_query($net,$insert);
			if ($query) {
				# code...
			echo "<h3><b>Goods added successfully to the stock database</b></h3>";
			}
		} 
		header("location:stock.php");
	}
	
 ?>