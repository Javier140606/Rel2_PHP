<?php
/*
Ejercicio 3: Escribir un script que reciba dos números y muestre en pantalla cuál
de los dos es el mayor. Considera también el caso en que ambos números sean iguales.
*/

$numero1 = 10;
$numero2 = 10;

echo "El primer número es $numero1 <br>";
echo "El segundo número es $numero2 <br>";

if($numero1 > $numero2){
    echo "$numero1 es mayor que $numero2";
}elseif($numero1 < $numero2){
    echo "$numero1 es más pequeño que $numero2";
}else{
    echo "$numero1 y $numero2 son iguales";
}
?>

