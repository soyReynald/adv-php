<?php

include 'bd/BD.php';

define("table", "tutoriales"); // This is temporary (this is better if comes dynamically)

header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET)){
        $query = <<<INPUT
                SELECT FROM {constant("table")} WHERE id = {$_GET['id']}
                INPUT;
        $resultado = metodoGet($query);
        echo json_encode($resultado->fetch(PDO::FETCH_ASSOC));
    } else {
        $query = <<<INPUT
                    SELECT * FROM {constant("table")}
                INPUT;
        $resultado = metodoGet($query);
        echo json_encode($resultado->fetchAll());
    }
    header("HTTP/1.1 200 OK");
    exit();
}


?>