<?php
$data = simplexml_load_file('data/canciones.xml');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Leyendo archivos en formato XML</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div style="margin-top: 20px" class="container">
		<div class="row">
			<?php foreach($data->album as $album): ?>
			<div class="col-md-4">
				<div class="card form-group">
				  	<img class="card-img-top" src="img/<?php echo $album['foto'] ?>" alt="<?php echo $album['nombre']; ?>">
					<div class="card-body">
						<h4 class="card-title"><?php echo $album['nombre']; ?></h4>
						<h5 class="card-title"><?php echo $album['artista']; ?></h5>
						<p class="card-text">[<?php echo $album['fecha']; ?>] <?php echo $album['descripcion']; ?> </p>
					</div>
				 	<ul class="list-group list-group-flush">	 		
					 <li class="list-group-item"><span class="float-right">{ duracion }</span>Track #{ track }: { titulo } </li>
				  	</ul>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</body>
</html>