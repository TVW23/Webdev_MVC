
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookBistro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">BookBistro</a>
        </div>
    </nav>
    
    
    <div class="container mt-5">
        <h1 class="display-4">Welkom bij BookBistro</h1>
        <h2 class="lead">Zie onze boeken in onze winkel.</h2>
    </div>
    
    <ul class="container">
        <?php foreach ($boeken as $boek) { ?>
            <li>
                <strong><?php echo $boek->getTitel(); ?></strong>
                Auteur: <?php echo $boek->getAuteur(); ?>
                Prijs: $<?php echo $boek->getPrijs(); ?>
            </li>
        <?php } ?>
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
