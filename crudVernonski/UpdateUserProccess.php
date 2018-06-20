<?php 
    $connect = mysqli_connect("localhost","root","","logIn");
    if (isset($_POST['id'])) {
        extract($_POST);
        mysqli_query($connect, "update users set username='$uname', password='$pass' where id=$id");
    }
      header("location:fetchUser.php");
 ?>