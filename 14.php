<?php
/*
Ejercicio 14: Dado un número entero, usa un operador ternario para mostrar si es
par o impar.
*/

$num_entero = 4;
echo "El numero es $num_entero <br>";

$resultado = ($num_entero % 2 == 0) ? "El numero es par" : "El numero es impar";
echo "$resultado";
?>