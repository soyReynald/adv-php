<?php
    require_once 'models/Task.php';

    $tasks = Task::allTasks();
?>
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
        <?php if($tasks): ?>
        <?php foreach($tasks as $task): ?>
            <div class="task_container border form-group">
                <a href="edit-task.php?id=<?= $task->id; ?>" class="btn btn-warning btn-xs pull-right"><i class="fa fa-edit"></i></a>
                <a href="controllers/deleteTask.php?id=<?= $task->id; ?>" class="btn btn-danger btn-xs pull-right"><i class="fa fa-trash"></i></a>
                <h2><?= $task->title; ?></h2>
                <p><?= $task->task; ?></p>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    
</body>
</html>