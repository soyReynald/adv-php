<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Switch case</title>
</head>
<body>
    <form action="switch_case.php" method="post" class="col-md-6 offset-3 mt-5">
        <h1>Switch case en PHP</h1>
        <div class="form-group">
            <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
                <input type="number" class="form-control" name="edad">
        </div>
        <input type="submit" value="Enviar" class="btn-primary mt-3" name="envio">
    
        <?php
            if(isset($_POST['envio'])){
                $nombre = $_POST['nombre'];
                $edad = $_POST['edad'];
                switch (true){
                    case $edad <= 40:
                        echo "Eres j&oacute;ven";
                    break;
                    case $edad < 18:
                        echo "Eres menor de edad";
                    break;
                    case $edad <= 65:
                        echo "Edad avanzada";
                    break;
                    default:
                        echo "Debes cuidarte";
                }
            }
            
        ?>
        </form>
</body>
</html>