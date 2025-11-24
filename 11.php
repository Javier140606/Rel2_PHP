<?php
/*
Ejercicio 11: Gervasio y Facundina quieren ir al cine para ver una película que está
restringida a mayores de edad (18 o más años). Diseña un programa en PHP que lea
las edades de Gervasio y Facundina e indique si ambos pueden ver la película juntos,
si solamente uno de ellos puede verla o si no puede verla ninguno.
*/

$edad_Gervasio = 17;
$edad_Facundina = 18;

echo "Gervasio tiene $edad_Gervasio años <br>";
echo "Facundina tiene $edad_Facundina años <br>";

$ger_si = ($edad_Gervasio >= 18);
$facu_si = ($edad_Facundina >= 18);

if ($ger_si && $facu_si){
    echo "Ambos pueden ver la peli";
}elseif($ger_si){
    echo "Solo Ger puede verla";
}elseif($facu_si){
    echo "Solo Facu puede verla";
}else{
    echo "Ninguno puede verla";
}
    

?>
    


