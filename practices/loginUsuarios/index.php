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
        <a class="btn btn-success" href="create_user.php">Create user</a>
        <hr>

        <h3>Show users</h3>
        <a class="btn btn-info" href="show_user.php">Show users</a>
        <hr>

        <h3>Edit user</h3>
        <a class="btn btn-warning" href="edit_user.php">Edit user</a>
        <hr>

        <h3>Delete user</h3>
        <a class="btn btn-danger" href="delete_user.php">Delete user</a>
        <hr>

    </div>
</body>

</html> 