<?php
header("Cache-Control: no-cache");
header('Content-type: image/jpeg');
$r = mt_rand(0,61);
$myfile = fopen("w.txt", "r");
$var = explode("\n",fread($myfile,filesize("w.txt")));
fclose($myfile);
$url = "https://konachan.net/sample/{$var[$r]}";
echo file_get_contents("$url");
exit;
?>
