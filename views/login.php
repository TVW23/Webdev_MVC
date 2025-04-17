<?php require 'partials/header.php'; ?>

<h2>Inloggen</h2>
<?php if (isset($error)): ?>
    <p style="color:red;"><?= $error ?></p>
<?php endif; ?>
<form method="post">
    Gebruikersnaam: <input type="text" name="username"><br>
    Wachtwoord: <input type="password" name="password"><br>
    <button type="submit">Inloggen</button>
</form>

<?php require 'partials/footer.php'; ?>
