<?php
    @$visita = $_COOKIE['visita'];
    setcookie("visita", date('d/m/Y'), time()+365*24*60*60); // or date('d/m/Y | H:i:s')
    if(@$visita){
        @$contador = $_COOKIE['contador']+1;
        echo "¡Que alegría verte de nuevo por aquí! <br/>";
        echo "Tu última visita fue el $visita <br/>";
        setcookie("contador", $contador, time()+365*24*60*60);
        echo "Nos has visitado unas $contador veces";
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