<?php

require 'classesBasics.php';
require 'classIntermediate.php';

$math = new Operacion(10, 20);

$suma = $math->getSuma();

echo "La suma en la Clase hace: ".$suma. "</br>";

$customer = new Cliente("40225355516", "Reynald", 25);

echo $customer->getDatosPersonales();

$customer->setCredito(40000);
echo "<br/>".$customer->getCredito();
?>