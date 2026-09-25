<?php
const IVA = 0.21;
const BOTIGA = 'Tienda Online Oscar';
//BOTIGA 'Otra tienda';
const MONEDA = "€";
const DESCOMPTE_SOCI = 0.15;

$nomProducte = "Camiseta";
$descripcio = "Camiseta guay";
$preu = 99.99;
$unitatsDisponibles = 5;
$referencia = "CAM-123";
$iva = $preu * IVA;
$total = $preu + $iva;
$descompte = $total * DESCOMPTE_SOCI;
$totalAmbDescompte = $total - $descompte;
/****************************************************************** 

Error: intenté definir la constante de BOTIGA sin const y le puse otro nombre y me saltó:
Parse error: syntax error, unexpected single-quoted string "Otra tienda" in C:\wamp64\www\M0613\classe\ex06\index.php on line 5

******************************************************************/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= BOTIGA ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?= BOTIGA ?></h1>
        <p>Esto es la tienda online de Oscar</p>
    </header>

    <main>
        <article>
            <h2><?= $nomProducte ?></h2>
            <p class="descripcio"><?= $descripcio ?></p>
            <p class="preu">Preu sense IVA: <?= number_format($preu, 2) ?> <?= MONEDA ?></p>
            <p class="preu">IVA (<?= IVA * 100 ?>%): <?= number_format($iva, 2) ?> <?= MONEDA ?></p>
            <p class="total">Total: <?= number_format($total, 2) ?> <?= MONEDA ?></p>
            <p class="preu">Descompte soci (<?= DESCOMPTE_SOCI * 100 ?>%): -<?= number_format($descompte, 2) ?> <?= MONEDA ?></p>
            <p class="total">Total amb descompte: <?= number_format($totalAmbDescompte, 2) ?> <?= MONEDA ?></p>
            <p class="estoc">Unitats disponibles: <?= $unitatsDisponibles ?></p>
            <p class="ref"><?= $referencia ?></p>
        </article>
    </main>

    <footer>
        <p>Footer de la tienda hola</p>
    </footer>
</body>
</html>