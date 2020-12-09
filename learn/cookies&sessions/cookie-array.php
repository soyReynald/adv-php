<?php 
    $persona = array("Reynald", "Ramirez", "26", "República Dominicana", "passwordTest");
    setcookie("user[nombre]", $persona[0], time()+3600);
    setcookie("user[apellido]", $persona[1], time()+3600);
    setcookie("user[edad]", $persona[2], time()+3600);
    setcookie("user[pais]", $persona[3], time()+3600);

    echo "<br/>El nombre es: ". $_COOKIE['user']['nombre'];
    echo "<br/>El apellido es: ". $_COOKIE['user']['apellido'];
    echo "<br/>La edad es: ". $_COOKIE['user']['edad'];
    echo "<br/>El pais es: ". $_COOKIE['user']['pais'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting data from a form - PROJECT</title>
</head>
<body style="">

    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido">
        <label for="edad">Edad:</label>
        <input type="text" name="edad" id="edad">
        <label for="pais">Pais:</label>
        <input type="text" name="pais" id="pais">
        
        
        <input type="submit" value="Enviar">
    </form>

</body>
</html>