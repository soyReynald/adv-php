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
			<h3 class="title-sec">Listado de clientes actuales</h3>
            <div class="apart">
			<cite>
				Por favor compruebe que estos han sido los datos que ha ingresado para proceder con la inserción de los mismos.<br/>
			</cite>
            </div>
			<span class="line">----</span>
		</header>
		<form action="ingreso.php" method="post" class="formulario">
			<label for="nombre" class="nombre_completo">Nombre Completo:</label>
			<input type="text" name="nombre" class="info_txt" id="nombre_txt" <?php echo "value='$nombre'"; ?>>

			<label for="apellidos" class="apellidos">Apellidos:</label>
			<input type="text" name="apellido" class="info_txt" id="apellidos_txt" <?php echo "value='$apellido'" ?>>
			
			<label for="diagnostico" class="diagnostico">Diagnóstico:</label>
			<input type="text" name="diagnostico" class="info_txt" id="diagnostico_comp" <?php echo "value='$diagnostico'"; ?>>

			<label for="tratamiento" class="tratamiento">Tratamiento:</label>
			<textarea name="tratamiento_sel" id="threatment_proc" rows="4" cols="50" ><?php echo "$tratamiento" ?></textarea>
			
			<label for="proceso" class="proceso">Proceso:</label>
			<textarea id="proceso_area" name="proceso" class="process" rows="4" cols="50" ><?php echo "$proceso" ?></textarea>

			<label for="productos" class="productos">Productos Adquiridos:</label>
			<textarea name="productos" id="products_taken" rows="4" cols="50" ><?php echo "$productos" ?></textarea>
			</ul>
			<input type="submit" value="Ingresar" class="boton_last">
		</form>
	</section>
</section>
</main>
</body>
</html>