<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical CMS</title>
</head>
<body>
    <div class="container">
        <?php 
            $server = "localhost";
            $user = "root";
            $password = "";
            $db = "facturacion";

            $connection = mysqli_connect($server, $user, $password, $db);

            if($connection){
                echo "Connection successful";
            }else{
                echo "Connection error ". die();
            }
        ?>
    </div>
</body>
</html>