<?php

require_once('models/Task.php');

@$id = $_GET['id'];

$task = Task::getTask($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list - edit task</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <div class="container">
        <h2>Edit tarea</h2>
        <form action="controllers/editTask.php" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="<?= $task->title; ?>">
            </div>
            <div class="form-group">
                <label for="task">Task</label>
                <textarea name="task" id="" cols="30" rows="10" class="form-control"><?= $task->task; ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="form-group">
                <button class="btn btn-warning pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Update task</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php // require_once("config/desconectar.php"); ?>