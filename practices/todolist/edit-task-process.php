<?php
require_once('config/conexion.php');

$title = $_POST['title'];
$task = $_POST['task'];
$id = $_GET['id'];

$sql = "UPDATE tasks SET title = '$title', task = '$task' WHERE id = $id";

$rs = $con->query($sql);

if(!$rs->error){
    header("Location: index.php");
}

?>