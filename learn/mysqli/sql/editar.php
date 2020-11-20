<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Marca</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>
    <h1>Editar marca</h1>
    <form action="index.php?item=<?php echo $_GET['item']; ?>&option=editar" method="post" class="form">
        <div class="form-group">
            <input type="text" name="name" value="<?php $_GET['name']; ?>" class="form-control">
            <input type="submit" value="Actualizar" class="btn btn-submit">
        </div>
    </form>
</body>
</html>