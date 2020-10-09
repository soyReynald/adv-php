<?php

$productos = ["Manzana", "Pera", "Uva", "Naranja", "Mango"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Variable $_GET</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>
	<div style="margin-top:  20px" class="container">
		<table class="table table-striped">
			<tr>
				<td colspan="2">Listado de productos</td>
			</tr>

			<?php foreach($productos as $producto): ?>

			<tr>
				<td>{ <?php $producto; ?>}</td>
				<td><a href="detalles.php" class="btn btn-sm btn-dark"> Detalles </a></td>
			</tr>

			<?php endforeach; ?>

		</table>
	</div>
</body>
</html>