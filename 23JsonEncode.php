<?php
//Informacion de php a convertir
$datos = array(
    "nombre" => "Juan",
    "apellido" => "Perez",
    "edad"=>30
);
//imprimir los datos originales
var_dump($datos);
echo
"<br>----------------------------------------------------------------------------------------------------------------------------------<br>";
//funcion json para convertir de php a json
$datosNuevos = Json_encode($datos);
//Imprimir los datos convertidos
var_dump($datosNuevos);
?>