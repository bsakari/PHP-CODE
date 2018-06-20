<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<form method="POST" action="updateProcess.php">
		<?php 
/*
		$connect = mysqli_connect("localhost","root","","userSave");*/
		extract($_GET);
	/*	$fetch = mysqli_query($connect,"select * from users where id=$id");
		$row=mysqli_fetch_assoc($fetch);
		extract($row); */
			
			?>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="text" name="username" id="uname" value="<?php echo $username; ?>">
			<input type="password" name="password" id="pass" value="<?php echo $password; ?>">
			<input type="submit" name="submit" id="submit" value="Save">
		</form>
	</body>
	</html>