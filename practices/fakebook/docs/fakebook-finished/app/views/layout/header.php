<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= App::basedir() ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= App::basedir() ?>/public/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= App::basedir() ?>/public/css/general.css">
    <link rel="stylesheet" href="<?= App::basedir() ?>/public/css/jquery.Jcrop.css">
    <script src="<?= App::basedir() ?>/public/js/jquery-3.3.1.js"></script>
    <script src="<?= App::basedir() ?>/public/js/bootstrap.bundle.js"></script>
    <title>Fakebook</title>
</head>
<body>
    <div class="container">
        <?php if(Errors::checkMsg()): ?>
            <?php require_once('errors.php') ?>
        <?php endif ?>
        <header class="form-group">
            <nav class="navbar navbar-expand-la navbar-light bg-light">
                <a class="navbar-brand" href="<?= App::basedir() ?>/"><img src="<?= App::basedir() ?>/public/img/fakebook-logo.jpg" ></a>
            </nav>
        </header>