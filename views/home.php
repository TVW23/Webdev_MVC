<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Bibliotheek</title>
</head>
<body>
    <h1>Welkom bij de bibliotheek!</h1>

    <h2>Beschikbare boeken</h2>
    <ul>
        <?php foreach ($books as $book): ?>
            <li><strong><?= $book['title'] ?></strong> – <?= $book['author'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
