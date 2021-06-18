<?php

	include("includes/header.php");
	if(isset($nombresUs)){
		include("profile.php");
	}else{
		
		//include("includes/header.php");
		$servidor = "localhost";
		$usuario= "root";
		$password = "";
		$base_datos = "chat";

		$conexion = new mysqli($servidor, $usuario, $password, $base_datos);


		function formatearFecha($fecha){
			return date('g:i a', strtotime($fecha));
		}

			if (isset($_POST['enviar'])) {
				
				$nombre = $_POST['nombre'];
				$mensaje = $_POST['mensaje'];
				
				$consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
				
				$ejecutar = $conexion->query($consulta);
				
				if ($ejecutar){
					echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
				}
			}

		include("admin-reg.php");
		include("includes/footer.php");

	}

?>