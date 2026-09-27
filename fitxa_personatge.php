<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('NOM_JOC', 'Joao quest');
define('VIDA_MAXIMA', 150);
define('XP_PER_NIVELL', 1000);
define('FORCA_MAXIMA', 80);
define('PERCENTATGE_FERIT', 25.0);

$nomPersonatge = 'Joao';
$classe = 'Mag';
$nivell = 4;
$vidaActual = 32;
$forcaActual = 60;
$experienciaActual = 3450;
$atacBase = 15;

$percentatgeVida = ($vidaActual / VIDA_MAXIMA) * 100;
$percentatgeForca = ($forcaActual / FORCA_MAXIMA) * 100;

$xpTotalSeguentNivell = $nivell * XP_PER_NIVELL;
$xpFalta = $xpTotalSeguentNivell - $experienciaActual;

$poderAtac = $atacBase + ($nivell * 5);

$percentatgeVidaFormat = number_format($percentatgeVida, 1);
$percentatgeForcaFormat = number_format($percentatgeForca, 1);

$estaFerit = $percentatgeVida < PERCENTATGE_FERIT;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title><?= NOM_JOC ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #f0f0f0;
            padding: 20px;
        }
        .card {
            background-color: #2a2a2a;
            border-radius: 8px;
            padding: 20px;
            max-width: 450px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }
        .bar-container {
            background-color: #444;
            border-radius: 10px;
            height: 20px;
            width: 100%;
            margin-bottom: 15px;
            overflow: hidden;
        }
        .bar-life {
            background-color: #e74c3c;
            height: 100%;
            display: block;
        }
        .bar-strength {
            background-color: #3498db;
            height: 100%;
            display: block;
        }
        .status-ferit {
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="card">
    <h1><?= NOM_JOC ?></h1>

    <h2><?php echo "Fitxa de Personatge: $nomPersonatge"; ?></h2>

    <p><?php echo 'Classe: ' . $classe . ' | Nivell: ' . $nivell; ?></p>

    <hr>

    <h3>Estadístiques</h3>
    
    <p>Vida: <?= $vidaActual ?> / <?= VIDA_MAXIMA ?> (<?= $percentatgeVidaFormat ?>%)</p>
    <div class="bar-container">
        <span class="bar-life" style="width: <?= $percentatgeVidaFormat ?>%;"></span>
    </div>

    <p>Força: <?= $forcaActual ?> / <?= FORCA_MAXIMA ?> (<?= $percentatgeForcaFormat ?>%)</p>
    <div class="bar-container">
        <span class="bar-strength" style="width: <?= $percentatgeForcaFormat ?>%;"></span>
    </div>

    <h3>Dades de Combat i Progrés</h3>
    <ul>
        <li><strong>Poder d'atac:</strong> <?= $poderAtac ?></li>
        <li><strong>XP Faltant per pujar de nivell:</strong> <?= $xpFalta ?> XP</li>
        <li>
            <strong>Estat actual:</strong> 
            <?php if ($estaFerit): ?>
                <span class="status-ferit">El personatge està greument ferit!</span>
            <?php else: ?>
                <span>En bon estat per combatre.</span>
            <?php endif; ?>
        </li>
    </ul>
</div>

</body>
</html>