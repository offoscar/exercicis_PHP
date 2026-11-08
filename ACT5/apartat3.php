<?php
declare(strict_types=1);

/**
 * Mostra el preu amb IVA (21 %) amb un echo.
 *
 * @param float $base Preu sense IVA
 * @return void Escriu el valor per pantalla, no el torna
 */
function preuAmbIvaEcho(float $base): void
{
    echo round($base * 1.21, 2);
}

/**
 * Calcula el preu amb IVA (21 %) i el torna.
 *
 * @param float $base Preu sense IVA
 * @return float Preu amb IVA
 */
function preuAmbIva(float $base): float
{
    return round($base * 1.21, 2);
}

/**
 * Formata un preu amb dos decimals i la paraula EUR.
 *
 * @param float $preu Preu a formatar
 * @return string Preu formatat, per exemple "1.234,50 EUR"
 */
function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 3 · return no és echo</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
<h2>Exercici 1 · echo contra return</h2>
<p class="resultat">Amb echo (100 EUR): <?php preuAmbIvaEcho(100.0); ?></p>
<p class="resultat">Amb return (100 EUR): <?= preuAmbIva(100.0) ?></p>
<p class="resultat">Amb formatPreu(): <?= formatPreu(preuAmbIva(1000.0)) ?></p>

<h2>Exercici 2 · Treballar amb el valor tornat</h2>
<?php
$preus = [79.90, 29.95, 129.00];

$total = 0.0;
foreach ($preus as $preu) {
    $total += preuAmbIva($preu);
}
?>
<p class="resultat">Total amb IVA: <?= formatPreu($total) ?></p>
<p class="resultat">Preu més car amb IVA: <?= formatPreu(preuAmbIva(max($preus))) ?></p>
<?php
// Fer el mateix amb preuAmbIvaEcho() no es pot:
//
//     $total += preuAmbIvaEcho($preu);
//     echo formatPreu(preuAmbIvaEcho(max($preus)));
//
// preuAmbIvaEcho() ja ha escrit el valor per pantalla i només torna void (null).
// Aquest valor no es pot sumar, ni formatar, ni comparar: formatPreu() rebria
// null i, amb strict_types=1, donaria un TypeError. Amb echo el valor ja s'ha
// escrit i no se'n pot fer res més; amb return, qui crida decideix què en fa.
?>
</body>
</html>
