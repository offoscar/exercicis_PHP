<?php

/*
 * PAS 3 - Una sola pagina 
 * fins ara teniem dos fitxers, el formulari i el resultat
 * Mira com es fa la peticio i aixi fara una cosa o altre
 * La primera visita es amb GET i cuan es prem el botó
 * d'enviar es amb POST
*/


$nom = '';
$correu = '';
$dia = '';
$telefon = '';
$direccio = '';

$enviat = true;

//Array predefinudo $SERVER nos da informacion del servidor
/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
*/


/*Si el request method es POST es que ya se ha clicado al boton de enviar del formulario con method=post */
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nom = trim($_POST['nom'] ?? '');
    $correu = trim($_POST['correu'] ?? '');
    $dia = trim($_POST['dia'] ?? 'Sense triar');
    $telefon = trim($_POST['telefon'] ?? '');
    $direccio = trim($_POST['direccio'] ?? '');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="pas3-resultat.css">
</head>
<body>
    <h1>Inscripcio al festival</h1>

    <?php if($enviat): ?>
        <p>Inscripció rebuda: <?= $nom ?> (<?= $correu ?>), dia <?= $dia ?>, telefon <?= $telefon ?>, direccio <?= $direccio ?>,</p>
    <?php endif; ?>

    <form action="pas3-resultat.php" method="post">
        <label for="nom">Nom</label>
        <input id="nom" name="nom">

        <label for="correu">Correu electrònic</label>
        <input id="correu" name="correu" type="email">

        <label for="dia">Dia</label>
        <select id="dia" name="dia">
            <option value="divendres">Lunes</option>
            <option value="dissabte">Martes</option>
            <option value="divendres">Miercoles</option>
            <option value="dissabte">Jueves</option>
            <option value="divendres">Viernes</option>
            <option value="dissabte">Sabado</option>
            <option value="divendres">Domingo</option>
        </select>

        <label for="telefon">Telefon</label>
        <input id="telefon" name="telefon" type="tel">

        <label for="direccio">Direcció</label>
        <input id="direccio" name="direccio" type="text">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>