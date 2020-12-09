<?php
@$nombre = $_POST['nombre'];
@setcookie('usuario', $nombre, time()+4800);

if($nombre){
    echo "The cookie should have been created";
}

session_start();
@$visited = $_SESSION['counter'];
if(@$visited){
    $_SESSION['counter'] += 1;
}else{
    $_SESSION['counter'] = 1;
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

        if(@$_COOKIE['usuario']){
            echo "<span>Hay una cookie guardada y su valor es:  {$_COOKIE['usuario']} </span>";
        }else{
            echo "No se encontraron cookies guardadas!";
        }

        if(isset($_SESSION['counter'])){
            echo "<br/>Hay una sesion activa, que cuenta las visitas y su valor es: {$_SESSION['counter']}";
        }
        if($_SESSION['counter'] == 1){
            echo "<br/>Es la primera vez que entras a esta web con esta sesion!";
        }
    ?>
</body>
</html>