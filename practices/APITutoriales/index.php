<?php

include 'bd/BD.php';

$table =  "tutorial"; // This is temporary (this is better if comes dynamically)

header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET) && count($_GET) > 0){
        $query = <<<INPUT
                SELECT * FROM {$table} WHERE id = {$_GET['id']}
                INPUT;
        $resultado = metodoGet($query);
        echo json_encode($resultado->fetch(PDO::FETCH_ASSOC));
    } else {
        $query = <<<INPUT
                    SELECT * FROM {$table}
                INPUT;
        $resultado = metodoGet($query);
        echo json_encode($resultado->fetchAll());
    }
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD'] == 'POST'){
    unset($_POST['METHOD']);
    
    // This entire block of variables will be change later by extract() function
    $name = $_POST['nombre'];
    $resource = $_POST['recurso'];
    $developer = $_POST['desarrollador'];
    $description = $_POST['descripcion'];

    $query = <<<INPUT
                INSERT INTO {$table}(nombre, recurso, desarrollador, descripcion) VALUES ('{$name}', '{$resource}', '{$developer}', '{$description}')
            INPUT;
    $queryAutoIncrement = <<<INPUT
                            SELECT MAX(id) as id from {$table}
                        INPUT;

    $result = metodoPost($query, $queryAutoIncrement);
    echo json_encode($result);
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD'] == 'PUT'){
    unset($_POST['METHOD']);
    
    // This entire block of variables will be change later by extract() function
    $id = $_GET['id'];
    $name = $_POST['nombre'];
    $resource = $_POST['recurso'];
    $developer = $_POST['desarrollador'];
    $description = $_POST['descripcion'];

    $query = <<<INPUT
                UPDATE {$table} SET nombre = '{$name}', recurso = '{$resource}', desarrollador = '{$developer}', descripcion = '{$description}' WHERE id = '$id'
            INPUT;

    $result = metodoPut($query);
    echo json_encode($result);
    header("HTTP/1.1 200 OK");
    exit();
}

if($_POST['METHOD'] == 'DELETE'){
    unset($_POST['METHOD']);
    
    // This entire block of variables will be change later by extract() function
    $id = $_GET['id'];

    $query = <<<INPUT
                DELETE FROM {$table} WHERE id = '$id'
            INPUT;

    $result = metodoDelete($query);
    echo json_encode($result);
    header("HTTP/1.1 200 OK");
    exit();
}

header("HTTP/1.1 400 Bad Request");
?>