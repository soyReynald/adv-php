<?php
$db['db_host'] = "localhost";
$db['db_user'] = "soyreynald";
$db['db_password'] = "x@7YtYtngbiNra7W";
$db['db_name'] = "cavelo";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
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
            <h2>Lista de clientes</h2>
        </div>
    </div>

    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
    <?php

        $query = "SELECT * FROM clientes";
        $sel_users = mysqli_query($connection, $query);
        // Getting users by cols from table
        while($row = mysqli_fetch_assoc($sel_users)){
            $id = $row['id'];
            $email = $row['email'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $telefono = $row['telefono'];

                echo "<tr>";
                echo "<td>".$id."</td>";
                echo "<td>".$email."</td>";
                echo "<td>".$nombre."</td>";
                
                echo "<td>".$apellido."</td>";
                echo "<td>".$telefono."</td>";

                echo "<td><a href='clientes.php?delete=$id'>Delete</a></td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>
<?php

if(isset($_GET['delete'])){
    $the_customer_id = $_GET['delete'];
    $query = "DELETE FROM clientes WHERE id = {$the_customer_id}";

    $delete_query = mysqli_query($connection, $query);
    header("Location: clientes.php");
}

?>
<a href="javascript:history.go(-1);">Atras</a>
</div>
</body>
</html>