<?php
/*
Ejercicio 13. ¿Es un Número Primo?
Objetivo: Escribir un script que determine si un número dado es primo o no. Un número
primo es aquel que solo es divisible por 1 y por sí mismo.
*/
$numero = 16; 
$esPrimo = true;

if ($numero < 2) {
    $esPrimo = false; 
} else {
    for ($i = 2; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false; 
            break; 
        }
    }
}

if ($esPrimo) {
    echo "El número $numero ES primo.";
} else {
    echo "El número $numero NO es primo.";
}
?>