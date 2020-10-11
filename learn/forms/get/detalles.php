<?php
$detalles = [
			 array("nombre"=>"Manzana", "precio"=>45.95, "color"=>"Rojo"),
			 array("nombre"=>"Pera", "precio"=>40.36, "color"=>"Verde"),
			 array("nombre"=>"Uva", "precio"=>95.21, "color"=>"Purpura"),
			 array("nombre"=>"Naranja", "precio"=>15.60, "color"=>"Naranja"),
			 array("nombre"=>"Mango", "precio"=>10.80, "color"=>"Amarillo")
			 ];

			$detalle = null;
			foreach($detalles as $producto){
				if($producto["nombre"] == $_GET['producto']){
					$detalle = $producto;
				}
			}
			if(!isset($_GET['producto']) || $detalle == null){
				header('Location: index.php');
			}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Resultados variable $_GET</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div style="margin-top: 20px" class="container">
		<table class="table table-striped">
			<tr>
				<td colspan="2">Detalles del producto</td>
			</tr>
			<tr>
				<td>Nombre:</td>
				<td> <?php echo $detalle["nombre"]; ?></td>
			</tr>
			<tr>
				<td>Precio:</td>
				<td>{ <?php echo $detalle["precio"]; ?> }</td>
			</tr>
			<tr>
				<td>Color:</td>
				<td>{ <?php echo $detalle["color"]; ?> }</td>
			</tr>
			
		</table>
	</div>
</body>
</html>