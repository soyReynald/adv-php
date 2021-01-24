<?php

require 'config/mysqli.php';

$id = $_GET['id'];

$sql = "SELECT DATE_FORMAT(date, '%m-%Y') AS url FROM events WHERE id = $id";

$rsUrl = $con->query($sql) or die($con->error);

$url = $rsUrl->fetch_object()->url;

$deleteSQL = "DELETE FROM events WHERE id = $id";

$con->query($deleteSQL) or die($con->error);

header('Location: index.php?month=' . $url);

?>