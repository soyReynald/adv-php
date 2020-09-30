<!DOCTYPE html>
<html>
<head>
	<title>Función que dibuja cuadrado de asteriscos</title>
</head>
<body>

	<h4>Crear una función haciendo que reciba como parámetros dos números cualquiera, uno para ancho y otro para alto</h4>
	<?php

	function setSquare($ancho, $largo){
		function cols(&$ancho){
			for ($i=1; $i <= $ancho; $i++) { 
				echo " * ";
			}
		}
		
		for ($j=1; $j <= $largo; $j++) { 
			echo "<br/>";
			$columnas = cols($ancho);
			echo $columnas;
		}
		
	}

	setSquare(10, 8);

	/* 	Ejemplo de resultado

		* * * * * * * * * *
		* * * * * * * * * *
		* * * * * * * * * *
		* * * * * * * * * *
		* * * * * * * * * *
		* * * * * * * * * *
		* * * * * * * * * *
		* * * * * * * * * *
		* * * * * * * * * *
		* * * * * * * * * *
	
	*/

	?>
</body>
</html>