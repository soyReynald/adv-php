<?php 
    $color = "";
    if(isset($_POST['color'])){
        $color = $_POST['color'];
        setcookie('color', $color, time()+4800);
    }else if(isset($_COOKIE['color'])){
        $color = $_COOKIE['color'];
    }else{
        $color = 'white';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color switcher</title>
</head>
<body style="background-color: <?php echo $color; ?>">

    <form method="post">
        <label for="color">Escoge un color:</label>
        <select name="color" id="color_select">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="gray">Gray</option>
        </select>
        <button>Cambiar el color!</button>
    </form>

</body>
</html>