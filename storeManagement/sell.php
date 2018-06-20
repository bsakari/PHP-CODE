<!DOCTYPE html>
<html>
<head>
	<title>sell goods</title>
</head>
<body>
</table>
<h1>select what you would wish to buy</h1>
<form method="GET" action="sellProduct.php">
	<h4>Item Name</h4><br>
	<input type="number" name="id" hidden>

	<select>
		<?php 
		$connect = mysqli_connect("localhost","root","","storemanagement");
		$fetch = mysqli_query($connect, "select * from stock");
		while ($row = mysqli_fetch_assoc($fetch)){
			extract($row);
			echo "<option value='$itemName'>$itemName</option>";
		}
		?>
	</select>
	<h4>Item Number</h4><br>
	<input type="number" name="itemNumber" id="itemNumber"><br>
	<?php echo "<button><a href='sellProduct.php?id=$id'>Check Cost</a></button>"; ?>
</form>

Dont know what to buy check available items click below to see <br>	
<a href="stock1.php">available items</a>
</body>
</html>