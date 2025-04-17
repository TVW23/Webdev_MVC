<?php require 'partials/header.php'; ?>

<h2>Beschikbare boeken</h2>
<ul>
    <?php foreach ($books as $book): ?>
        <li><strong><?= $book['title'] ?></strong> - <?= $book['author'] ?></li>
    <?php endforeach; ?>
</ul>

<?php require 'partials/footer.php'; ?>


