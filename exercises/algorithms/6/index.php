<?php

	// Crear las funciones aquí

?>
<!DOCTYPE html>
<html>
<head>
	<title>Retornando valores de las funciones</title>
</head>
<body>
	<h4>
	- Crear una función que retorne el resultado de sumar 2 ( dos ) números enviados como parámetros<br/>
    - Crear otra función que retorne verdadero si la división entre 2 ( dos ) números dados como parámetros es exacta
	</h4>

	<?php

	function suma($n1, $n2){
		return $n1 + $n2;
	}

	function restante($n1, $n2){
		return ($n1 % $n2) == 0 ? var_dump(true) : var_dump(false);
	}

	echo("<b>Sumatoria de dos números:</b>"."<br/>");
	echo suma(10, 2);
	echo "<br/>";
	echo("<b>Restante:</b>"."<br/>");
	echo restante(10, 2);

	?>

</body>
</html>