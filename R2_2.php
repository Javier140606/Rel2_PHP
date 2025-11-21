<?php
/*
Ejercicio 2: Desarrollar un programa que, dado el día, mes y año actual y día, mes
y año de nacimiento determine si una persona es o no mayor de edad.
*/

$fecha_Actual = new DateTime("2025-11-28"); //Fecha actual
$fecha_Nacimiento = new DateTime("2006-06-14"); //Fecha de nacimiento

$intervalo = $fecha_Actual->diff($fecha_Nacimiento);

$edad = $intervalo->y;

echo "Fecha actual: " . $fecha_Actual->format('d-m-Y') . "<br>";
echo "Fecha nacimiento: " . $fecha_Nacimiento->format('d-m-Y') . "<br>";
echo "Edad: $edad años<br>";

if ($edad >=18){
    echo "Eres mayor de edad";
}else{
    echo "Eres menor de edad";
}
?>