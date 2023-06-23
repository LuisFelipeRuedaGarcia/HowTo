<?php
$datos = '[
    {
        "nombre":"Sebastian",
        "edad":28,
        "telefono":3154442751
    },
    {
        "nombre":"Andres",
        "edad":18,
        "telefono":3124897563
    }
]';
var_dump($datos);

echo "<br>----------------------------------------------------------------------------------------------------------------------------------<br>";

$datosNuevos = json_decode($datos, true);
var_dump($datosNuevos);
echo "<br>----------------------------------------------------------------------------------------------------------------------------------<br>";

foreach($datosNuevos[0] as $key => $value){
    echo " key :".$key;
    echo "<br>";
    echo" value :".$value;
    echo "<br>";
}
?>