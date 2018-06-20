<?php 
if (isset($_GET['txt'])) {
	$myfile = fopen("Document1.txt", "w") or die("Unable to create the file");
	fwrite($myfile, $_GET['txt']);
	fclose($myfile);
	$myfile = fopen("Document1.txt", "r") or die("Unable to open file");
	echo fread($myfile, filesize("Document1.txt"));
	fclose($myfile);	
}
	
 ?>