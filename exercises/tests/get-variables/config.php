<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'sdq_practicas';

$con = mysqli_connect($server, $username, $password, $database);

if(mysqli_connect_errno()){
    die("Error connecting");
}

?>