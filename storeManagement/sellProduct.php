<?php 
	if (isset($_GET['itemName'])) {
		# code...
		extract($_GET);
		$net =mysqli_connect("localhost","root","","storemanagement");
		if (!$net) {
			# code...	
			echo "Failed to connect to database";
		} else{
		$item_check_query = "select * from stock";
		$result = mysqli_query($net,$item_check_query);
		$item = mysqli_fetch_assoc($result);
		if ($item['itemName']===$itemName) {
			echo "$itemName"."$itemNumber"."$cost";
       }else{
       	echo "product not in store,may come soon";
       }
       if ($item['itemNumber']>0 && $item['itemNumber']>$inumber) {
       	# code...
       	echo"products available";

       }
		}
	}
 ?>