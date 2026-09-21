<?php

const IVA = 0.21;

$producte = 'Teclat';
$base = 79.90;
$estoc = 4;

//Funcion predefinida para redondear 2 deciamles round
$total = round($base * (1 + IVA), 2);

$nombre = 'Oscar';
$apellido = 'Rueda';
$direccion = 'Carretera de Terrassa';
?>

<h2><?php echo $producte ?></h2>
<p>Preu amb IVA: <?= $total; ?> EUR</p>
<p>Disponibilitat <?= $estoc ?></p>

<h2>Nombre: <?= $nombre ?></h2>
<h2>Apellido: <?= $apellido ?></h2>
<h2>Dirección: <?= $direccion ?></h2>
