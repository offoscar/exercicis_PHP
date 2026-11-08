<?php
declare(strict_types=1);

$productes = [
    ['nom' => 'Teclat mecanic RGB',   'categoria' => 'teclats',
    'preu' => 79.90,  'estoc' => 4],
    ['nom' => 'Ratoli vertical',      'categoria' => 'ratolins',
    'preu' => 29.95,  'estoc' => 7],
    ['nom' => 'Monitor 27" QHD',      'categoria' => 'monitors',
    'preu' => 289.00, 'estoc' => 0],
    ['nom' => 'Auriculars ANC',       'categoria' => 'audio',
    'preu' => 129.00, 'estoc' => 2],
    ['nom' => 'Hub USB-C 7 en 1',     'categoria' => 'accessoris',
    'preu' => 34.90,  'estoc' => 20],
    ['nom' => 'Suport per a portatil', 'categoria' => 'accessoris',
    'preu' => 24.50,  'estoc' => 0],
];

/**
 * Calcula el valor total de l'estoc (preu per unitats).
 *
 * @param array $productes Catàleg de productes
 * @return float Suma de preu per unitats de tots els productes
 */
function valorEstoc(array $productes): float
{
    $total = 0.0;
    foreach ($productes as $item) {
        $total += $item['preu'] * $item['estoc'];
    }
    return round($total, 2);
}

/**
 * Compta els productes amb l'estoc a zero.
 *
 * @param array $productes Catàleg de productes
 * @return int Nombre de productes esgotats
 */
function quantsEsgotats(array $productes): int
{
    $n = 0;
    foreach ($productes as $item) {
        if ($item['estoc'] === 0) {
            $n++;
        }
    }
    return $n;
}

/**
 * Calcula el preu mitjà dels productes.
 *
 * @param array $productes Catàleg de productes
 * @return float Preu mitjà amb dos decimals, o 0 si l'array és buit
 */
function preuMitja(array $productes): float
{
    if (count($productes) === 0) {
        return 0.0;
    }
    $suma = 0.0;
    foreach ($productes as $item) {
        $suma += $item['preu'];
    }
    return round($suma / count($productes), 2);
}

/**
 * Filtra només els productes que tenen estoc.
 *
 * @param array $productes Catàleg de productes
 * @return array Productes amb estoc superior a zero
 */
function nomesDisponibles(array $productes): array
{
    $res = [];
    foreach ($productes as $item) {
        if ($item['estoc'] > 0) {
            $res[] = $item;
        }
    }
    return $res;
}

/**
 * Troba el producte amb el preu més alt.
 *
 * @param array $productes Catàleg de productes
 * @return array El producte sencer amb el preu més alt (array buit si no n'hi ha)
 */
function elMesCar(array $productes): array
{
    $mesCar = [];
    foreach ($productes as $item) {
        if ($mesCar === [] || $item['preu'] > $mesCar['preu']) {
            $mesCar = $item;
        }
    }
    return $mesCar;
}

/**
 * Prepara un resum del catàleg.
 *
 * @param array $productes Catàleg de productes
 * @return array Array associatiu amb les claus total, disponibles i mes_car (nom del producte més car)
 */
function resumCataleg(array $productes): array
{
    $mesCar = elMesCar($productes);
    return [
        'total'       => count($productes),
        'disponibles' => count(nomesDisponibles($productes)),
        'mes_car'     => $mesCar['nom'] ?? '-',
    ];
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 7 · Funcions que treballen amb arrays</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
<h2>Exercici 1 · Funcions que tornen un valor</h2>
<p class="resultat">valorEstoc(): <?= valorEstoc($productes) ?></p>
<p class="resultat">quantsEsgotats(): <?= quantsEsgotats($productes) ?></p>
<p class="resultat">preuMitja(): <?= preuMitja($productes) ?></p>
<p class="resultat">preuMitja([]): <?= preuMitja([]) ?></p>

<h2>Exercici 2 · Funcions que tornen un array</h2>
<p class="resultat">nomesDisponibles():
<?php
$noms = [];
foreach (nomesDisponibles($productes) as $item) {
    $noms[] = htmlspecialchars($item['nom']);
}
echo implode(', ', $noms);
?>
</p>
<p class="resultat">elMesCar(): <?= htmlspecialchars(elMesCar($productes)['nom']) ?></p>

<h3>resumCataleg()</h3>
<ul>
<?php foreach (resumCataleg($productes) as $clau => $valor): ?>
    <li><?= $clau ?>: <?= htmlspecialchars((string) $valor) ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>
