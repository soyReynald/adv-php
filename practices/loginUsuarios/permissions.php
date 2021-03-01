<?php
require 'pdo.php';
require_once 'models/user.php';
openSession();

$permissions = getPermissions($pdo);

if(!isset($_SESSION['user']) || !in_array('C_USER', $_SESSION['user']->perm)){
    header('Location: index.php');
}
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

        <h3>Set profile permissions</h3>
        <?php foreach($permissions as $profile): ?>
            <strong><?= $profile['name']; ?></strong>
            <form action="controllers/setPermissions.php" method="post">
                <input name="profile" type="hidden" value="<?= $profile['id'] ?>">
                <?php foreach($profile['permissions'] as $permission): ?>
                    <div>
                        <label for="">
                            <input name="permissions[]" value="<?= $permission->id ?>" type="checkbox" <?= $permission->set ? 'checked' : '' ?>>
                            <?= $permission->description ?>
                        </label>
                    </div>
                <?php endforeach; ?>
                <button type="submit" class="btn btn-outline-success">Save</button>
            </form>
            <hr>
        <?php endforeach; ?>
    </div>
</body>

</html> 