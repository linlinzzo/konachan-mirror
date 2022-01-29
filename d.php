<?php
if(isset($_GET["id"])){
header('Content-type: image/jpeg');
$myfile = fopen("w.txt", "r");
$var = explode("\n",fread($myfile,filesize("w.txt")));
fclose($myfile);
$url = "https://konachan.net/sample/{$var[$_GET["id"]]}";
echo file_get_contents("$url");
exit;
}else
{
echo "id is empty.";
exit;
}
?>
