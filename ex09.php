<?php

/*

Funciones preestablecidas de PHP

    isset() --> Permite saber si una variable existe en nuestro programa
    unset() --> Para liberar espacio en memoria (destruir) de una variable


*/

$var = "10";
if(isset($var)){
    echo "La variable $var existe";
}

unset($var);
if(isset($var)){
    echo "La variable $var no existe";
}else{
    echo "La variable $var existe"; 
}

echo "</br>";

    //gettype() --> Obtener el tipo de variable que introducimos
    //settype() --> Asignas el tipo a una variable 
    //empty() --> Funcion que mira si está vacia, no existe o su valor es 0
    //is_integer($var), is_array($var), is_double($var), is_string($var), etc --> Para saber si la variable es lo mismo que la funcion

    //ex1: for para la tabla de multiplicar del 5 var existe?

    for($i = 1; $i <= 10; $i++){
        $resultado = 5 * $i;
        echo "5 x $i = $resultado </br>";  
    }

    //ex2: Mostrar los numeros pares del 1 al 1000
    for($i = 1; $i <= 1000; $i++){
        if($i % 2 === 0){
            echo "$i " . " ";
        }
    }

    //ex3: Dibujar una tabla en HTML donde salgan las tablas de multiplicar del 1 al 10


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>tabla 1</th>
        <th>tabla 2</th>
        <th>tabla 3</th>
        <th>tabla 4</th>
        <th>tabla 5</th>
        <th>tabla 6</th>
        <th>tabla 7</th>
        <th>tabla 8</th>
        <th>tabla 1</th>
        <th>tabla 10</th>
    </tr>
    <?php for($i = 1; $i <= 10; $i++) : ?>
        <tr>
        <?php for($j = 1; $j <= 10; $j++) : ?>
          <td> <?= "$j x $i = " . ($i * $j) ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>

    </table>
</body>
</html>