<?php
$dato = "Hello World";
echo "ejemplo de stringlen ". strlen($dato);
echo
"<br>----------------------------------------------------------------------------------------------<br>";
$dato2 = "Este es un ejeplo de uso de strpos";
echo "ejemplo de strpos:" . strpos($dato2, "de");
echo
"<br>----------------------------------------------------------------------------------------------<br>";
$dato3 = "Me especializo en Backend";
echo "$dato3 <br>";
echo str_replace("Backend", "FrontEnd", $$dato3);
echo
"<br>----------------------------------------------------------------------------------------------<br>";
$dato4 = "EjEmplO dE UsO dE StrtOlOwEr";
echo strtolower($dato4);
echo strtoupper($dato4);
echo substr($dato4,20);
?>