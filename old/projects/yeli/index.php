<?php
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_password'] = "";
$db['db_name'] = "cavelo";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(isset($_POST['agregar_cliente'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $query = "INSERT INTO clientes(nombre, apellido, telefono, email)";
    $query .= "VALUES('$nombre', '$apellido', '$telefono', '$email')";

    $agregar_cliente = mysqli_query($connection, $query);

    if(!$agregar_cliente){
        die("QUERY FAILED " . mysqli_error($connection));
    }else{
        header("Location: clientes.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Yeli Salon</title>
</head>
<body>
<div class="container">
    <div class="header">

        <div class="logo">
            <h1>Yeli Salon</h1>
        </div>

        <div class="section-title">
            <h2>Agregar un cliente</h2>
        </div>
    </div>

    
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Name:</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" name="apellido" class="form-control">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control">
        </div>
        <button type="submit" name="agregar_cliente" class="btn btn-success">Agregar cliente</button>
        <a href="clientes.php" class="btn btn-info">Lista de clientes</a>
    </form>
</div>
</body>
</html>