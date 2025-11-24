<?php
/*
Ejercicio 12. Secuencia de Fibonacci
Generar y mostrar los primeros 15 términos de la secuencia de Fibonacci. La secuencia
empieza con 0 y 1, y cada término siguiente es la suma de los dos anteriores.
*/

$limite = 15; 
$a = 0;      
$b = 1;      

echo "Secuencia de Fibonacci (15 términos): ";
echo "$a, $b"; 

for ($i = 3; $i <= $limite; $i++) {
    
    $c = $a + $b; 

    echo ", $c";

    $a = $b;
    $b = $c;
}
?>