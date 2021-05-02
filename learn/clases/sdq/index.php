<?php

require 'sample/Cuadrado.php';
$cuadrado = new Cuadrado;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Clases en PHP</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>

<?php 
	$cuadrado->drawSquare(10, 10);
?>

</body>
</html>