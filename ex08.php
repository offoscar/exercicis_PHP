<?php

const TITLE = 'Tabla de fracasados';

$estudiant = [
    ['Nom' => 'Oscar', 'Curs' => 'DAW2', 'Edat' => '19', 'Nota_media' => '7,2'],
    ['Nom' => 'Pau', 'Curs' => 'DAW2', 'Edat' => '19', 'Nota_media' => '8,9'],
    ['Nom' => 'Enric', 'Curs' => 'DAW2', 'Edat' => '23', 'Nota_media' => '6,7'],
    ['Nom' => 'Victor', 'Curs' => 'DAW2', 'Edat' => '20', 'Nota_media' => '9,2'],
    ['Nom' => 'Borja', 'Curs' => 'DAW2', 'Edat' => '43', 'Nota_media' => '6,5'],
    ['Nom' => 'Quim', 'Curs' => 'GAY2', 'Edat' => '18', 'Nota_media' => '2,3'],
    ['Nom' => 'Kirill', 'Curs' => 'SMIX2', 'Edat' => '19', 'Nota_media' => '1,7'],
    ['Nom' => 'Colega', 'Curs' => 'ASIX2', 'Edat' => '18', 'Nota_media' => '6,7'],
    ['Nom' => 'Blas', 'Curs' => 'ASIX2', 'Edat' => '21', 'Nota_media' => '8,7'],
    ['Nom' => 'Genis', 'Curs' => 'ASIX2', 'Edat' => '19', 'Nota_media' => '7,5'],
];

    //count — Cuenta todos los elementos de un array o en un objeto Countable
    var_dump(count($estudiant));

    //in_array — Indica si un valor pertenece a un array
    $buscar = 'Oscar';
    foreach ($estudiant as $e){
            if (in_array($buscar, $e, true)) {
            echo "<p>Got Oscar</p>";
    }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
</head>
<body>
<table>
    <tbody>
        <?php foreach ($estudiant as $alumne): ?>
            <tr>
                <td><?= $alumne['Nom'] ?></td>
                <td><?= $alumne['Curs'] ?></td>
                <td><?= $alumne['Edat'] ?></td>
                <td><?= $alumne['Nota_media'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>