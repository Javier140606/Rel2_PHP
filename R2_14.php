<?php
/*
Ejercicio 14. Patrón de Asteriscos (Triángulo)
Dibujar un triángulo rectángulo de asteriscos de una altura determinada pasada por
el usuario (por ejemplo, 5 filas). Pista: Necesitarás bucles anidados.
*/
$altura = 7;

    for($i=1;$i <= $altura;$i++){
        
        for($j=1;$j<=$i;$j++){
            echo "*";
        }

        echo "<br>";

    }

?>