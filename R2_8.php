<?php 
/*
Ejercicio 8. Tabla de Multiplicar
Escribir un script que, dado un número (por ejemplo, el 7), muestre su tabla de
multiplicar del 1 al 10.
*/

   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $n = $_POST['num'];

    for($i=0;$i<=10;$i++){
        $tabla= ($n * $i);
        echo "$n x $i = $tabla <br>";
    }

    
   }
    

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="num">
            Número:
            <input type="text" name="num" id="num"><br>
        </label>
        <input type="submit" value="Tabla">
    </form>
</body>
</html>