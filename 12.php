<?php
/*
Ejercicio 12: Crea una variable que almacene la cantidad de productos comprados por un
cliente y en otra el precio de cada unidad. Usa un operador ternario para aplicar un
descuento del 20% si ha comprado más de 10 productos. Muestra la cantidad a pagar.
*/

$cantidad = 6;
$precio = 5;

$total = $cantidad * $precio;
$descuento = ($cantidad > 10) ? ($total * 0.8) : $total;

echo "El cliente ha comprado $cantidad productos que cuestan $precio € cada uno. <br>";

 if($cantidad >= 10){
    echo "Aplicando descuento loquete. <br>";
 }else{
    echo "No hay descuento brother. ";
 }

echo "Precio total: $descuento";
?>