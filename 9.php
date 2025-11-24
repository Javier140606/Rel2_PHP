<?php
/*
Ejercicio 9: Crea una variable que almacene la edad de una persona y otra que almacene
si tiene permiso de conducir. Usa un operador lógico para mostrar si puede conducir
(debe tener más de 18 años y tener permiso de conducir).
*/

$edad = 18;
$pc = "Si";

if($edad >= 18 && $pc == "Si"){
    echo "Puedes conducir";
}else{
    echo "No puedes conducir";
}

?>