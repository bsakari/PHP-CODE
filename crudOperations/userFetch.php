<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>	
	<table>
		<tr>
			<th>username</th>
			<th>password</th>
		</tr>
		<?php 
			$connect = mysqli_connect("localhost","root","","browserSave");
			$fetch = mysqli_query($connect, "select * from users");
			while ($row = mysqli_fetch_assoc($fetch)) {
				extract($row);
				echo "
				<tr>
					<td>$username</td>
					<td>$password</td>
					<td><a href='delete.php?id=$id'>Delete</a></td>
					<td><a href='update.php?id=$id'>Update</a></td>
				</tr>
				";
			}
		 ?>
	</table>
</body>
</html>