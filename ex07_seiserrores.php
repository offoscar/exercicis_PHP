<?php
/**
* Aquest fitxer té 6 errors. Alguns aturen la pàgina, altres no.
* Abans de començar, assegura't que veus els errors: si la pàgina
* surt en blanc, revisa la configuració de l’Exercici 1.
*/

const IVA = 0.21;

$botiga = 'Tienda Molona';
//El error de SINTAXIS ocurre porque no está con $
//botiga = ‘Tienda Molona’;

$producte = 'Producto to flama';
//El error de SINTAXIS ocurre porque al final no está cerrado con ;
//$producte = ‘Producto to flama’

$preu = 34.90;
$unitats = 2;

$subtotal = $preu * $unitats;

$importIva = $subtotal * IVA;
//El error de LOGICA ocurre porque está llamando la constante de IVA con $ cuando no se //debe hacer asi.
//importIva = $subtotal * $IVA;

$total = $subtotal + $importIva;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Tiquet</title>
</head>
<body>
    <h1><?php echo $botiga; ?></h1>
   //El error de EXECUCIÓ ocurre porque la etiqueta de php no está añadida.
   //<h1><? echo $botiga; ?></h1>

    <p>Producte: <?= $producte ?></p>
    <p>Unitats: <?= $unitats ?></p>

    <?php
    echo '<p>Preu unitari: ' . $preu . ' EUR</p>';
   //El error de EXECUCIÓ ocurre porque en PHP la concatenación se hace con . en vez de +
   // echo '<p>Preu unitari: ' + $preu + ' EUR</p>';

    echo "<p>Subtotal: $subtotal EUR</p>";
   // El error de LOGICA ocurre porque no se mostrará el valor de $subtotal ya que está dentro de ‘’ en vez de “”
   // echo '<p>Subtotal: $subtotal EUR</p>';
    ?>

    <p>IVA: <?= $importIva ?> EUR</p>
    <p>Total: <?= $total ?> EUR</p>
</body>
</html>
