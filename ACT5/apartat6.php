<?php
declare(strict_types=1);

$botiga = 'BitBazar'; // variable global

/**
 * Versió dolenta: intenta fer servir $botiga sense rebre-la.
 *
 * @return string Missatge (amb el nom buit, perquè no veu $botiga)
 */
function mostra(): string
{
    return 'Som a ' . $botiga; // NO la veu: Warning
}

/**
 * Versió bona: el nom entra per un paràmetre.
 *
 * @param string $nom Nom de la botiga
 * @return string Missatge amb el nom de la botiga
 */
function mostraBe(string $nom): string
{
    return "Som a $nom";
}

/**
 * Comptador amb variable local normal: oblida el valor en acabar.
 *
 * @return int Sempre 1
 */
function comptaLocal(): int
{
    $n = 0;
    $n++;
    return $n;
}

/**
 * Comptador amb variable static: recorda el valor entre crides.
 *
 * @return int Una unitat més a cada crida
 */
function comptaStatic(): int
{
    static $n = 0;
    $n++;
    return $n;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 6 · L'àmbit de les variables</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
<h2>Exercici 1 · Variable global</h2>
<p class="resultat">Versió dolenta: <?= mostra() ?></p>
<?php
// Warning exacte del log d'errors (la ruta i la línia depenen del teu equip;
// enganxa aquí el que et surti a tu):
//     Warning: Undefined variable $botiga in .../apartat6.php on line 13
?>
<p class="resultat">Versió bona: <?= mostraBe($botiga) ?></p>

<h2>Exercici 2 · Local contra static</h2>
<p class="resultat">comptaLocal(): <?= comptaLocal() ?>, <?= comptaLocal() ?>, <?= comptaLocal() ?></p>
<p class="resultat">comptaStatic(): <?= comptaStatic() ?>, <?= comptaStatic() ?>, <?= comptaStatic() ?></p>
<?php
// comptaLocal() dona 1, 1, 1: la variable $n es crea de nou a cada crida i mor
// quan la funció acaba. comptaStatic() dona 1, 2, 3: la variable static recorda
// el seu valor entre crides, i només s'inicialitza a 0 la primera vegada.
?>
</body>
</html>
