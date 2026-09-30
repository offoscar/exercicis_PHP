<?php

const TITLE = 'Tabla de fracasados';

/* nom, curs, edat, nota_mitjana * 10; */
$estudiant = [
    ['nombre' => 'Oscar', 'curso' => 'DAW2', 'edad' => 19, 'nota_media' => 9.5],
    ['nombre' => 'Enric', 'curso' => 'DAW2', 'edad' => 40, 'nota_media' => 4.0],
    ['nombre' => 'Victor', 'curso' => 'DAW2', 'edad' => 20, 'nota_media' => 9.2],
    ['nombre' => 'Pau', 'curso' => 'DAW2', 'edad' => 19, 'nota_media' => 8],
    ['nombre' => 'Borja', 'curso' => 'DAW2', 'edad' => 33, 'nota_media' => 6],
    ['nombre' => 'Blas', 'curso' => 'ASIX2', 'edad' => 50, 'nota_media' => 1.6],
    ['nombre' => 'Colega', 'curso' => 'DAW2', 'edad' => 20, 'nota_media' => 7.8],
    ['nombre' => 'Genis', 'curso' => 'ASIX2', 'edad' => 19, 'nota_media' => 5.1],
    ['nombre' => 'Arnau', 'curso' => 'DAW2', 'edad' => 19, 'nota_media' => 8.1],
    ['nombre' => 'Quim', 'curso' => 'ASIX2', 'edad' => 19, 'nota_media' => 0.1],
];

/* count — Cuenta todos los elementos de un array o en un objeto Countable*/
echo '<p>Estudiantes: ' . count($estudiant) . '</p>';

/* in_array — Indica si un valor pertenece a un array*/
$buscar = 'Oscar';
/* Recorro cada fila del array para que sea indexado y no asociativo*/
foreach ($estudiant as $e) {
    if (in_array($buscar, $e, true)) {
    echo "<p>$buscar existe</p>";
    break;
    }
}

/* array_key_exists — Verifica si una clave existe en un array*/
$columna = 'edad';
if (array_key_exists($columna, $estudiant[0])) {
    echo "<p>La column $columna existe en el array 'estudiantes'</p>";
}

/* sort — Ordena un array en orden creciente*/
/*
    He creado una array indexado porque sino, al ordenar una
    fila del array asociativo, luego da error al crear la
    tabla
*/

$frutas = ["Pomelo", "Pera", "Manzana", "Caqui"];
sort($frutas);
foreach ($frutas as $f) {
    echo $f . " ";
}
echo "<br>";
echo '<br>';

/* rsort — Ordena un array en orden decreciente*/
rsort($frutas);
foreach ($frutas as $f) {
    echo $f . " ";
}
echo "<br>";
echo '<br>';

/* ksort — Ordena un array según las claves en orden ascendente*/
$estudiante = $estudiant[1];
ksort($estudiante);
foreach ($estudiante as $key => $val) {
    echo "$key -> $val, ";
}
echo "<br>";
echo '<br>';

/*array_sum — Calcula la suma de los valores del array*/
$nums = [6, 7, 2, 3];
echo 'Suma -> ' . array_sum($nums);
echo "<br>";
echo '<br>';

/* max — El valor más grande*/
echo 'Máximo -> ' . max($nums);
echo "<br>";
echo '<br>';

/* min — El valor más pequeño*/
echo 'Mínimo -> ' . min($nums);
echo '<br>';
echo '<br>';    

/* array_column — Devuelve los valores de una columna de un array de entrada*/
$nombres = array_column($estudiant, 'nombre');
print_r($nombres);
echo '<br>';
echo '<br>';

/* implode — Une elementos de un array en un string*/
echo implode(", ", $frutas);
echo '<br>';
echo '<br>';

/* explode — Divide una string en segmentos*/
$datos = "oscar,19,daw2,cdv,japones";
$datos_separados = explode(",", $datos);
foreach ($datos_separados as $d) {
    echo $d . "<br>";
    echo '<br>';
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
                <td><?= $alumne['nombre'] ?></td>
                <td><?= $alumne['curso'] ?></td>
                <td><?= $alumne['edad'] ?></td>
                <td><?= $alumne['nota_media'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>