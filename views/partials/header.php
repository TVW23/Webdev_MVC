<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Bibliotheek</title>
</head>
<body>

<?php if (isset($_SESSION['user'])): ?>
    <p>Welkom, <?= $_SESSION['user'] ?>! <a href="/webdev_MVC/views/logout.php">Uitloggen</a></p>
<?php else: ?>
    <p><a href="/webdev_MVC/views/login.php">Inloggen</a> of <a href="/webdev_MVC/views/register.php">Registreren</a></p>
<?php endif; ?>

<h1>Welkom bij de bibliotheek!</h1>

