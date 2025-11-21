<?php
/*
Ejercicio 4: Crear un script que convierta una calificación numérica (0-100) a una
letra (A, B, C, D, F).
90-100: A
80-89: B
70-79: C
60-69: D
< 60: F
*/

$nota = 67;
echo "La nota es $nota<br>";

if ($nota < 60){
    echo "F";
}elseif($nota >= 60 && $nota <= 69){
    echo "D";
}elseif($nota >= 70 && $nota <= 79){
    echo "C";
}elseif($nota >= 80 && $nota <= 89){
    echo "B";
}elseif($nota >= 90 && $nota <= 100){
    echo "B";
}else{
    echo "Nota no válida";
}
?>

