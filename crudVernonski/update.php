<!DOCTYPE html>
<html>
<head>
    <title>Save</title>
</head>
<body>
<form method="POST" action="UpdateUserProccess.php">
<?php 
extract($_GET);
	$connect = mysqli_connect("localhost","root","","logIn");
          $fetch = mysqli_query($connect, "select * from users where id=$id");
          $row = mysqli_fetch_assoc($fetch);
          	extract($row);
 ?>
	<input type="hidden" name="id" value="<?php echo "$id"; ?>">
    <input type="text" name="uname" id="username" value="<?php echo "$username"; ?>">
    <input type="password" name="pass" id="password" value="<?php echo "$password"; ?>">
    <input type="submit" name="submit" id="submit" value="Submit">
</form>
</body>
</html>