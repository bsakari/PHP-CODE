<?php 
if (isset($_GET['txt'])) {
	$myfile = fopen("King.txt", "w") or die("Unable to create the file");
	fwrite($myfile, $_GET['txt']);
	fclose($myfile);
	$myfile = fopen("King.txt", "r") or die("Unable to open file");
	echo fread($myfile, filesize("King.txt"));
	fclose($myfile);
	
}
	
 ?>






