<?php

$productos = ["Manzana", "Pera", "Uva", "Naranja", "Mango"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Variable $_GET</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div style="margin-top:  20px" class="container">
		<table class="table table-striped">
			<tr>
				<td colspan="2">Listado de productos</td>
			</tr>

			<?php foreach($productos as $producto): ?>

			<tr>
				<td>{ <?php echo $producto; ?> }</td>
				<td><a href="detalles.php?producto=<?php echo $producto; ?>" class="btn btn-sm btn-dark"> Detalles </a></td>
			</tr>

			<?php endforeach; ?>

		</table>
	</div>
</body>
</html>