<?php
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
    <title>Visitas a páginas distintas en la misma session</title>
</head>
<body>
    <h3>Bienvenido!</h3>
    <p>Has visitado esta web unas: <?php echo @$_SESSION['counter']; ?></p>
</body>
</html>