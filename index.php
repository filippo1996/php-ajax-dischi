<?php

require_once __DIR__.'/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($db as $item): ?>
                <div class="col-3">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="<?= $item['poster']; ?>" class="card-img-top" alt="<?= $item['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['title']; ?></h5>
                            <p class="card-text">Autore: <?= $item['author']; ?></p>
                            <p class="card-text">Genere: <?= $item['genre']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>
</html>