<?php
/*
Ejercicio 13: Crea un programa que calcule el índice de masa corporal (IMC) dada la
altura y el peso de una persona. Usa un operador relacional para indicar si está en
un rango saludable (18.5 a 24.9).
*/

$peso = 70;
$altura = 1.77;

$imc = $peso / ($altura * $altura);

echo "Mi peso es $peso y mi altura es $altura <br>";
echo "Mi IMC es ".number_format($imc, 2). "<br>";

if ($imc >= 18.5 && $imc <= 24.9){
    echo "Rango saludable";
}else{
    echo "Rango no salurable";
}

?>