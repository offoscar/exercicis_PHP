<?php
session_start();          // la PRIMERA línia, sempre

require_once 'config.php';
require_once 'funcions.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuari = camp('usuari');
    $clau   = $_POST['clau'] ?? '';

    $dades = comprovaCredencials($usuari, $clau);

    if ($dades === null) {
        $errors[] = 'Usuari o contrasenya incorrectes.';
    } else {
        session_regenerate_id(true);

        $_SESSION['usuari']  = $usuari;
        $_SESSION['nom']     = $dades['nom'];
        $_SESSION['entrada'] = date('H:i:s');

        header('Location: privat.php');
        exit;
    }
}

$titolPagina = 'Iniciar sessió';
require 'header.php';
?>

        <h2>Entra al teu compte</h2>

        <?php if (count($errors) > 0): ?>
            <div class="errors">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="login.php" method="post">
            <label for="usuari">Nom d'usuari</label>
            <input type="text" id="usuari" name="usuari">

            <label for="clau">Contrasenya</label>
            <input type="password" id="clau" name="clau">

            <button type="submit">Entrar</button>
        </form>

<?php
require 'footer.php';
