<?php
//Longitud de un string strlen();
$dato = "Hello World";
echo "ejemplo de stringlen ". strlen($dato);
echo
"<br>----------------------------------------------------------------------------------------------<br>";
//Encontrar la posición en un string strpos();
$dato2 = "Este es un ejeplo de uso de strpos";
echo "ejemplo de strpos:" . strpos($dato2, "de");
echo
"<br>----------------------------------------------------------------------------------------------<br>";
//Reemplazar texto con string_replace();
$dato3 = "Me especializo en Backend";
echo "$dato3 <br>";
echo str_replace("Backend", "FrontEnd", $dato3);
echo
"<br>----------------------------------------------------------------------------------------------<br>";
//Convertir el texto a minúscula con stringtoloewr();
$dato4 = "EjEmplO dE UsO dE StrtOlOwEr";
echo strtolower($dato4);
echo
"<br>----------------------------------------------------------------------------------------------<br>";
//Convertir el texto a mayaúsculas con string to upper();
$dato5 = "EjEmplO dE UsO dE StrtOUppEr";
echo strtoupper($dato5);
echo
"<br>----------------------------------------------------------------------------------------------<br>";
//obtener la cadena de la posicion que queremos con substr();
$dato6 = "Ejemplo de uso de substr();";
echo substr($dato6,10,20);
?>