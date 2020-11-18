<?php
	include_once "includes/config.php";
	include_once "API/index.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>MySQL desde PHP</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>
	<h4>Todas las marcas</h4>
	<p>
		Agregar los botones eliminar y editar a las Marcas
	</p>
	<table class="table">
		<thead>
			<tr>
				<td scope="col"><b>Nombre</b></td>
			</tr>
		</thead>
		<tbody>
			<?php while($mark = mysqli_fetch_assoc($marks)): ?>
				<tr>
					<td><?php echo $mark['name'] ?></td>
					<td><a href="editar.php?item=<?php echo $mark['id']; ?>&name=<?php echo $mark['name']; ?>&option=editar">Editar</a></td>
					<td><a href="?item=<?php echo $mark['id']; ?>&option=eliminar">Eliminar</a></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</body>
</html>