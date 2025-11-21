<?php
/*
Ejercicio 7. Suma de los Primeros 50 Números
Crear un script que imprima en pantalla la suma de los primeros 50 números
enteros positivos (1+2+...+50).
*/

$suma = 0;

for ($i=1;$i<=50;$i++){
    $suma += $i;
}

echo "La suma de los 50 primeros numeros es: $suma";
?>
