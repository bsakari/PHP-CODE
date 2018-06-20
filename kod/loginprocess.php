<?php 
	if (isset($_POST['user'])) {
		//Get values passed from the user input
		$username = $_POST['user'];
		$password = $_POST['pass'];

		//To prevent mysql injection
		$username = stripcslashes($username);
		$password = stripcslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);

		//Connect to the server and select db
		mysql_connect("localhost","root","");
		mysql_select_db("travelMate");

		//Query the db for the user
		$result = mysql_query("select * from cities where username = '$username' and password = '$password'")
		or die("Faile to connect".mysql_error());

		//Fetch the queried data
		$row = mysql_fetch_array($result);

		//Check if the user is legit
		if ($row['username'] == $username &&$row['password'] == $password) {
			echo "Login Successful!!!!. Welcome".$row['username'];
		}else{
			echo "Login failed!!!";
		}
	}
 ?>