<?php

require 'pdo.php';

$query = "SELECT * FROM articles";

$stmt = $pdo->prepare($query);

$stmt->execute() or die(implode(' >> ', $stmt->errorInfo()));

$articles = array();

if($stmt->rowCount() > 0){
    $articles = $stmt->fetchAll(PDO::FETCH_OBJ);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Generating documents</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
</head>

<body>
    <div class="container mt-1">
        <h2>Generating word documents</h2>
        <div class="row">
            <?php foreach($articles as $article): ?>
            <div class="col-4">
                <div class="card">
                    <img src="img/<?= $article->img ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $article->title ?></h5>
                        <p class="card-text"><?= substr($article->content, 0, 200) ?></p>
                        <a href="word.php?id=<?= $article->id ?>" class="btn btn-primary">Download word doc</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html> 