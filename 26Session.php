<?php
//Iniciamos la sesion
session_start();
//Asignamos valores a la session
$_SESSION["Usuario"] = "Andrés";
$_SESSION["Contraseña"] = "Andres@campus.com";

$Usuario = "Andres";
$Contraseña="Andres@campus.com";
//ejemplos
echo "el usuario es: " . $_SESSION["Usuario"] ;
echo "<br>";
echo "la contraseña es: ". $_SESSION["Contraseña"];
echo "<br>----------------------------------------------------------------------------------------------------------------------------------<br>";
echo "el usuario es: " . $Usuario;
echo "<br>";
echo "la contraseña es: ". $Contraseña;

?>