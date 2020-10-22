<?php

require_once "clases/conexion/conexion.php";

$conexion = new Conexion;

$query = "SELECT * FROM pacientes";
echo "<pre>";
print_r($conexion->obtenerDatos($query));
echo "</pre>";
?>