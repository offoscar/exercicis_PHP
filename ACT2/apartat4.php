<?php
$concerts = [
    ['nom' => 'Oques Grasses',  'escenari' => 'Gran',  'hora' => '22:30', 'assistents' => 4200, 'preu' => 28.0],
    ['nom' => 'Mushkaa',        'escenari' => 'Petit', 'hora' => '20:00', 'assistents' => 1850, 'preu' => 18.0],
    ['nom' => 'Figa Flawas',    'escenari' => 'Gran',  'hora' => '00:30', 'assistents' => 3600, 'preu' => 24.0],
    ['nom' => 'Julieta',        'escenari' => 'Petit', 'hora' => '21:15', 'assistents' => 2100, 'preu' => 20.0],
    ['nom' => 'Txarango',       'escenari' => 'Gran',  'hora' => '23:30', 'assistents' => 5100, 'preu' => 32.0],
    ['nom' => 'La Ludwig Band', 'escenari' => 'Petit', 'hora' => '18:45', 'assistents' => 900,  'preu' => 15.0],
];

$escenaris = [
    'Gran' => [
        'capacitat' => 6000,
        'coberta'   => 'no',
        'ubicacio'  => 'Pista central',
    ],
    'Petit' => [
        'capacitat' => 2500,
        'coberta'   => 'sí',
        'ubicacio'  => 'Pavelló',
    ],
];
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 4</title>
</head>
<body>
    <h1>Exercici 1: Concerts</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Escenari</th>
                <th>Hora</th>
                <th>Assistents</th>
                <th>Preu</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($concerts as $c): ?>
            <tr>
                <td><?= $c['nom'] ?></td>
                <td><?= $c['escenari'] ?></td>
                <td><?= $c['hora'] ?></td>
                <td><?= $c['assistents'] ?></td>
                <td><?= number_format($c['preu'], 2, ',', '.') ?> €</td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <p><strong>Tercer concert:</strong> <?= $concerts[2]['nom'] ?></p>

    <h1>Exercici 2: Escenaris</h1>
    <p><strong>Capacitat Escenari Gran:</strong> <?= $escenaris['Gran']['capacitat'] ?></p>

    <?php foreach ($escenaris as $nomEscenari => $dades): ?>
        <h2>Escenari: <?= $nomEscenari ?></h2>
        <ul>
        <?php foreach ($dades as $camp => $valor): ?>
            <li><strong><?= ucfirst($camp) ?>:</strong> <?= $valor ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>
</html>