<?php
declare(strict_types=1);

/**
 * Mostra un missatge de benvinguda amb el nom.
 *
 * @param string $nom Nom de la persona a saludar
 * @return void
 */
function saluda(string $nom): void
{
    echo '<p>Hola, ' . htmlspecialchars($nom) . '! Benvingut/da a BitBazar.</p>';
}

/**
 * Mostra la fitxa d'un producte.
 *
 * @param string $nom   Nom del producte
 * @param float  $preu  Preu sense IVA
 * @param int    $estoc Unitats disponibles
 * @return void
 */
function targeta(string $nom, float $preu, int $estoc): void
{
    echo '<div class="targeta">';
    echo '<h3>' . htmlspecialchars($nom) . '</h3>';
    echo '<p>' . number_format($preu, 2, ',', '.') . ' EUR · ' . $estoc . ' unitats</p>';
    echo '</div>';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 2 · Els paràmetres</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
<h2>Exercici 1 · saluda()</h2>
<?php
saluda('Anna');
saluda('Marc');
saluda('Laia');
?>

<h2>Exercici 2 · targeta()</h2>
<div class="graella">
<?php
targeta('Teclat mecanic', 79.90, 4);
targeta('Ratoli vertical', 29.95, 7);
targeta('Auriculars ANC', 129.00, 2);
?>
</div>

<h2>Exercici 3 · Ordre dels arguments</h2>
<?php
// Crida amb l'ordre canviat a posta (el preu on va el nom):
//
//     targeta(79.90, 'Teclat mecanic', 4);
//
// Què passa: PHP llança un TypeError i la pàgina s'atura:
//     targeta(): Argument #1 ($nom) must be of type string, float given
// Per què: els arguments van per ordre. El primer valor va al primer paràmetre
// ($nom, que és string) i el segon al segon ($preu, que és float). Com que hi
// ha strict_types=1, PHP no converteix els tipus pel seu compte i ho rebutja.
//
// Ho deixo comentat perquè la pàgina no doni errors. La crida correcta és:
targeta('Teclat mecanic', 79.90, 4);
?>
</body>
</html>
