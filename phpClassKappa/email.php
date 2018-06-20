<?php
$myfile = fopen("mfalme.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
echo fread($myfile,filesize("mfalme.txt"));
fclose($myfile);
?>