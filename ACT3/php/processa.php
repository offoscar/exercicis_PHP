<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<p>Has d\'arribar aqui des del formulari. ';
    echo '<a href="../registre.html">Torna-hi</a></p>';
    exit;
}

$usuari = [
    'nom'        => trim($_POST['nom'] ?? ''),
    'cognoms'    => trim($_POST['cognoms'] ?? ''),
    'naixement'  => trim($_POST['naixement'] ?? ''),
    'telefon'    => trim($_POST['telefon'] ?? ''),
    'correu'     => trim($_POST['correu'] ?? ''),
    'usuari'     => trim($_POST['usuari'] ?? ''),
    'carrer'     => trim($_POST['carrer'] ?? ''),
    'poblacio'   => trim($_POST['poblacio'] ?? ''),
    'codipostal' => trim($_POST['codipostal'] ?? ''),
    'tipus'      => trim($_POST['tipus'] ?? ''),
    'origen'     => trim($_POST['origen'] ?? ''),
    'butlleti'   => isset($_POST['butlleti']) ? 'Si' : 'No',
    'condicions' => isset($_POST['condicions']) ? 'Si' : 'No',
];

$clau  = $_POST['clau'] ?? '';
$clau2 = $_POST['clau2'] ?? '';


$errors = [];

if ($usuari['nom'] === '') {
    $errors[] = 'El nom és obligatori.';
}

if ($usuari['cognoms'] === '') {
    $errors[] = 'Els cognoms són obligatoris.';
}

if ($usuari['correu'] === '') {
    $errors[] = 'El correu és obligatori.';
} elseif (filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === false) {
    $errors[] = 'El correu no té un format valid.';
}

if (strlen($usuari['usuari']) < 4) {
    $errors[] = 'El nom d\'usuari ha de tenir com a mínim 4 caràcters.';
}

if (strlen($clau) < 6) {
    $errors[] = 'La contrasenya ha de tenir com a mínim 6 caràcters.';
}

if ($clau !== $clau2) {
    $errors[] = 'Les dues contrasenyes no coincideixen.';
}

if ($usuari['codipostal'] !== '' && preg_match('/^[0-9]{5}$/', $usuari['codipostal']) !== 1) {
    $errors[] = 'El codi postal ha de tenir exactament 5 xifres.';
}

if ($usuari['tipus'] === '') {
    $errors[] = 'Has de triar un tipus de client.';
} elseif (!in_array($usuari['tipus'], ['particular', 'professional', 'empresa'], true)) {
    $errors[] = 'El tipus de client no és valid.';
}

if (!isset($_POST['condicions'])) {
    $errors[] = 'Has d\'acceptar les condicions del servei.';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BitBazar · Registre</title>
    <link rel="stylesheet" href="../css/estils.css">
</head>
<body>

<main class="contenidor">

<?php if (count($errors) > 0): ?>

    <div class="errors">
        <h2>No s'ha pogut crear el compte</h2>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <p><a href="../registre.html">Torna al formulari</a></p>

<?php else: ?>

    <h1>Benvingut/da, <?= htmlspecialchars($usuari['nom']) ?>!</h1>
    <p class="subtitol">
        El teu compte s'ha creat correctament. Ens posarem en contacte amb tu al correu
        <strong><?= htmlspecialchars($usuari['correu']) ?></strong>.
    </p>

    <h2>Resum de les dades registrades</h2>
    <table>
        <thead>
            <tr>
                <th>Camp</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuari as $camp => $valor): ?>
                <tr>
                    <th><?= htmlspecialchars($camp) ?></th>
                    <td><?= htmlspecialchars($valor) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php endif; ?>

</main>

</body>
</html>