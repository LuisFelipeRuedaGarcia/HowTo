<?php
//Creamos contraseña
$contraseña = "Contraseña123";
echo $contraseña;
//Crear un hash seguro de la contraseña
$hash = password_hash($contraseña, PASSWORD_DEFAULT);
echo $hash;
//Verificar la contraseña ingresada por el usuario
$ingreso = "Contraseña123";
if(password_verify($ingreso, $hash)){
    echo "<br>";
    echo "cotraseña correcta";
}
else  {
    echo "<br>";
    echo "cotraseña incorrecta";
}
?>