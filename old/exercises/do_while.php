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
    <form action="while.php" method="post" class="col-md-6 offset-3 mt-5">
        <h1>While loop</h1>
        <div class="form-group">
            <p>Introduce un n&uacute;mero para realizar un conteo desde 1 hasta el n&uacute;mero que hayas introducido:</p>
            <label for="number">N&uacute;mero</label>
                <input type="text" class="form-control" name="number">
        </div>
        <input type="submit" value="Enviar" class="btn-primary mt-3" name="envio">
    
        <?php
            if(isset($_POST['envio'])){
                $number = $_POST['number'];
                $aux = 1;
                do{
                    echo "<span>".$aux++."</span>";
                }while($aux <= $number);
            }
        ?>
        </form>
</body>
</html>