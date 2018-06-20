<!DOCTYPE html>
<html>
<head>
	<title>Fetch</title>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Password</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
		<?php 
			$connect = mysqli_connect("localhost","root","","userSave");
			$fetch = mysqli_query($connect,"select * from users");
			while ( $row = mysqli_fetch_assoc($fetch)) {
				extract($row);
				echo "
				<tr>
					<td>$username</td>
					<td>$password</td>
					<td><a href='delete.php?id=$id'>Delete</a></td>
					<td><a href='update.php.php?id=$id'>Update</a></td>
				</tr>
				";
			}
		 ?>
	</table>
</body>
</html>










