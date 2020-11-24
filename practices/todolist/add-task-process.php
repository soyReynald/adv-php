<?php require_once('config/conexion.php');

@$title = $_POST['title'];
@$task = $_POST['task'];
$sql = "INSERT INTO tasks (title, task, date) VALUES ('$title', '$task', NOW())";

$result = $con->query($sql);

if($result){
    header("Location: index.php");
}

?>