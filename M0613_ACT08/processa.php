<?php
session_start();
require_once 'config.php';
require_once 'funcions.php';

$nom   = camp('nom');
$email = camp('email');

$titolPagina = 'Registre processat';
require 'header.php';
?>

        <h2>Dades rebudes</h2>

        <table>
            <tr><th>Nom</th><td><?= htmlspecialchars($nom) ?></td></tr>
            <tr><th>Correu electrònic</th><td><?= htmlspecialchars($email) ?></td></tr>
        </table>

        <a class="tornar" href="registre.php">Torna al registre</a>

<?php
require 'footer.php';
