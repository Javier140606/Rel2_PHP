<?php
/*
Ejercicio 11. Factorial de un Número
Calcular el factorial de un número entero no negativo. El factorial de n (escrito como n!)
es el producto de todos los enteros positivos menores o iguales a n. Ejemplo: 5! = 120.
Recuerda que el factorial de 0 es 1.
*/

$numero=5;
$factorial=1;

if($numero < 0){
    echo "Numeros negativos no ";
}else{
    for($i=1;$i<=$numero;$i++){
        $factorial *= $i;
    }

    echo "El facttorial de $numero es: $factorial";
}
?>