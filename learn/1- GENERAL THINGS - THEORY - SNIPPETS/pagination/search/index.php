<?php

/**
 * To test this, you have to search for the word "new" to get good results... (FrontEnd homepage)
 */

require 'pdo.php';

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $url = "?search=$search";
} else {
    $search = '';
    $url = '?';
}

$pageSize = 2;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$start = ($page - 1) * $pageSize;

$allQuery = "SELECT articles.id FROM articles
                JOIN
                    writers
                ON
                    writers.id = author
                WHERE
                    MATCH(title, content) AGAINST(:search IN BOOLEAN MODE)
                OR
                    MATCH(name) AGAINST(:search IN BOOLEAN MODE)";
$allStmt = $pdo->prepare($allQuery);
$allStmt->bindParam(':search', $search);
$allStmt->execute() or die(implode(' >> ', $allStmt->errorInfo()));

$totalRegister = $allStmt->rowCount();

$totalPages = ceil($totalRegister / $pageSize);

$searchQuery = "SELECT articles.*, name FROM articles
                JOIN
                    writers
                ON
                    writers.id = author
                WHERE
                    MATCH(title, content) AGAINST(:search IN BOOLEAN MODE)
                OR
                    MATCH(name) AGAINST(:search IN BOOLEAN MODE)
                LIMIT {$start}, {$pageSize}";

$searchStmt = $pdo->prepare($searchQuery);

$searchStmt->bindParam(':search', $search);

$searchStmt->execute() or die(implode(' >> ', $searchStmt->errorInfo()));

$articles = array();

if ($searchStmt->rowCount() > 0) {

    $articles = $searchStmt->fetchAll(PDO::FETCH_OBJ);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
    <style>
        /* Import bootstrap */
        @import url('css/bootstrap.css');

        /* Thumbnail CSS */
        .thumbnail {
            position: relative;
            width: 100px;
            height: 100px;
            overflow: hidden;
        }

        .thumbnail img {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 100%;
            width: auto;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="container mt-2">
        <!-- Search form -->
        <h2>Search</h2>
        <form action="index.php" method="get">
            <div class="form-group">
                <input type="text" class="form-control" name="search">
            </div>
            <button type="submit" class="btn btn-outline-success">Search</button>
        </form>
        <!-- Search form -->
        <hr>
        <?php if (count($articles) > 0) : ?>
        <h3>Results:</h3>
        <!-- Bootstrap pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <?php if ($page > 1) : ?>
                <li class="page-item">
                    <a class="page-link" href="index.php<?= $url ?>&page=<?= ($page - 1) ?>" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <?php endif ?>
                <?php for ($p = 1; $p <= $totalPages; $p++) : ?>
                <li class="page-item <?= $p == $page ? 'active' : '' ?>">
                    <a class="page-link" href="index.php<?= $url ?>&page=<?= $p ?>"><?= $p ?></a>
                </li>
                <?php endfor ?>
                <?php if ($page < $totalPages) : ?>
                <li class="page-item">
                    <a class="page-link" href="index.php<?= $url ?>&page=<?= $page + 1 ?>">Next</a>
                </li>
                <?php endif ?>
            </ul>
        </nav>
        <!-- Bootstrap pagination -->
        <?php foreach ($articles as $article) : ?>
        <!-- Bootstrap media object -->
        <div class="media">
            <div class="thumbnail mr-3">
                <img src="img/<?= $article->img ?>">
            </div>
            <div class="media-body">
                <h5 class="mt-0"><?= $article->title ?></h5>
                <?= $article->content ?>
                <small class="text-muted">-- <?= $article->name ?></small>
            </div>
        </div>
        <!-- Bootstrap media object -->
        <hr>
        <?php endforeach ?>
        <?php else : ?>
        <div class="alert alert-warning">No results found!</div>
        <?php endif ?>
    </div>
</body>

</html> 