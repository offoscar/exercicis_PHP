<?php
$grups = [0 => 'Los nigamisan', 1 => 'Los enrics', 8 => 'Los victors', 9 => 'Los paus', 10 => 'Los Borjas'];
$estils = [
    'Los nigamisan' => 'Rock',
    'Los enrics'    => 'Pop',
    'Los victors'   => 'Indie',
    'Los paus'      => 'Trap',
    'Los Borjas'    => 'Rumba'
];

function recorrerInvers(array $llista) {
    end($llista);
    do {
        echo key($llista) . " => " . current($llista) . "<br>";
    } while (prev($llista));
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 2</title>
</head>
<body>
    <h1>Exercici 1: Foreach bàsic</h1>
    <ul>
    <?php foreach ($grups as $grup): ?>
        <li><?= $grup ?></li>
    <?php endforeach; ?>
    </ul>

    <h2>Versió amb posició</h2>
    <ul>
    <?php foreach ($grups as $posicio => $grup): ?>
        <li>Posició <?= $posicio ?>: <?= $grup ?></li>
    <?php endforeach; ?>
    </ul>

    <h1>Exercici 2: Foreach sobre un associatiu</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Grup</th>
                <th>Estil</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($estils as $grup => $estil): ?>
            <tr>
                <td><?= $grup ?></td>
                <td><?= $estil ?></td>
            </tr>
        <?php endforeach; ?>
            <tr>
                <td><strong>Total grups</strong></td>
                <td><?= count($estils) ?></td>
            </tr>
        </tbody>
    </table>

    <h1>Exercici 3: El mateix sense foreach</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Grup</th>
                <th>Estil</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        reset($estils);
        do {
            $grup = key($estils);
            $estil = current($estils);
            echo "<tr><td>$grup</td><td>$estil</td></tr>";
        } while (next($estils));
        ?>
            <tr>
                <td><strong>Total grups</strong></td>
                <td><?= count($estils) ?></td>
            </tr>
        </tbody>
    </table>

    <h1>Exercici 4: A l’inrevés, dins d’una funció</h1>
    <h2>Recorregut invers:</h2>
    <?php recorrerInvers($estils); ?>

    <h2>Array original (comprovació):</h2>
    <?php foreach ($estils as $grup => $estil): ?>
        <p><?= $grup ?> => <?= $estil ?></p>
    <?php endforeach; ?>
</body>
</html>