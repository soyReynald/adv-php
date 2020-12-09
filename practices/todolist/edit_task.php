<?php

require_once('config/conexion.php');

@$id = $_GET['id'];

$sql = "SELECT * FROM tasks WHERE id = $id";

$rs = $con->query($sql);

$task = $rs->fetch_object();

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
        <form action="edit-task-process.php?id=<?php echo $id; ?>" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $task->title; ?>">
            </div>
            <div class="form-group">
                <label for="task">Task</label>
                <textarea name="task" id="" cols="30" rows="10" class="form-control"><?php echo $task->task; ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-warning pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Update task</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php require_once("config/desconectar.php"); ?>