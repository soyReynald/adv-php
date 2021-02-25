<?php
require 'pdo.php';
require_once 'models/user.php';
openSession();

$permissions = getPermissions($pdo);

/*
if(!isset($_SESSION['user']) || $_SESSION['user']->profile > 1){
    header('Location: index.php');
}
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <style>
        @import url('css/bootstrap.css');
    </style>
</head>

<body>
    <pre>
    <?php 
        print_r($permissions);
    ?>
    </pre>
    <?php require 'components/navbar.php'; ?>
    <div class="container">

        <h3>Set profile permissions</h3>

    </div>
</body>

</html> 