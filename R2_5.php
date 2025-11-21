<?php
/*
Ejercicio 5: Escribir un script que reciba un número del 1 al 7 y muestre el día de
la semana correspondiente (1 para Lunes, 2 para Martes, etc.). Si el número no está
en el rango, debe mostrar un mensaje de error. Usa la estructura switch.
*/
$dia = 4;

switch($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "No válido";
}
?>