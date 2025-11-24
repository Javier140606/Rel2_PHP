<?php
/*
Ejercicio 16. El Juego "FizzBuzz"
Escribir un script que imprima los números del 1 al 100, pero con las siguientes reglas:
Múltiplos de 3: "Fizz"
Múltiplos de 5: "Buzz"
Múltiplos de 3 y 5: "FizzBuzz"
*/
for ($i = 1; $i <= 100; $i++) {
    
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    }elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    }elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    }else {
        echo "$i<br>";
    }
}
?>