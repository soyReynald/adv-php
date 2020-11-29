<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <div class="container">
        <h1>To do list</h1>
        <a href="add-task.php" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Agregar </a>
        <?php require_once('config/conexion.php'); ?>
        <?php
            $sql = "SELECT * FROM tasks";
            $result = $con->query($sql);
            $row = "";
            while($row = $result->fetch_assoc()): ?>
            <div class="task_container border form-group">
                <a href="edit_task.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-xs pull-right"><i class="fa fa-edit"></i></a>
                <a href="delete_task.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs pull-right"><i class="fa fa-trash"></i></a>
                <h2><?php echo $row['title']; ?></h2>
                <p><?php echo $row['task']; ?></p>
            </div>
            <?php endwhile; ?>
    </div>
    <?php require_once('config/desconectar.php'); ?>
</body>
</html>