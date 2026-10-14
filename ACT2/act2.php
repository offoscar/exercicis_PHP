<?php
$grups[0] = 'Los nigamisan';
$grups[]  = 'Los enrics';
$grups[8] = 'Los victors';
$grups[]  = 'Los paus';
$grups[]  = 'Los Borjas';

$estils = array('Mensaje', 'Pop lolero', 'Rumbazo');
$edicions = range(2019, 2026);
$paraules = explode(' ', 'El festival mola');

$estilsAssociatiu = [
    'Los nigamisan' => 'nigamisan',
    'Los enrics'    => 'Poppopop'
];
$estilsAssociatiu['Los victors'] = 'Indios';
$estilsAssociatiu['Los paus']    = 'Los gays';
$estilsAssociatiu['Los Borjas']  = 'Los gnomos';

$grupsNum = ['Grup 1', 'Grup 2', 'Grup 3', 'Grup 4', 'Grup 5'];
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 1</title>
</head>
<body>
    <h1>Exercici 1: Les tres maneres</h1>
    <h2>Els quatre arrays</h2>
    <pre>
<?php
print_r($grups);
print_r($estils);
print_r($edicions);
print_r($paraules);
?>
    </pre>

    <h2>Comparació de sortides</h2>
    <pre>
<?php
print_r($grups);
var_dump($grups);
var_export($grups);
?>
    </pre>

    <h1>Exercici 2: L’array associatiu</h1>
    <p>Estil de Los victors: <?= $estilsAssociatiu['Los victors'] ?></p>
    <pre>
<?php print_r($estilsAssociatiu); ?>
    </pre>
    <p>Total de grups: <?= count($estilsAssociatiu) ?></p>

    <h1>Exercici 3: Esborrar una casella</h1>
    <p>Count inicial: <?= count($grupsNum) ?></p>
    <?php unset($grupsNum[2]); ?>
    <pre>
<?php print_r($grupsNum); ?>
    </pre>
    <p>Count després de unset: <?= count($grupsNum) ?></p>
    <?php $grupsNum[] = 'Grup Nou'; ?>
    <pre>
<?php print_r($grupsNum); ?>
    </pre>
</body>
</html>