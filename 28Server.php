<?php
//información con $_SERVER
$Url = $_SERVER["HTTP_HOST"];
$Url2 = $_SERVER["REQUEST_URI"];
$Name = $_SERVER["SCRIPT_NAME"];
$Port = $_SERVER["SERVER_PORT"];
$Protocolo = $_SERVER["SERVER_PROTOCOL"];

echo $Url;
echo "<br>";
echo $Url2;
echo "<br>";
echo $Name;
echo "<br>";
echo $Port;
echo "<br>";
echo $Protocolo;
echo "<br>";
?>




