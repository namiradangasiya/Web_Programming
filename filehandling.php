<?php
$myfile=fopen("example.txt" ,"r") or die("unable to open a file");
echo fgets($myfile);

?>

<?php
$myfile=fopen("example.txt" ,"w") or die("unable to open a file");
$txt="Hello World!!!";
fwrite($myfile,$txt);
?>

<?php

fclose($myfile);

?>