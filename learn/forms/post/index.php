<!DOCTYPE html>
<html>
<head>
	<title>Variable $_POST</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div style="margin-top: 20px" class="container">
		<form action="resultados.php" method="post">
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input class="form-control form-control-sm" type="text" name="nombre">
			</div>
			<div class="form-group">
				<label for="pais">País:</label>
				<select class="form-control form-control-sm" name="pais">
					<option value="DO">República Dominicana</option>
					<option value="HA">Haiti</option>
					<option value="PR">Puerto Rico</option>
					<option value="JA">Jamaica</option>
				</select>
			</div>
			<div class="form-group">
				<label for="sexo">Sexo:</label>
				<div class="row">
					<div class="col-6">
						<label><input type="radio" name="sexo" value="Masculino"> Masculino</label>
					</div>
					<div class="col-6">
						<label><input type="radio" name="sexo" value="Femenino"> Femenino</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="intereses">Intereses:</label>
				<div class="row">
					<div class="col-6">
						<label><input type="checkbox" name="intereses[]" value="Computadoras"> Computadoras</label><br>
						<label><input type="checkbox" name="intereses[]" value="Cine"> Cine</label><br>
						<label><input type="checkbox" name="intereses[]" value="Arte"> Arte</label>
					</div>
					<div class="col-6">
						<label><input type="checkbox" name="intereses[]" value="Tecnologia"> Tecnología</label><br>
						<label><input type="checkbox" name="intereses[]" value="Deportes"> Deportes</label>	
					</div>
				</div>		
			</div>
			<div class="form-group">
				<label for="comentario">Comentario:</label>
				<textarea class="form-control form-control-sm" name="comentario"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
</body>
</html>