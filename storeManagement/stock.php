<!DOCTYPE html>
<html>
<head>
	<title>Stock Database</title>
</head>
<body>
    
     <table>
     	<tr>
     	<th>Item Name</th>
     	<th>Item Number</th>
     	<th>Cost</th>
     </tr><?php 
     $connect = mysqli_connect("localhost","root","","storemanagement");
     $fetch = mysqli_query($connect, "select * from stock");
     while ($row = mysqli_fetch_assoc($fetch)){
     	extract($row);
     	echo "<tr>
     		<td>$itemName</td>
     		<td>$itemNumber</td>
     		<td>$cost</td>
     	";
     }
      ?>
     </table>
    
    <a href="addStock.php"> <button>ADD GOODS</button></a>
</body>
</html>