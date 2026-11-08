<?php
declare(strict_types=1);

/**
 * Calcula l'àrea d'un rectangle.
 *
 * @param float $base   Base del rectangle
 * @param float $altura Altura del rectangle
 * @return float Àrea
 */
function area(float $base, float $altura): float
{
    return $base * $altura;
}

/**
 * Indica si un producte està esgotat.
 *
 * @param int $unitats Unitats que queden
 * @return bool true si no en queda cap
 */
function esgotat(int $unitats): bool
{
    return $unitats === 0;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 5 · Els tipus i strict_types</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
<h2>Crides correctes</h2>
<p class="resultat">area(3.0, 4.0) = <?= area(3.0, 4.0) ?></p>
<p class="resultat">area(3, 4) = <?= area(3, 4) ?> (un int on s'espera un float no perd informació)</p>
<p class="resultat">esgotat(0) = <?= esgotat(0) ? 'true' : 'false' ?></p>
<p class="resultat">esgotat(5) = <?= esgotat(5) ? 'true' : 'false' ?></p>

<h2>area('3', 4.0) amb strict_types activat</h2>
<p class="resultat">
<?php
try {
    echo area('3', 4.0);
} catch (TypeError $e) {
    echo 'Error de tipus: ' . $e->getMessage();
}
?>
</p>
<?php
// L'error exacte que dona és (el número de línia pot variar):
//     area(): Argument #1 ($base) must be of type float, string given,
//     called in .../apartat5.php on line NN
?>

<h2>Arreglat amb (float)</h2>
<p class="resultat">area((float) '3', 4.0) = <?= area((float) '3', 4.0) ?></p>
<?php
// És millor que PHP t'avisi en lloc de convertir pel seu compte perquè així
// els errors es veuen de seguida. Una conversió automàtica pot amagar dades
// incorrectes (per exemple un text que no és un número) i el programa
// continuaria amb resultats equivocats sense dir res. Amb (float) la conversió
// la fas tu i es veu al codi.
?>
</body>
</html>
