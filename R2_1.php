<?php
/*
Ejercicio 1: Escribir un script que reciba un número y determine si es positivo,
negativo o cero.
*/

$numero = 5;
echo "El numero es $numero<br>";

if ($numero > 0){
    echo "El numero es positivo";
}elseif($numero < 0){
    echo "El numero es negativo";
}else{
    echo "El numero es 0";
}
?>