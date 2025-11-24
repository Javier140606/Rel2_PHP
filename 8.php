<?php
/*
Ejercicio 8: Crea una variable que almacene una nota de examen y usa un operador
relacional para mostrar si el estudiante ha aprobado o suspendido (considera que la nota
mínima para aprobar es 5).
*/

$notaexamen = 4;

echo "Tu nota es $notaexamen <br>";

if ($notaexamen >= 5){
    echo "Has aprobado";
}else{
    echo "Has suspendido";
}
?>