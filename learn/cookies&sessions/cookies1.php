<?php
@$nombre = $_POST['nombre'];
@setcookie('usuario', $nombre, time()+4800);

if($nombre){
    echo "The cookie should have been created";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies with PHP</title>
</head>
<body>
    <form method="POST">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <button class="btn btn-primary">Enviar</button>
    </form>
    <?php 
        if($_COOKIE){
            echo "<span>Hay una cookie guardada y su valor es:  {$_COOKIE['usuario']} </span>"; 
        }else{
            echo "No se encontraron cookies guardadas!";
        }
    ?>
</body>
</html>