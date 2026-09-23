<?php
/****************************************************************************
 *  Aquest fitxer te 6 error, 3 de sintaxi (PHP no arranca)
 * i 3 de logica (funciona, pero el resultat no es correcte)
 * 
 * Arregla'ls d'un en un, comprovant la pagina despres de cada canvi.
 * 
 * Anota a error-trobats.md quin era, com te n'has adonat i com l'has resolt
*****************************************************************************/

$nom = 'Aina';
//nom = 'Aina';   El error es el dolar del inicio
$assignatura = 'Desenvolupament web';
//$assignatura = 'Desenvolupament web'   El error es del ; al final

$nota1 = 7;
$nota2 = 9;
$mitjana = ($nota1 + $nota2) / 2;
//$mitjana = $nota1 + $nota2 / 2;   Aqui necesita el () para la operación

echo '<h1Butleti de notes</h1>';
echo "<p>Alumna: $nom</p>";
//echo "<p>Alumna: $nom</p>";   Necesita "" en vez de comillas simples

echo '<p>Assignatura: ' . $assignatura . '</p>';
//echo '<p>Assignatura: ' + $assignatura + '</p>';   El error es de la concatenación en PHP es con . en vez de +

echo "<p>Mitjana: $mitjana</p>";
/* echo "<p>Mitjana: $mitjana</p>";    NO SE HA CERRADO EL " AL FINAL*/   

echo '<p>Generat el ' . date('d/m/y') . '</p>';