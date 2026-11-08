<?php
declare(strict_types=1);

/**
 * Mostra la capçalera de la botiga.
 *
 * @return void Només escriu per pantalla
 */
function capcalera(): void
{
    echo '<header><h1>BitBazar</h1><p>Material informàtic per a tothom</p></header>';
}

/**
 * Mostra el peu de la botiga amb el nom i l'any actual.
 *
 * @return void Només escriu per pantalla
 */
function peu(): void
{
    echo '<footer>BitBazar &copy; ' . date('Y') . '</footer>';
}

/**
 * Funció declarada però que no es crida enlloc.
 *
 * @return void Només escriu per pantalla
 */
function funcioNoCridada(): void
{
    echo '<p>Aquest text no apareixerà mai a la pàgina.</p>';
}

// La funció funcioNoCridada() no fa res perquè declarar una funció no l'executa:
// només existeix fins que algú la crida pel seu nom. Com que no hi ha cap
// funcioNoCridada(); enlloc, el seu cos no s'executa mai.
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 1 · La primera funció</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
<?php capcalera(); ?>

<h2>Apartat 1 · La primera funció</h2>
<p>El peu de pàgina de sota està escrit una sola vegada al codi, però es crida tres cops.</p>

<?php
peu();
peu();
peu();
?>
</body>
</html>
