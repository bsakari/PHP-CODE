<!DOCTYPE html>
<html>
<head>
	<title>Add Stock</title>
</head>
<body>
	<h1>Add Stock</h1>
	<form method="POST" action="addProduct.php">
		<h4>Item Name</h4><br>
		<input type="text" name="itemName" id="itemName"><br>
		<h4>Item Number</h4><br>
		<input type="number" name="itemNumber" id="itemNumber"><br>
		<h4>Item cost</h4><br>
		<input type="number" name="cost" id="cost"><br>
		<br>
		<input type="submit" name="submit" id="submit"	value="save goods">
	</form>
</body>
</html>