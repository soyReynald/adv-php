<?php
require 'sample/Calculos.php';

//Use Fecha\Calendario as Calendar;

$cal = new Calendario(5, 2021, true);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Clases en PHP</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>

<?php 
	echo $cal->dibujar();
	echo "Nombre del dia de hoy: ". Calculos::$today;
	echo "<br/>";
	echo "Dias del mes: ". Calculos::getCurrentMonthDays();
?>

</body>
</html>