<?php
/* 
Array ( 
    [date] => 2020-12-1 
    [time] => 16:05 
    [category] => 3 
    [name] => To learn PHP 
)
*/
require('config/mysqli.php');
$date = $con->escape_string(strip_tags($_POST['date']));
$time = $con->escape_string(strip_tags($_POST['time']));
$category = $con->escape_string(strip_tags($_POST['category']));
$name = $con->escape_string(strip_tags($_POST['name']));

$dateFixed = date('Y-m-d h:i:s', strtotime($date . ' ' . $time));

$sql = "INSERT INTO events (category, name, date) VALUES ('$category', '$name', '$dateFixed')";

$con->query($sql) or die($con->error);

$url = date('m-Y', strtotime($date . ' ' . $time));

header('Location: index.php?month='.$url);

?>