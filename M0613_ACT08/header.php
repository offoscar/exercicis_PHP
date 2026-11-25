<!doctype html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($titolPagina ?? 'Botiga') ?></title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
<header>
    <a class="logo" href="login.php">La meva botiga</a>
    <nav><a href="registre.php">Registre</a></nav>
    <p class="usuari">
        <?php if (isset($_SESSION['usuari'])): ?>
            Hola, <strong><?= htmlspecialchars($_SESSION['nom']) ?></strong>
            &middot; <a href="sortir.php">Sortir</a>
        <?php else: ?>
            <a href="login.php">Iniciar sessió</a>
        <?php endif; ?>
    </p>
</header>
<main>
