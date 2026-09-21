<?php
$nom = "Pepito";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres formas</title>
</head>
<body>
    <h1>Tres formas y el mismo resultados</h1>

    <!-- Forma 1: escribe toda la etiqueta <p> -->
    <?= "<p>Hola, $nom</p>"; ?>

    <!-- Forma 2: html está fuera, php solo pone el valor -->
    <p>Hola, <?= $nom ?></p>

    <!--Forma 3: El de toda la vida-->
    <p>Hola, Pepito</p>
</body>
</html>