<?php
	$servidor = "localhost";
	$usuario= "reynald";
	$password = "rey123*";
	$base_datos = "chatEasy";



	$conexion = new mysqli($servidor, $usuario, $password, $base_datos);
	
	function formatearFecha($fecha){
		return date('g:i a', strtotime($fecha));
	}
	///consultamos a la base
	$consulta = "SELECT * FROM chat ORDER BY id DESC";
	$ejecutar = $conexion->query($consulta); 
	while($fila = $ejecutar->fetch_array()) : 
?>
	<div id="datos-chat">
		<span style="color: #1C62C4;"><?php echo $fila['nombre']; ?></span>
		<span style="color: #848484;"><?php echo $fila['mensaje']; ?></span>
		<span style="float: right;"><?php echo formatearFecha($fila['fecha']); ?></span>
	</div>
	
	<?php endwhile; ?>