<!DOCTYPE html>
<html>
<head>
	<title>Cavelo Velo App 1.0</title>
	<meta charset="utf-8">
	<meta name="description" content="Aplicación de gestión de clientes, productos y servicios del salón De Cavelo Velo Clínica">
	<link href="estilos.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include("includes/conexion.php") ?>
</head>
<body>
<main id="contain">
<div id="top-header" class="top-header">
	<?php 
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$diagnostico = $_POST['diagnostico'];
	$tratamiento = $_POST['tratamiento_sel'];
	$proceso = $_POST['proceso'];
	$productos = $_POST['productos'];

	?>
	<h1 class="titulo">De Cavelo Velo Clinica Del Cabello</h1>
	<div class="menu" id="menu">
		<ul class="menu-listado" id="menu-listado">
			<li class="list_opt">Home</li>
			<li class="list_opt">Nuevo Cliente</li>
			<li class="list_opt">Listado de Clientes</li>
			<li class="list_opt">Productos Disponibles</li>
			<li class="list_opt">Servicios</li>
		</ul>
		<span class="little">App 1.0</span>
	</div>
</div>
<section class="principal-body" id="principal-body">
	<section class="body-movement" id="body-movement">
		<header class="sec-head" id="sec-head">
			<h3 class="title-sec">Ingreso de Nuevo Cliente</h3>
            <div class="apart">
			<cite>
				Por favor compruebe que estos han sido los datos que ha ingresado para proceder con la inserción de los mismos.<br/>
			</cite>
            </div>
			<span class="line">----</span>
		</header>
<?php 
	$sql = "INSERT INTO clientes (nombre, apellido, diagnostico, tratamiento, proceso, productos)
VALUES ('$nombre', '$apellido', '$diagnostico', '$tratamiento', '$proceso', '$productos')";

if ($mysqli->query($sql) === TRUE) {
    echo "<span class='title-sec'>"."¡Nuevo cliente agregado exitosamente! :)"."</span>";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>

	</section>
</section>
</main>
</body>
</html>