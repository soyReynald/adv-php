<?php
	if(!$_POST[])
	if(isset($_POST['nombre']) || trim($_POST['nombre']) == ""){
		header("Location: index.php");
	}
	
	if(isset($_POST['pais']) || trim($_POST['pais']) == ""){
		header("Location: index.php");
	}

	// and so on and so forth...
?>
<!DOCTYPE html>
<html>
<head>
	<title>Resultados variable $_POST</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div style="margin-top: 20px" class="container">
		<table class="table table-striped">
			<tr>
				<td>Nombre:</td>
				<td><?php echo $_POST['nombre']; ?></td>
			</tr>
			<tr>
				<td>País:</td>
				<td><?php echo $_POST['pais']; ?></td>
			</tr>
			<tr>
				<td>Sexo:</td>
				<td><?php echo $_POST['sexo']; ?></td>
			</tr>
			<tr>
				<td>Intereses:</td>
				<td>
					<ul>
					<?php 
						foreach($_POST['intereses'] as $interes){
							echo "<li>$interes</li>";
						}
					?>
					</ul>
				</td>
			</tr>
			<tr>
				<td>Comentario:</td>
				<td><?php echo $_POST['comentario']; ?></td>
			</tr>
		</table>
	</div>
</body>
</html>