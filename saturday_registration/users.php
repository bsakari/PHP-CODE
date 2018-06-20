<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
	<a href="saveUser.php">Add User</a>
	<table>
		<tr>
			<th>Name</th>
			<th>Password</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
		<?php 
			$connect = mysqli_connect("localhost","root","","saturday_class");
			$fetch = mysqli_query($connect, "select * from users");
			while ( $row = mysqli_fetch_assoc($fetch)) {
				extract($row);
				echo "
				<tr>
				   <td>$username</td> 
				   <td>$password</td> 
				   <td><a href='delete.php?id=$id'>Delete</a></td> 
				   <td>Update</td> 
				</tr>
				";
			}
		 ?>
	</table>
</body>
</html>
