<?php
$cartell = ['Txarango', 'Mushkaa', 'Julieta', 'Figa Flawas'];

function buscaGrup(array $llista, string $grup): int|string {
    foreach ($llista as $posicio => $nom) {
        if ($nom === $grup) {
            return $posicio;
        }
    }
    return -1;
}

$assistents = [
    'Txarango'    => 5100,
    'Mushkaa'     => 1850,
    'Julieta'     => 2100,
    'Figa Flawas' => 3600,
    'Los victors' => 900
];

$c1 = $c2 = $c3 = $c4 = $assistents;
asort($c1);
arsort($c2);
ksort($c3);
krsort($c4);

$assistentsShuffle = $assistents;
shuffle($assistentsShuffle);

$grupsNom = array_keys($assistents);
shuffle($grupsNom);
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 3</title>
</head>
<body>
    <h1>Exercici 1: Buscar un grup</h1>
    <p><?= in_array('Julieta', $cartell, true) ? "Julieta actua al festival!" : "Julieta no és al cartell." ?></p>
    <p><?= in_array('Oques Grasses', $cartell, true) ? "Oques Grasses actua al festival!" : "Oques Grasses no és al cartell." ?></p>
    
    <p>Posició de 'Julieta': <?= buscaGrup($cartell, 'Julieta') ?></p>
    <p>Posició de 'Oques Grasses': <?= buscaGrup($cartell, 'Oques Grasses') ?></p>

    <h1>Exercici 2: Les quatre ordenacions</h1>
    <h2>asort</h2>
    <pre><?php print_r($c1); ?></pre>
    <h2>arsort</h2>
    <pre><?php print_r($c2); ?></pre>
    <h2>ksort</h2>
    <pre><?php print_r($c3); ?></pre>
    <h2>krsort</h2>
    <pre><?php print_r($c4); ?></pre>

    <h1>Exercici 3: Barrejar el cartell</h1>
    <h2>Resultat de shuffle directament:</h2>
    <pre><?php print_r($assistentsShuffle); ?></pre>

    <h2>Ordre del sorteig (correcte):</h2>
    <ol>
    <?php foreach ($grupsNom as $grup): ?>
        <li><?= $grup ?></li>
    <?php endforeach; ?>
    </ol>
</body>
</html>