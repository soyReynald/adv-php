<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "todolist";

$con = new mysqli($host, $user, $pass, $db);

if($con->connect_errno){
    echo "There was an error connecting";
}
?>