<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$dataBase = 'bank';

$mysqli = mysqli_connect($server, $user, $pass, $dataBase) or die(mysqli_connect_error());

?>