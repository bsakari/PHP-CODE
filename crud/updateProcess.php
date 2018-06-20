<?php
$connect = mysqli_connect("localhost","root","","userSave");
if (isset($_POST['id'])) 
{
  extract($_POST);
  mysqli_query($connect,"update users set username='$username', password='$password' where id=$id");
  

  
}
header("location:users.php");