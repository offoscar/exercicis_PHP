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
 * Formata un preu a l'estil català.
 *
 * @param float $preu Preu a formatar
 * @return string Preu formatat, per exemple "1.234,50 EUR"
 */
function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}

/**
 * Indica l'estat de l'estoc d'un producte.
 *
 * @param int $estoc Unitats que queden
 * @return string 'Esgotat', 'Últimes unitats' (3 o menys) o 'Disponible'
 */
function estatEstoc(int $estoc): string
{
    if ($estoc <= 0) {
        return 'Esgotat';
    }
    if ($estoc <= 3) {
        return 'Últimes unitats';
    }
    return 'Disponible';
}

/**
 * Filtra el catàleg per categoria.
 *
 * @param array  $productes Catàleg de productes
 * @param string $categoria Categoria desitjada, o 'totes' per al catàleg sencer
 * @return array Productes de la categoria (array buit si no n'hi ha cap)
 */
function filtraCategoria(array $productes, string $categoria): array
{
    if ($categoria === 'totes') {
        return $productes;
    }
    $res = [];
    foreach ($productes as $item) {
        if ($item['categoria'] === $categoria) {
            $res[] = $item;
        }
    }
    return $res;
}

/**
 * Prepara un resum del catàleg.
 *
 * @param array $productes Catàleg de productes
 * @return array Array associatiu amb total, disponibles, esgotats i valor_estoc
 */
function resumCataleg(array $productes): array
{
    $esgotats = 0;
    $valor = 0.0;
    foreach ($productes as $item) {
        if ($item['estoc'] <= 0) {
            $esgotats++;
        }
        $valor += $item['preu'] * $item['estoc'];
    }
    return [
        'total'       => count($productes),
        'disponibles' => count($productes) - $esgotats,
        'esgotats'    => $esgotats,
        'valor_estoc' => round($valor, 2),
    ];
}

/**
 * Escriu l'HTML de la targeta d'un producte.
 *
 * @param array $producte Producte amb les claus nom, categoria, preu i estoc
 * @return void
 */
function pintaTargeta(array $producte): void
{
    $estat = estatEstoc($producte['estoc']);
    $classe = match ($estat) {
        'Esgotat'         => 'estat-esgotat',
        'Últimes unitats' => 'estat-ultimes',
        default           => 'estat-disponible',
    };

    echo '<div class="targeta">';
    echo '<p class="categoria">' . htmlspecialchars($producte['categoria']) . '</p>';
    echo '<h3>' . htmlspecialchars($producte['nom']) . '</h3>';
    echo '<p>' . formatPreu(preuAmbIva($producte['preu'])) . ' (IVA inclòs)</p>';
    echo '<p class="estat ' . $classe . '">' . $estat . '</p>';
    echo '</div>';
}

/**
 * Escriu la graella sencera cridant pintaTargeta() per a cada producte.
 *
 * @param array $productes Productes a mostrar
 * @return void
 */
function pintaGraella(array $productes): void
{
    if (count($productes) === 0) {
        echo '<p class="buit">No hi ha cap producte en aquesta categoria.</p>';
        return;
    }
    echo '<div class="graella">';
    foreach ($productes as $producte) {
        pintaTargeta($producte);
    }
    echo '</div>';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>BitBazar · El catàleg</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
<header>
    <h1>BitBazar</h1>
    <p>El catàleg</p>
</header>

<h2>Resum del catàleg</h2>
<ul>
<?php foreach (resumCataleg($productes) as $clau => $valor): ?>
    <li><?= $clau ?>: <?= $clau === 'valor_estoc' ? formatPreu($valor) : $valor ?></li>
<?php endforeach; ?>
</ul>

<h2>Tots els productes</h2>
<?php pintaGraella(filtraCategoria($productes, 'totes')); ?>

<h2>Només la categoria «accessoris»</h2>
<?php pintaGraella(filtraCategoria($productes, 'accessoris')); ?>

<h2>Una categoria que no existeix («jocs»)</h2>
<?php pintaGraella(filtraCategoria($productes, 'jocs')); ?>
</body>
</html>
