<!DOCTYPE html>
<html>
<head>
	<title>Cavelo Velo App 1.0</title>
	<meta charset="utf-8">
	<meta name="description" content="Aplicación de gestión de clientes, productos y servicios del salón De Cavelo Velo Clínica">
	<link href="estilos.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<main id="contain">
<?php include("includes/header.php") ?>
<section class="principal-body" id="principal-body">
	<section class="body-movement" id="body-movement">
		<header class="sec-head" id="sec-head">
			<h3 class="title-sec">Listado de clientes</h3>
            <div class="apart">
			<cite>
				Apartado en el cual se agrega el texto descriptivo de cada sección.<br/>
				Aquí se describe de qué trata cada apartado y cuáles puntos serán desarrollados
				en el mismo.
			</cite>
            </div>
			<span class="line">----</span>
		</header>
		<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "cavelo_velo";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT nombre, apellido, diagnostico, tratamiento, proceso, productos FROM clientes";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "<div class='cliente'>"." - Nombre: " . $row["nombre"]. "<br>- Apellido: " . $row["apellido"]. "<br>"
		         . "<br>- Diagnostico: " . $row["diagnostico"]. "<br>" . "<br>- Tratamiento: " . $row["tratamiento"]. "<br>"
		         . "<br>- Proceso: " . $row["proceso"]. "<br>" . "<br>- Productos: " . $row["productos"]. "<br></div>";
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
		?>
	</section>
</main>
</body>
</html>