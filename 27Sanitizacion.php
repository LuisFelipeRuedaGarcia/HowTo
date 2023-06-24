<?php
$CodigoScript = "<script>alert('Hola soy un script malicioso');</script>";
 /* echo $codigo_script; */
 $EjemploSanitized = filter_var($CodigoScript, FILTER_SANITIZE_STRING);
 echo
 "<br>----------------------------------------------------------------------------------------------------------------------------------<br>";
 echo $EjemploSanitized;
?>