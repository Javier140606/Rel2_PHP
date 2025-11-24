<?php
/*
Ejercicio 15: Crea un programa que reciba la temperatura en grados Celsius y muestre
si el agua está congelada, en estado líquido o hirviendo (usando operadores
relacionales y ternarios).
*/

$temp_agua = 40;
echo "La temperatura del agua es $temp_agua Celsius <br>";
if ($temp_agua < 0){
    echo "El agua esta fresquita fresquita<br>";
}elseif($temp_agua > 100){
    echo "El agua esta calentita calentita<br>";
}else{
    echo "Agua sin más loquete<br><br>";
}

 $estado = ($temp_agua <= 0) ? "Congelada" : 
          (($temp_agua>= 100) ? "Hirviendo" : "Líquida"); 
  
    echo "Temperatura: $temp_agua °C<br>";
    echo "Estado del agua: " . $estado;
?>