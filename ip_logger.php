<?php
$ip = $_SERVER['REMOTE_ADDR'];
$file = fopen('ip.txt', 'a');
fwrite($file, $ip . "\n");
fclose($file);
?>