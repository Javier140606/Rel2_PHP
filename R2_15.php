<?php
/*
Ejercicio 15. Suma de Dígitos
Objetivo: Calcular la suma de los dígitos de un número entero. Por ejemplo, para el
número 12345, la suma sería 1+2+3+4+5=15. Pista: Con el operador módulo (% 10)
obtienes el último dígito, y con la división entera (/ 10) lo eliminas.
*/
$numeroOriginal = 12345;
$numero = $numeroOriginal; 
$suma = 0;

while ($numero > 0) {
    $digito = $numero % 10; 
    $suma += $digito;       
    $numero = (int)($numero / 10); 
}

echo "La suma de los dígitos de $numeroOriginal es: $suma";
?>