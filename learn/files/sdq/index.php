<!DOCTYPE html>
<html>
<head>
	<title>Subir y controlar archivos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<form action="subir.php" method="post"  enctype="multipart/form-data">
	
		<div class="form-group">
			<label for="archivo">Archivo</label>
			<input type="file" name="archivo" id="archivo">
		</div>

		<div class="form-group">
			<input type="submit" value="Enviar">
		</div>

	</form>
</body>
</html>