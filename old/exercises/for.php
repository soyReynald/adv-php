<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Switch case</title>
    <style>
        span{
            display: block;
        }
    </style>
</head>
<body>
    <form action="for.php" method="post" class="col-md-6 offset-3 mt-5">
        <h1>For</h1>
        <div class="form-group">
            <p>Introduce el n&uacute;mero de la tabla de multiplicar que quieras ver (1-12):</p>
            <label for="number">N&uacute;mero</label>
                <input type="number" class="form-control" name="number">
        </div>
        <input type="submit" value="Enviar" class="btn-primary mt-3" name="envio">
    
        <?php
            if(isset($_POST['envio'])){
                $number = $_POST['number'];
                for($i = 1; $i <= 12; $i++){
                    echo "<span> $i x $number: " . $number * $i . "</span>";
                }
            }
        ?>
        </form>
</body>
</html>