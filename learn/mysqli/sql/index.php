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
	<h4>Mazda</h4>
	<p>
		En una tabla mostrar todos los modelos que la marca Mazda manufacturó entre el 2014 y 2016
	</p>
	<table>
		<thead>
			<tr>
				
				<td><b>A&ntilde;o</b></td>
				<td><b>Nombre</b></td>
				<td><b>Modelo</b></td>
			</tr>
		</thead>
		<tbody>
			<?php while($model = mysqli_fetch_assoc($mazda)): ?>
				<tr>
					<td><?php echo $model['year'] ?></td>
					<td><?php echo $model['name'] ?></td>
					<td><?php echo $model['model'] ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
	<h4>Modelos diferentes por marca entre los a&ntilde;os 2004-2006</h4>
	<table>
		<thead>
			<tr>
				<td><b>Nombre</b></td>
				<td><b>A&ntilde;o</b></td>
			</tr>
		</thead>
		<tbody>
			<?php while($model = mysqli_fetch_assoc($years)): ?>
				<tr>
					<td><?php echo $model['name'] ?></td>
					<td><?php echo $model['year'] ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</body>
</html>