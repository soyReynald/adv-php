<?php
    @$visita = $_COOKIE['visita'];
    setcookie("visita", date('d/m/Y'), time()+31536000);
    if(@$visita){
        echo "¡Que alegría verte de nuevo por aquí! <br/>";
        echo "Tu última visita fue el $visita";
    }else{
        echo "¡Bienvenido a la web por primera vez!";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas al sitio</title>
</head>
<body>
    
</body>
</html>