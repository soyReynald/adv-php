<?php require_once('config/conexion.php'); ?>
<?php

$id = $_GET['id'];

$sql = "DELETE FROM tasks WHERE id = $id";

$rs = $con->query($sql);

if($rs){
    header('Location: index.php');
}
?>