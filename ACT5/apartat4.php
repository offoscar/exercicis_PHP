<?php
declare(strict_types=1);

/**
 * Calcula el preu amb IVA.
 *
 * @param float $base Preu sense IVA
 * @param float $iva  Tipus d'IVA (per defecte 0.21)
 * @return float Preu amb IVA, arrodonit a dos decimals
 */
function preuAmbIva(float $base, float $iva = 0.21): float
{
    return round($base * (1 + $iva), 2);
}

/**
 * Aplica un descompte percentual a un preu.
 *
 * @param float $preu       Preu original
 * @param int   $percentatge Percentatge de descompte (per defecte 10)
 * @return float Preu amb el descompte aplicat
 */
function aplicaDescompte(float $preu, int $percentatge = 10): float
{
    return round($preu * (1 - $percentatge / 100), 2);
}

/**
 * Torna una salutació de benvinguda.
 *
 * @param string $nom       Nom de la persona
 * @param string $salutacio Salutació (per defecte "Hola")
 * @return string Missatge de benvinguda
 */
function benvinguda(string $nom, string $salutacio = 'Hola'): string
{
    return $salutacio . ', ' . $nom . '!';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 4 · Valors per defecte</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
<h2>Exercici 1 · preuAmbIva()</h2>
<p class="resultat">Sense segon paràmetre (21 %): <?= preuAmbIva(100.0) ?></p>
<p class="resultat">Amb 0.10: <?= preuAmbIva(100.0, 0.10) ?></p>
<p class="resultat">Amb 0.04: <?= preuAmbIva(100.0, 0.04) ?></p>

<h2>Exercici 2 · aplicaDescompte()</h2>
<p class="resultat">Descompte per defecte (10 %): <?= aplicaDescompte(200.0) ?></p>
<p class="resultat">Descompte del 25 %: <?= aplicaDescompte(200.0, 25) ?></p>

<h2>Exercici 3 · benvinguda()</h2>
<p class="resultat"><?= benvinguda('Anna') ?></p>
<p class="resultat"><?= benvinguda('Marc', 'Bon dia') ?></p>
<?php
// Si poso el paràmetre opcional el primer:
//
//     function benvinguda(string $salutacio = 'Hola', string $nom): string
//
// PHP 8.3 dona aquest avís:
//     Deprecated: Optional parameter $salutacio declared before required
//     parameter $nom is implicitly treated as a required parameter
// (a PHP 8.0 era un Warning: "Required parameter $nom follows optional parameter
// $salutacio"). Els paràmetres amb valor per defecte han d'anar SEMPRE al final;
// si no, PHP no sap quin valor va a quin paràmetre. Ja ho he deixat bé a dalt.
?>
</body>
</html>
