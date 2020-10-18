<!--
Problemas a resolver:
Haz un listado de los archivos *.pdf que existen en la carpeta pdf
Haz un listado de los archivos *.jpg, *.gif, *.png que existen en la carpeta img

-->

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
			<input type="file" name="archivo" id="archivo" class="form-control">
		</div>

		<div class="form-group">
			<input type="submit" value="Enviar" class="btn btn-success">
		</div>
	</form>
	<?php
	$filesLocation = glob('img/*.*');
	echo 'Images:';
	echo '<ul>';
	foreach($filesLocation as $file){
		$img = explode('/', $file)[1];
		echo '<li>'.$img.'</li>';
	}
	echo '</ul>';

	$filesLocation = glob('pdf/*.*');
	echo 'PDFs:';
	echo '<ul>';
	foreach($filesLocation as $file){
		$pdf = explode('/', $file)[1];
		echo '<li>'.$pdf.'</li>';
	}
	echo '</ul>';
	?>
</body>
</html>