<?php 
$mysqli = new mysqli("localhost", "root", "", "cavelo_velo");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";


 ?>