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

            if($result){
                echo "Exito!";
            }
            
            while($row = $result->fetch_assoc()){
                echo "<h1>{$row['title']}</h1>";
                echo "<p>{$row['task']}</p>";
            }
            ?>
    </div>
</body>
</html>