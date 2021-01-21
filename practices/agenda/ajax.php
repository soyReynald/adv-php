<?php

require 'config/mysqli.php';

$id = $_GET['id'];

$query = "SELECT 
            id,
            DATE_FORMAT(date, '%Y-%m-%d') AS date,
            DATE_FORMAT(date, '%H:%i') AS time,
            cat,
            name
        FROM events WHERE id = $id";

$rsEvent = $con->query($query) or die($con->error);

echo json_encode($rsEvent->fetch_assoc());

?>