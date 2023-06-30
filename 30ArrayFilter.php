<?php

$estudiantes = array(
    array("nombre"=>"Andrés","edad"=>15),
    array("nombre"=>"José","edad"=>17),
    array("nombre"=>"María","edad"=>21),
    array("nombre"=>"Ana","edad"=>25)
);
$estudiantes_menores = array_filter($estudiantes, function ($estudiante){
return $estudiante["edad"]<18;
});
var_dump($estudiantes_menores);