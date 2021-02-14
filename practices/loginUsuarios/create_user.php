<?php
require_once 'pdo.php';
require_once 'models/user.php';
openSession();

$profiles = getProfiles($pdo);
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
    <?php require 'components/navbar.php'; ?>
    <div class="container">

        <h3>Create user</h3>
        <form action="controllers/addUser.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input name="username" class="form-control" type="text" id="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input name="password" class="form-control" type="password" id="password">
            </div>
            <div class="form-group">
                <label for="profile">Perfil:</label>
                <select class="form-control" name="profile" id="profile">
                    <?php foreach ($profiles as $profile): ?>
                        <option value="<?= $profile->id ?>"><?= $profile->profile; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-success">Create</button>
        </form>

    </div>
</body>

</html> 